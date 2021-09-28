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

    /*
//Array sin clave
$paises['España'] = array ("Euro","100.000.000");
$paises['Rumanía'] = array ("Leu","90.000.000");
$paises['Japón'] = array ("Yen","105.000.000");
$paises['Estados Unidos'] = array ("Dolar","120.000.000");

//mostrar array sin clave
echo "<h2>Array sin clave</h2>";
foreach ($paises as $clave => $nombre) {
    echo "<li>".$clave."</li>";
    echo "<li>$nombre[0]</li>";
    echo "<li>$nombre[1]</li><br>";
};
*/

    //Array con claves
    $paises['España'] = array('moneda' => "Euro", 'habitantes' => "100.000.000");
    $paises['Rumanía'] = array('moneda' => "Leu", 'habitantes' => "90.000.000");
    $paises['Japón'] = array('moneda' => "Yen", 'habitantes' => "105.000.000");
    $paises['Estados Unidos'] = array('moneda' => "Dolar", 'habitantes' => "120.000.000");

    //mostrar array con claves
    echo "<h2>Array con clave</h2>";
    foreach ($paises as $clave => $nombre) {
        echo "<li>" . $clave . "</li>";
        echo "<li>$nombre[moneda]</li>";
        echo "<li>$nombre[habitantes]</li><br>";
    };

    /*
//Hacer el array de una sola vez
$paises = array (
    'España' => array(
        'moneda' => 'Euro',
        'habitantes' => '100.000.000',
    ), 
    'Rumanía' => array(
        'moneda' => 'Leu',
        'habitantes' => '90.000.000'
    ),
    'Japón' => array(
        'moneda' => 'Yen',
        'habitantes' => '105.000.000',
    ), 
    'Estados Unidos' => array(
        'moneda' => 'Dolar',
        'habitantes' => '120.000.000',
    )
);
*/


    echo "<h2>Array v1</h2>";
    //para ver el nombre del país, necesito tener una variable para la clave
    foreach ($paises as $clave => $nombre) {
        echo "<li>País-> " . $clave . "</li>";
        echo "<li>Moneda-> " . $nombre['moneda'] . "</li>";
        echo "<li>Habitantes-> " . $nombre['habitantes'] . "</li><br>";
    };


    echo "<h2>Array v2</h2><pre>";
    print_r($paises);
    echo "</pre>";
    ?>
</body>

</html>