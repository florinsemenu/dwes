<?php

use App\Models\Servicio;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición</title>
</head>

<body>
<?php require "app/views/header.php" ?>
    <div>
        <h1>Edicion de usuario</h1>
        <form method="post" action="<?= "/servicios/update" ?>">
        <input type="hidden" name="id" value="<?php echo $user->id ?>">
        <div>
            <label>ID</label>
            <input type="text" name="id" value="<?php echo $service->id ?>">
        </div>
        <div>
            <label>Nombre</label>
            <input type="text" name="name" value="<?php echo $service->name ?>">
        </div>
        <div>
            <label>Detalles</label>
            <input type="text" name="detail" value="<?php echo $service->detail ?>">
        </div>
        <div>
            <label>Precio</label>
            <input type="text" name="price" value="<?php echo $service->price ?>">
        </div>
        <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>