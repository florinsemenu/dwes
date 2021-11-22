<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del servicio</title>
</head>

<body>
    <?php require "app/views/header.php" ?>
    <div>
        <h1>Detalles del servicio <?php echo $service->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $service->name ?></li>
            <li><strong>Detalles: </strong><?php echo $service->detail ?></li>
            <li><strong>Precio: </strong><?php echo $service->price ?></li>
        </ul>
    </div>
</body>

</html>