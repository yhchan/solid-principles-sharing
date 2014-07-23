<?php

trait AdapterMixin
{
    private $pool;

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

class FacebookAdapter
{
    use AdapterMixin;
    public function doAPI($params) {
        // Make $request from $params
        $this->sendRequest($request);
    }
}
