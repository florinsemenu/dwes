<?php
if (isset($_POST) && !empty($_POST)) {
  $nombreCompleto = $_POST['nombreCompleto'];
  $nombresAlmacenados = ["Javier", "Arturo", "Adrian", "Juan"];
  if (in_array($nombreCompleto, $nombresAlmacenados, false)) echo "Saludos, $nombreCompleto.";
  else {
    include('index.php');
    echo "<br>No se ha encontado el nombre en la array 'nombresAlmacenados'.";
  }
}
