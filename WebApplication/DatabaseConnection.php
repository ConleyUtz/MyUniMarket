<?php

class DatabaseConnection{

    private static $instance = null;
    private $connection;

    private $host = 'us-cdbr-iron-east-02.cleardb.net';
    private $username = 'b1cf8caae175e0';
    private $password = '0029ea8e';
    private $database = 'heroku_9c10539a92cf659';

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
