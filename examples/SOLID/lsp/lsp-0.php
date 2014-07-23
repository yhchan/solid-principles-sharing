<?php

interface PersistentResource
{
    public function load();
}

class PostData implements PersistentResource
{
    // ...
}

class AuthData implements PersistentResource
{
    // ...
}

$postData = new PostData();
$loadPostData = $postData->load();

$authData = new AuthData();
$loadAuthData = $authData->load();
