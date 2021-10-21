<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2</title>
</head>

<body>
    <h2>Saludos a...</h2>
    <form action="" method="post">
        <label>Nombre</label><input type="text" value="" name="nombre"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        echo "<hr><pre>";
        echo "Bienvendo " . $_POST['nombre'];
    } else {
        echo "El nombre es obligatorio";
    };
    ?>
</body>

</html>