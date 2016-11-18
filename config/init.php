<?php

class config {
    private $host = 'mysql:host=127.0.0.127;dbname=orm';
    private $username = 'root';
    private $password = 'root';
    // connect
    public function bdd(){
        $host = $this->getHost();
        $username = $this->getUsername();
        $password = $this->getPassword();
        $pdo = new BDD($host,$username,$password);
        return $pdo;
    }
    public function getHost(){
        return $this->host;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}