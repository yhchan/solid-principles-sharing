<?php

// http://lassala.net/2010/11/04/a-good-example-of-liskov-substitution-principle/

interface PersistentResource
{
    public function load();
}

class PostData implements PersistentResource
{
    public function load()
    {
        return $this->db->load('post_data');
    }
}

class AuthData implements PersistentResource
{
    public function load()
    {
        $authData = $this->db->load('auth_data');
        $this->authenticator->auth($authData);
        return $authData;
    }
}
