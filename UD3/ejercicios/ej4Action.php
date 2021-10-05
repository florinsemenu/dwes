<?php
if (isset($_POST['nr1']) && is_numeric($_POST['nr1']) && isset($_POST['nr2']) && is_numeric($_POST['nr2'])) {
    //Como el select se llama operación, le paso por post el nombre al switch y según el value
    switch ($_POST['operacion']) {
        case 'sumar':
            $resultado = $_POST['nr1'] + $_POST['nr2'];
            echo "Resultado de la suma " . $_POST['nr1'] . "+" . $_POST['nr2'] . "=" . $resultado . "<br";
            include ('ej4.php');
            break;
        case 'restar':
            $resultado = $_POST['nr1'] - $_POST['nr2'];
            echo "Resultado de la resta " . $_POST['nr1'] . "-" . $_POST['nr2'] . "=" . $resultado . "<br";
            include ('ej4.php');
            break;
        case 'multiplicar':
            $resultado = $_POST['nr1'] * $_POST['nr2'];
            echo "Resultado de la multiplicación " . $_POST['nr1'] . "*" . $_POST['nr2'] . "=" . $resultado . "<br";
            include ('ej4.php');
            break;
        case 'dividir':
            if ($_POST['nr2'] == 0) {
                echo "¿Qué haces? No puedes dividir entre 0";
                include ('ej4.php');
            } else {
                $resultado = $_POST['nr1'] / $_POST['nr2'];
                echo "Resultado de la división " . $_POST['nr1'] . "/" . $_POST['nr2'] . "=" . $resultado . "<br";
                include ('ej4.php');
            }
            break;
        default:
            echo "Nada wey, has salido del switch";
            include ('ej4.php');
            break;
    }
} else {
    echo "<h1> Datos no válidos. Sólo se admiten cifras.</h2>";
    include ('ej4.php');
}