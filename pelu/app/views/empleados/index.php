<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <div>
        <!-- Tengo que crear la vista para ver todos los empleados -->
        <h1>Lista de Empleados</h1>
        <a href="<?= "/empleados/create" ?>" class="btn btn-primary">Nuevo</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Activo</th>
            </tr>
            <?php foreach ($employees as $id => $employe) { ?>
                <tr>
                    <td><?php echo $employe->name ?></td>
                    <td><?php echo $employe->surname ?></td>
                    <td><?php echo $employe->email ?></td>
                    <td><?php echo $employe->active ?></td>
                    <td><a href="<?= "/empleados/show/" . $employe->id ?>" class="btn btn-primary">Ver</a></td>
                    <td><a href="<?= "/empleados/edit/" . $employe->id ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?= "/empleados/delete/" . $employe->id ?>" class="btn btn-primary">Borrar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php require "app/views/parts/footer.php" ?>
</body>
<?php require "app/views/parts/scripts.php" ?>

</html>