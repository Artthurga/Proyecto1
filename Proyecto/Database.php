<?php
class Database {
    private $host = "localhost";
    private $username = "xxxx";
    private $password = "xxxx";
    private $database = "db_vision";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
