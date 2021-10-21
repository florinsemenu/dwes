<?php
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    echo "<hr><pre>";
    echo "Bienvendo ".$_POST['nombre'];
} else {
    header("Location:ej2.php");
    echo "El nombre es obligatorio";
};
