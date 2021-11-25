<?php

use App\Models\Servicio;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de empleado</title>
</head>

<body>
<?php require "app/views/header.php" ?>
    <div>
        <h1>Edicion de empleado</h1>
        <form method="post" action="<?= "/empleados/update" ?>">
        <input type="hidden" name="id" value="<?php echo $user->id ?>">
        <div>
            <label>Nombre</label>
            <input type="text" name="name" value="<?php echo $service->name ?>">
        </div>
        <div>
            <label>Apellido</label>
            <input type="text" name="surname" value="<?php echo $service->surname ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $service->email ?>">
        </div>
        <div>
            <label>Detalles</label>
            <input type="text" name="details" value="<?php echo $service->details ?>">
        </div>
        <div>
            <label>Fecha nacimiento</label>
            <input type="text" name="birthdate" value="<?php echo $service->birthdate ?>">
        </div>
        <div>
            <label>Contraseña</label>
            <input type="password" name="password" value="<?php echo $service->password ?>">
        </div>
        <div>
            <label>Tiempo</label>
            <input type="checkbox" name="active" value="<?php echo $service->active ?>">
        </div>
        <div>
            <label>Tiempo</label>
            <input type="checkbox" name="admin" value="<?php echo $service->admin ?>">
        </div>
        <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>