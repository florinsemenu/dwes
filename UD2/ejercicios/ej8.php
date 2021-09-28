<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Equipo Baloncesoto</h1>
<?php
$equipo = ['Daniel Capo', 'Esteban Dido', 'Rosa Melano', 'Elena Morena', 'Ivan Fiestorrez'];
echo "<h2>Sólo nombres</h2>";

foreach ($equipo as $jugador){
    echo "<li> $jugador </li>";
};

echo "<h2>Posición y nombres</h2>";
foreach ($equipo as $posicion => $jugador) {
    echo "<li>$posicion: $jugador</li>";
}
?>
</body>
</html>