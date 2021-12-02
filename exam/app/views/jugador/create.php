<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

      <h1>Título</h1>

      <form method="post" action="<?= "/jugador/store" ?>" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label>Puesto</label>
          <select class="custom-select"  name="puesto">
          <option>Portero</option>
          <option>Defensa</option>
          <option>Centrocampista</option>
          <option>Delantero</option>
        </select>
        </div>
        <div class="form-group">
          <label>Nacimiento</label>
          <input type="text" name="nacimiento" class="form-control"></div>
        <div class="form-group">
          <p>Sube una foto</p>
          <input type="file" name="fichero[]" multiple>
          <br>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>

</body>
<?php require "app/views/parts/scripts.php" ?>

</html>