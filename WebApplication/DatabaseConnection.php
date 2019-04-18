<?php

class DatabaseConnection{

    private static $instance = null;
    private $connection;

    private $host = 'us-cdbr-iron-east-02.cleardb.net';
    private $username = 'bafea7c0751e41';
    private $password = '0087ce97';
    private $database = 'heroku_e2ec126516fc265';

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
