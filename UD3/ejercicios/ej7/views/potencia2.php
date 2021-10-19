<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias de 2</title>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php'); ?>
    <h1>Potencias de 2 elevado de 2 al 24</h1>
    <?php foreach ($this->numeros as $numero) {
        echo "<pre> $numero";
    } ?>
</body>

</html>