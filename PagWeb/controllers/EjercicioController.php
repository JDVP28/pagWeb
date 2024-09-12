<?php
require_once 'models/Database.php';
require_once 'models/Ejercicio.php';

class EjercicioController {
    private $db;
    private $ejercicio;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->ejercicio = new Ejercicio($this->db);
    }

    public function crear() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->ejercicio->fecha = $_POST['fecha'];
            $this->ejercicio->dia_semana = date('l', strtotime($_POST['fecha']));
            $this->ejercicio->ejercicio1 = $_POST['ejercicio1'];
            $this->ejercicio->ejercicio2 = $_POST['ejercicio2'];
            $this->ejercicio->ejercicio3 = $_POST['ejercicio3'];
            $this->ejercicio->ejercicio4 = $_POST['ejercicio4'];
            $this->ejercicio->series1 = $_POST['series1'];
            $this->ejercicio->series2 = $_POST['series2'];
            $this->ejercicio->series3 = $_POST['series3'];
            $this->ejercicio->series4 = $_POST['series4'];
            $this->ejercicio->repeticiones1 = $_POST['repeticiones1'];
            $this->ejercicio->repeticiones2 = $_POST['repeticiones2'];
            $this->ejercicio->repeticiones3 = $_POST['repeticiones3'];
            $this->ejercicio->repeticiones4 = $_POST['repeticiones4'];

            if ($this->ejercicio->create()) {
                echo "Registro creado exitosamente.";
            } else {
                echo "Error al crear el registro.";
            }
        }
    }

    public function listar() {
        $query = "SELECT * FROM " . $this->ejercicio->table_name;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
