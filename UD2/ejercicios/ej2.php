<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nombre = "Florin";
$direccion = "Mi Casa";
$mail = "florinsemenu@gmail.com";
?>
    <table border="1">
        <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Mail</th>
        </tr>
        <tr>
            <td><?= $nombre ?></td>
            <td><?= $direccion ?></td>
            <td><?= $mail ?></td>
        </tr>
    </table>
</body>
</html>


