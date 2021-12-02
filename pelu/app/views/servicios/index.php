<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Servicios</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <div>
        <!-- Tengo que crear la vista para ver todos los servicios -->
        <h1>Lista de Servicios</h1>
        <a href="<?= "/servicios/create" ?>" class="btn btn-primary">Nuevo</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Precio</th>
                <th>Tiempo</th>
            </tr>
            <?php foreach ($services as $id => $service) { ?>
                <tr>
                    <td><?php echo $service->name ?></td>
                    <td><?php echo $service->gender ?></td>
                    <td><?php echo $service->price ?></td>
                    <td><?php echo $service->time ?></td>
                    <td><a href="<?= "/servicios/show/" . $service->id ?>" class="btn btn-primary">Ver</a></td>
                    <td><a href="<?= "/servicios/edit/" . $service->id ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?= "/servicios/delete/" . $service->id ?>" class="btn btn-primary">Borrar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>