
<?php

class Database extends mysqli {
    private $connection;

    public function __construct() {
        // $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        parent::connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($this->connect_error) die('...DATABASE CONNECTETION FAILED...');

        // if ($this->connection->connect_error) {
        //     die("Connection failed: " . $this->connection->connect_error);
        // }
    }

    public function validateInput($input){
        $text = trim($input);
        $text = htmlspecialchars($text);
        $text = stripcslashes($text);
        $text = $this->real_escape_string($text);
        return $text;
    }

    // public function query($sql) {
    //     $result = $this->connection->query($sql);
    //     if (!$result) {
    //         die("Query failed: " . $this->connection->error);
    //     }
    //     return $result;
    // }

    // public function close() {
    //     $this->connection->close();
    // }
    // public function escapeString($string) {
    //     return $this->connection->real_escape_string($string);
    // }
    // public function getConnection() {
    //     return $this->connection;
    // }
    // public function __destruct() {
    //     $this->close();
    // }
    // public function getLastInsertId() {
    //     return $this->connection->insert_id;
    // }

}


