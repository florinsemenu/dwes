<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
</head>

<body>
    <?php require "app/views/header.php" ?>
    <div>
        <!-- Tengo que crear la vista para ver todos los empleados -->
        <h1>Lista de Empleados</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Activo</th>
                <th>Admin</th>
            </tr>
            <?php foreach ($employees as $id => $employe) { ?>
                <tr>
                    <td><?php echo $employe->name ?></td>
                    <td><?php echo $employe->surname ?></td>
                    <td><?php echo $employe->email ?></td>                    
                    <td><?php echo $employe->active ?></td>
                    <td><?php echo $employe->admin ?></td>
                    <td><a href="<?= "/empleados/show/" . $employe->id ?>">Ver</a></td>
                    <td><a href="<?= "/empleados/edit/" . $employe->id ?>">Editar</a></td>
                    <td><a href="<?= "/empleados/delete/" . $employe->id ?>">Borrar</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>