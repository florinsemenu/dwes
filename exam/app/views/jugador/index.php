<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de jugadores (no me da tiempo a hacer el titular :(  )</h1>
      <p>
        <a href="<?= "/jugador/create" ?>" class="btn btn-primary">Nuevo</a>
        <a href="" class="btn btn-primary">titulares</a>
      </p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>

        <?php foreach ($jugadores as $id => $jugador) { ?>
          <tr>
            <td><?php echo $jugador->nombre ?></td>
            <td><?php echo $jugador->puesto ?></td>
            <td><?php echo $jugador->nacimiento ? $jugador->nacimiento->format('d-m-Y') : 'nonato' ?></td>
            <td>
              <a href="<?= "/jugador/edit/" . $jugador->id ?>">Editar</a>
              <a href="<?= "/jugador/titular" . $jugador->id ?>">Titular</a>
            </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>