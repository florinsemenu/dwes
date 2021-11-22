<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Servicios</title>
</head>

<body>
    <?php require "app/views/header.php" ?>
    <div>
        <!-- Tengo que crear la vista para ver todos los servicios -->
        <h1>Lista de Servicios</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Detalles</th>
                <th>Precio</th>
            </tr>
            <?php foreach ($services as $id => $service) { ?>
                <tr>
                    <td><?php echo $service->id ?></td>
                    <td><?php echo $service->name ?></td>
                    <td><?php echo $service->detail ?></td>
                    <td><?php echo $service->price ?></td>
                    <td><a href="<?= "/servicios/show/" . $service->id ?>">Ver</a></td>
                    <td><a href="<?= "/servicios/edit/" . $service->id ?>">Editar</a></td>
                    <td><a href="<?= "/servicios/delete/" . $service->id ?>">Borrar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>