<?php

class DatabaseConnection{

    private static $instance = null;
    private $connection;

    private $host = 'us-cdbr-iron-east-02.cleardb.net';
    private $username = 'b754fe3ec25f9a';
    private $password = 'e3908fef';
    private $database = 'heroku_3789075718b803c';

    private function __construct(){
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    public static function getInstance(){
        if(!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

}