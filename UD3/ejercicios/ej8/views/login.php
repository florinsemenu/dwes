<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio Sesión</title>
</head>
<body>
<?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <form action="?method=auth" method="post">
        <label>Usuario</label>
        <input type="text" value="" name="user"><br>
        <label>Contraseña</label>
        <input type="password" value="" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>