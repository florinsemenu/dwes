<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del servicio</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <div>
        <h1>Detalles del servicio <?php echo $service->name ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $service->name ?></li>
            <li><strong>Genero: </strong><?php echo $service->gender ?></li>
            <li><strong>Detalles: </strong><?php echo $service->detail ?></li>
            <li><strong>Precio: </strong><?php echo $service->price ?></li>
            <li><strong>Tiempo: </strong><?php echo $service->time ?></li>
        </ul>
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>