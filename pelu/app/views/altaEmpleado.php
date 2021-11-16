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
    <form action="?method=new" method="post">
        <ul>
            <li>Nombre: <input type="text" value="" name="nombre"></li>
            <li>Apellido: <input type="text" value="" name="apellido"></li>
            <li>Teléfono: <input type="text" value="" name="telefono"></li>
            <li>Email: <input type="text" value="" name="email"></li>
        </ul>
        <input type="submit" value="Añadir">
    </form>
    

</body>

</html>