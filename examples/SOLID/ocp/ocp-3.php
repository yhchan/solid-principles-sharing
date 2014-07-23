<?php

class FacebookAdapter
{
    private $pool;

    public function doAPI($params) {
        // Make $request from $params
        $this->sendRequest($request);
    }

    private function sendRequest($request) {
        $pool = $this->makeConnectionPool();
        $pool->doRequest($request);
    }

    private function makeConnectionPool() {
        if ($this->pool) {
            return $this->pool;
        }
        // connection pool implementation
    }
}
