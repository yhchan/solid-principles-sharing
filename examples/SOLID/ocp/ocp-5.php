<?php

abstract class RESTAdapter {
     abstract protected function createConnection();

     protected function parseResponse() {
         // Default implementation
     }
     public function apiRequest($uri, $body) {
        $conn = $this->createConnection();
        $resp = $conn->request($uri, $body);
        return $resp;
     }
}

class HTTPRestAdatper extends RESTAdapter {
    protected function createConnection() { 
        // create HTTP connection
    }
}

class HTTPSRestAdatper extends RESTAdapter {
    protected function createConnection() { 
        // create HTTPS connection
    }
}
