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
    <form action="" method="post" id="formulario">
        <input type="text" id="nombre" class="formul" placeholder="NOMBRE" />
        <input type="text" id="apellido" class="formul" placeholder="APELLIDO" />
        <input type="text" id="telefono" class="formul" placeholder="TELÉFONO" />
        <input type="text" id="email" class="formul" placeholder="EMAIL" />

        <p><input type="submit" class="formul" value="ALTA EMPLEADO"></p>
    </form>
</body>

</html>