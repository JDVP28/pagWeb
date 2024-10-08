<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Ejercicio</title>
</head>
<body>
    <h1>Crear Ejercicio</h1>
    <form action="index.php?action=crear" method="POST">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="ejercicio1">Ejercicio 1:</label>
        <input type="text" id="ejercicio1" name="ejercicio1" required><br><br>
        
        <label for="series1">Series:</label>
        <input type="number" id="series1" name="series1" required><br><br>
        
        <label for="repeticiones1">Repeticiones:</label>
        <input type="number" id="repeticiones1" name="repeticiones1" required><br><br>

        <label for="ejercicio2">Ejercicio 2:</label>
        <input type="text" id="ejercicio2" name="ejercicio2" required><br><br>
        
        <label for="series2">Series:</label>
        <input type="number" id="series2" name="series2" required><br><br>
        
        <label for="repeticiones2">Repeticiones:</label>
        <input type="number" id="repeticiones2" name="repeticiones2" required><br><br>

        <label for="ejercicio3">Ejercicio 3:</label>
        <input type="text" id="ejercicio3" name="ejercicio3" required><br><br>
        
        <label for="series3">Series:</label>
        <input type="number" id="series3" name="series3" required><br><br>

        <label for="repeticiones3">Repeticiones:</label>
        <input type="number" id="repeticiones3" name="repeticiones3" required><br><br>

        <label for="ejercicio4">Ejercicio 4:</label>
        <input type="text" id="ejercicio4" name="ejercicio4" required><br><br>
        
        <label for="series4">Series:</label>
        <input type="number" id="series4" name="series4" required><br><br>

        <label for="repeticiones4">Repeticiones:</label>
        <input type="number" id="repeticiones4" name="repeticiones4" required><br><br>

        <input type="submit" value="Crear Ejercicio "  class="btn">
    </form>

    <h2>Lista de Ejercicios</h2>
    <table border="1">
        <tr>
            <th>Día de la Semana</th>
            <th>Ejercicio 1</th>
            <th>Series </th>
            <th>Repeticiones </th>
            <th>Ejercicio 2</th>
            <th>Series </th>
            <th>Repeticiones </th>
            <th>Ejercicio 3</th>
            <th>Series </th>
            <th>Repeticiones </th>
            <th>Ejercicio 4</th>
            <th>Series </th>
            <th>Repeticiones </th>
        </tr>
        <?php
        $stmt = $controller->listar();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            echo "<tr>";
            echo "<td>{$dia_semana}</td>";
            echo "<td>{$ejercicio1}</td>";
            echo "<td>{$series1}</td>";
            echo "<td>{$repeticiones1}</td>";
            echo "<td>{$ejercicio2}</td>";
            echo "<td>{$series2}</td>";
            echo "<td>{$repeticiones2}</td>";
            echo "<td>{$ejercicio3}</td>";
            echo "<td>{$series3}</td>";
            echo "<td>{$repeticiones3}</td>";
            echo "<td>{$ejercicio4}</td>";
            echo "<td>{$series4}</td>";
            echo "<td>{$repeticiones4}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>









