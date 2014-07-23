<?php

class UserRepository {
    const BY_USERNAME_SQL = "Select ...";

    public function loadUser($user) {
        $db = Database::getInstance();
        return $db->query(self::BY_USERNAME_SQL, user);
    }
}
