<?php


class FakeDB {
    public function query($sql, $param) {
        return array();
    }
}

class UserRepository {
    const BY_USERNAME_SQL = "Select ...";

    private $_db = null;

    function __construct($db) {
        $this->_db = $db;
    }

    public function loadUser($user) {
        return $this->_db->query(self::BY_USERNAME_SQL, $user);
    }
}

class UserRepositoryTest extends PHPUnit_Framework_TestCase {
    public function testLoadUser() {
        $stubDB = $this->getMock('FakeDB');
        $stubDB->expects($this->any())
               ->method('query')
               ->will($this->returnValue(array('name' => 'hubert')));
        $repo = new UserRepository($stubDB);
        $repo->loadUser('hubert');
    }
}
