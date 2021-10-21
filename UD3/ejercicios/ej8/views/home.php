<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_COOKIE['user']?></h1>
    <form action="?method=logout" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>