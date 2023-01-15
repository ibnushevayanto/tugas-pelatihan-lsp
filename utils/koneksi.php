<?php

class Koneksi
{
    protected $server;
    protected $username;
    protected $password;
    protected $database;

    function __construct($server, $username, $password, $database)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        $mysqli = new mysqli($this->server, $this->username, $this->password, $this->database);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            return false;
        }

        return $mysqli;
    }
}
