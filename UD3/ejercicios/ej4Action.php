<?php
if (isset($_POST['nr1']) && !empty($_POST['nr1']) && isset($_POST['nr2']) && !empty($_POST['nr2'])) {
    switch ($operacion) {
        case 'sumar':
            $resultado = $_POST['nr1'] + $_POST['nr2'];
            echo "Resultado " . $_POST['nr1'] . "+" . $_POST['nr2'] . "=" . $resultado . "<br";
            break;
        case 'restar':
            $resultado = $_POST['nr1'] - $_POST['nr2'];
            echo "Resultado " . $_POST['nr1'] . "-" . $_POST['nr2'] . "=" . $resultado . "<br";
            break;
        case 'multiplicar':
            $resultado = $_POST['nr1'] * $_POST['nr2'];
            echo "Resultado " . $_POST['nr1'] . "*" . $_POST['nr2'] . "=" . $resultado . "<br";
            break;
        case 'dividir':
            $resultado = $_POST['nr1'] / $_POST['nr2'];
            echo "Resultado " . $_POST['nr1'] . "/" . $_POST['nr2'] . "=" . $resultado . "<br";
            break;
    
        default:
            echo "nada wey";
            break;
    }
} else {
    echo "No hemos recibido nada WEY!";
}
