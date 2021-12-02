<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <main role="main" class="container">
        <div class="starter-template">

            <h1>Edicion de jugador</h1>

            <form method="post" action="<?= "/jugador/update" ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $jugador->id ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $jugador->nombre ?>">
                </div>
                <div class="form-group">
                    <label>Puesto</label>
                    <select class="custom-select" name="puesto">
                        <!-- <?php foreach ($jugadores as $key => $jugador) {
                                    $selected = $jugador->puesto == $jugador->id ? 'selected' : ''; ?>
                            <option value="<? echo $jugador->puesto?>" <?= $selected ?>> <?php echo $jugador->puesto ?></option>
                        <?php } ?> -->
                        <option selected> <?php echo $jugador->puesto ?></option>
                        <option>Portero</option>
                        <option>Defensa</option>
                        <option>Centrocampista</option>
                        <option>Delantero</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nacimiento</label>
                    <input type="text" name="nacimiento" class="form-control" value="<?php echo $jugador->nacimiento->format('Y-m-d') ?>">
                </div>
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