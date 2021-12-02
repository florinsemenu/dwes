<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del empleado</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
<?php require "app/views/parts/header.php" ?>
    <div>
        <h1>Detalles del empleado <?php echo $employee->name ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $employee->name ?></li>
            <li><strong>Apellido: </strong><?php echo $employee->surname ?></li>
            <li><strong>Email: </strong><?php echo $employee->email ?></li>
            <li><strong>Detalles: </strong><?php echo $employee->details ?></li>
            <li>Fecha nacimiento<strong>: </strong><?php echo $employee->birthdate->format('d-m-Y') ?></li>
            <li><strong>Activo: </strong><?php echo $employee->active ?></li>
            <li><strong>Administrador: </strong><?php echo $employee->admin ?></li>
        </ul>
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>