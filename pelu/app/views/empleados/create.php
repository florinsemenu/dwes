<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Empleados</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
<?php require "app/views/parts/header.php" ?>
    <main>
        <div>
            <h1>Alta Empleados</h1>
            <form action="<?= "/empleados/store" ?>" method="post">
                <div>
                    <label>Nombre</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Apellido</label>
                    <input type="text" name="surname">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>Detalles</label>
                    <input type="text" name="details">
                </div>
                <div>
                    <label>Fecha nacimiento</label>
                    <input type="text" name="birthdate">
                </div>
                <div>
                    <label>Contraseña</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label>Activo</label>
                    <input type="checkbox" name="active">
                </div>
                <div>
                    <label>Administrador</label>
                    <input type="checkbox" name="admin">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>