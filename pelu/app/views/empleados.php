<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Empleados</title>
</head>
<body>
<?php require "app/views/header.php" ?>
<h1>Lista de empleados</h1>
<?php
    if (isset($_SESSION['empleados'])) {
        echo "<h3>Tus empleados son:</h3> <br>";
        $deseos = $_SESSION['empleados'];
        foreach ($empleados as $nr => $empleado) {
            echo "<li> Empleado nº $nr: " . $empleado . ' <a href="?method=delete&nr=' . $nr . '"> borrar</a> </li>';
        }
    } else {
        echo "no hay Empleados";
    }
    ?>
</body>
</html>