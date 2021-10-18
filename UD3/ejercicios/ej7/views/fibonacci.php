<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar</title>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <h1>Fibonacci</h1>
    <?php
    //aquí quiero ver el array numeros que contiene los números de fibonachi
foreach ($this->numeros as $numeroF) {
    echo $numeroF;
} 
    ?>
    
</body>

</html>