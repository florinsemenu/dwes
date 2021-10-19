<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
    <style>
        ul {
            column-count: 10;
        }
    </style>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <h1>Primos hasta 10000</h1>
    <?php
    echo "<ul>";
    foreach ($this->numeros as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>" ?>
</body>

</html>