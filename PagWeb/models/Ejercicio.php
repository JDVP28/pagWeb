<?php
class Ejercicio {
    private $conn;
    public $table_name = "ejercicios"; // Asegúrate de que esta propiedad esté definida

    public $id;
    public $fecha;
    public $dia_semana;
    public $ejercicio1;
    public $ejercicio2;
    public $ejercicio3;
    public $ejercicio4;
    public $series1;
    public $series2;
    public $series3;
    public $series4;
    public $repeticiones1;
    public $repeticiones2;
    public $repeticiones3;
    public $repeticiones4;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET fecha=:fecha, dia_semana=:dia_semana, ejercicio1=:ejercicio1, ejercicio2=:ejercicio2, ejercicio3=:ejercicio3, ejercicio4=:ejercicio4, series1=:series1, series2=:series2, series3=:series3, series4=:series4, repeticiones1=:repeticiones1, repeticiones2=:repeticiones2, repeticiones3=:repeticiones3, repeticiones4=:repeticiones4";

        $stmt = $this->conn->prepare($query);

        $this->fecha = htmlspecialchars(strip_tags($this->fecha));
        $this->dia_semana = htmlspecialchars(strip_tags($this->dia_semana));
        $this->ejercicio1 = htmlspecialchars(strip_tags($this->ejercicio1));
        $this->ejercicio2 = htmlspecialchars(strip_tags($this->ejercicio2));
        $this->ejercicio3 = htmlspecialchars(strip_tags($this->ejercicio3));
        $this->ejercicio4 = htmlspecialchars(strip_tags($this->ejercicio4));
        $this->series1 = htmlspecialchars(strip_tags($this->series1));
        $this->series2 = htmlspecialchars(strip_tags($this->series2));
        $this->series3 = htmlspecialchars(strip_tags($this->series3));
        $this->series4 = htmlspecialchars(strip_tags($this->series4));
        $this->repeticiones1 = htmlspecialchars(strip_tags($this->repeticiones1));
        $this->repeticiones2 = htmlspecialchars(strip_tags($this->repeticiones2));
        $this->repeticiones3 = htmlspecialchars(strip_tags($this->repeticiones3));
        $this->repeticiones4 = htmlspecialchars(strip_tags($this->repeticiones4));

        $stmt->bindParam(":fecha", $this->fecha);
        $stmt->bindParam(":dia_semana", $this->dia_semana);
        $stmt->bindParam(":ejercicio1", $this->ejercicio1);
        $stmt->bindParam(":ejercicio2", $this->ejercicio2);
        $stmt->bindParam(":ejercicio3", $this->ejercicio3);
        $stmt->bindParam(":ejercicio4", $this->ejercicio4);
        $stmt->bindParam(":series1", $this->series1);
        $stmt->bindParam(":series2", $this->series2);
        $stmt->bindParam(":series3", $this->series3);
        $stmt->bindParam(":series4", $this->series4);
        $stmt->bindParam(":repeticiones1", $this->repeticiones1);
        $stmt->bindParam(":repeticiones2", $this->repeticiones2);
        $stmt->bindParam(":repeticiones3", $this->repeticiones3);
        $stmt->bindParam(":repeticiones4", $this->repeticiones4);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>