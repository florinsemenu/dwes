<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>
    <h1>Bienvenido <?php echo $_COOKIE['user'] ?></h1>
    <!-- mostrar deseos añadidos -->
    <?php
    if (isset($_COOKIE['deseos'])) {
        echo "<h3>Tus deseos son:</h3> <br>";
        $deseos = unserialize($_COOKIE['deseos']);
        foreach ($deseos as $nr => $deseo) {
            echo "<li> Deseo nº $nr: " . $deseo . ' <a href="?method=delete&nr=' . $nr . '"> borrar</a> </li>';
        }
    } else {
        echo "no hay deseos";
    }
    ?>

    <h4>Aquí administras tus deseos</h4>

    <!--formulario añadir deseo-->
    <form action="?method=new" method="post">
        <input type="text" value="" name="wish">
        <input type="submit" value="Añadir">
    </form>
    <!-- Boton cerrar sesión -->
    <form action="?method=logout" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
    <!-- Botón vaciar lista deseos -->
    <form action="?method=empty" method="post">
        <input type="submit" value="Vaciar lista">
    </form>

</body>

</html>