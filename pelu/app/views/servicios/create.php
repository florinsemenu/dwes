<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta servicio</title>
</head>

<body>
    <?php require "app/views/header.php" ?>
    <main>
        <div>
            <h1>Alta Servicios</h1>
            <form action="<?= "/servicios/create" ?>" method="post">
                <div>
                    <label>Nombre</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Genero</label>
                    <input type="text" name="gender">
                </div>
                <div>
                    <label>Detalles</label>
                    <input type="text" name="detail">
                </div>
                <div>
                    <label>Precio</label>
                    <input type="text" name="price">
                </div>
                <div>
                    <label>Tiempo</label>
                    <input type="text" name="time">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>

</html>