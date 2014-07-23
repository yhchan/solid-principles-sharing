<?php

class UserRepository {
    const BY_USERNAME_SQL = "Select ...";

    private $_db = null;

    function __construct($db) {
        $this->_db = $db;
    }

    public function loadUser($user) {
        return $this->_db->query(self::BY_USERNAME_SQL, user);
    }
}
