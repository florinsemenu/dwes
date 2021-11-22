<?php

use App\Models\Servicio;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición</title>
</head>
<body>
    <div>
        <h1>Edicion de usuario</h1>
        <form method="post" action="<?= "servicios/update" ?>"></form>
        <input type="hidden" name="id" value="<?php echo $user->id ?>">
    </div>
</body>
</html>