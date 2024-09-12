<?php
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function __construct() {
        $config = include('config/config.php');
        
        if (isset($config['db'])) {
            $this->host = $config['db']['host'] ?? 'localhost';
            $this->db_name = $config['db']['name'] ?? '';
            $this->username = $config['db']['user'] ?? '';
            $this->password = $config['db']['pass'] ?? '';
        } else {
            die("Error: Configuración de la base de datos no encontrada.");
        }
    }

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
