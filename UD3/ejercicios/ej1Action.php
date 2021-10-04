<?php
if (isset($_POST) && !empty($_POST)) {
    echo "<hr><pre>";
    var_dump($_POST);
} else {
    echo "No hemos recibido nada!";
};
