<?php

class DatabaseConnection{

    private static $instance = null;
    private $connection;

    private $host = 'us-cdbr-iron-east-02.cleardb.net';
    private $username = 'b136d537fac753';
    private $password = '9ed85c19';
    private $database = 'heroku_26122f180cc9d1d';

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
