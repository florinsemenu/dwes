<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <h1>Fibonacci numeros menores a 1000000</h1>
    <?php
    //aquí quiero ver el array numeros que contiene los números de fibonachi
    foreach ($this->numeros as $numero) {
        echo "<pre>$numero";
    }
    ?>

</body>

</html>