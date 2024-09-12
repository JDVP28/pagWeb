<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">
    <title>seso</title>
</head>
<body>
    <div>
        
        <?php
        require_once 'controllers/EjercicioController.php';

        $controller = new EjercicioController();

        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            case 'crear':
                $controller->crear();
                include 'views/crear_ejercicio.php';
                break;
            case 'listar':
                include 'views/listar_ejercicios.php';
                break;
            default:
                include 'views/crear_ejercicio.php';
                break;
        }
        ?>
    </div>
    
</body>
</html>

