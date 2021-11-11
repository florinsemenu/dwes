<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>

<body>
    <?php require "app/views/header.php" ?>
    <header class="header">

    </header>
    <h2 class="titulo">CONTACTO</h2>
    <form action="?method=newEmpleado" method="post">
        <input type="text" value="" name="nombre">
        <input type="text" value="" name="apellido">
        <input type="text" value="" name="telefono">
        <input type="text" value="" name="email">
        <input type="submit" value="Añadir">
    </form>

</body>

</html>