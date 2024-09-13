<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrat los datos</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Datos de conexión
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ejercicios";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // SQL para borrar todos los datos de la tabla
            $sql = "DELETE FROM ejercicios";

            if ($conn->query($sql) === TRUE) {
                echo "Todos los datos han sido borrados exitosamente.";
            } else {
                echo "Error al borrar datos: " . $conn->error;
            }

            $conn->close();
        } else {
            echo "Método no permitido.";
        }
    ?>
    <a href="../index.php" class="btn">Continuar</a>
    </div>
</body>
</html>