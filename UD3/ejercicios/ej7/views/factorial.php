<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <h1>Factorial hasta 1000000</h1>
    <?php foreach ($this->numeros as $numero) {
        echo "<pre>$numero";
    } ?>

</body>

</html>