<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores</title>
</head>

<body style="background-color: <?php echo $_COOKIE['colores']?>">
    <h2>Bienvenido, elige tu color</h2>
   <?php include('color.php') ?>
    
</body>

</html>