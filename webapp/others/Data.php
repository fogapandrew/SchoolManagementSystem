<?php
// This class establishes a connection to the database and can be called anytime to query data to/from the tables
class Data {
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct($config) {
        $this->servername = $config['database']['host'];
        $this->username = $config['database']['username'];
        $this->password = $config['database']['password'];
        $this->database = $config['database']['dbName'];
        //$this->database = $databaseName;
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        else{
            echo("Connection successful");
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>