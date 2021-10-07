<?php

// $_FILES contiene información sobre el fichero que se está subiendo
// Es un array bidimensional :
//     primer índice: identifica el fichero según el atributo name en el formulario  
//     claves para el segundo índice: 
//          name: nombre del fichero en el cliente
//          size: tamaño en bytes
//          type: tipo MIME del fichero
//          tmp_name: nombre temporal con el que se ha subido al servidor
//          error: código de error asociado a la subida
// El fichero se almacena en el directorio temporal del servidor
//  -> para moverlo a otro directorio: bool move_uploaded_file ($fichero, $destino)

// $tamanyo = $_FILES["fichero"]["size"];
// if ($tamanyo > 256 * 1024) {
//     echo "<br>Demasiado grande";
//     return;
// }

$nr_F = count($_FILES["fichero"]["name"]);
echo "<pre>";
var_dump($_FILES["fichero"]);
for ($i = 0; $i < $nr_F; $i++) {


    echo "Nombre del fichero" . $_FILES["fichero"]["name"][$i];
    echo "<br>Nombre temporal del fichero en el servidor" . $_FILES["fichero"]["tmp_name"][$i];

    // hay que crear el directorio
    $res = move_uploaded_file(
        $_FILES["fichero"]["tmp_name"][$i],
        "subidos/" . $_FILES["fichero"]["name"][$i]
    );

    if ($res) {
        echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }
}
