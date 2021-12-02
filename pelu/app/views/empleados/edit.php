<?php

use App\Models\Servicio;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de empleado</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
<?php require "app/views/parts/header.php" ?>
    <div>
        <h1>Edicion de empleado</h1>
        <form method="post" action="<?= "/empleados/update" ?>">
            <input type="hidden" name="id" value="<?php echo $employee->id ?>">
            <div>
                <label>Nombre</label>
                <input type="text" name="name" value="<?php echo $employee->name ?>">
            </div>
            <div>
                <label>Apellido</label>
                <input type="text" name="surname" value="<?php echo $employee->surname ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $employee->email ?>">
            </div>
            <div>
                <label>Detalles</label>
                <input type="text" name="details" value="<?php echo $employee->details ?>">
            </div>
            <div>
                <label>Fecha nacimiento</label>
                <input type="text" name="birthdate" value="<?php echo $employee->birthdate->format('Y-m-d') ?>">
            </div>
            <div>
                <label>Contraseña</label>
                <input type="password" name="password" value="<?php echo $employee->password ?>">
            </div>
            <div>
                <label>Activo</label>
                <input type="checkbox" name="active" value="<?php echo $employee->active ?>">
            </div>
            <div>
                <label>Administrador</label>
                <input type="checkbox" name="admin" value="<?php echo $employee->admin ?>">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>