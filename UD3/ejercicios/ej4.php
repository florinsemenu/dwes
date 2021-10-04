<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="ej4Action.php" method="post">
        <input type="text" name="nr1" id="nr1" value="">
        <input type="text" name="nr2" id="nr2" value="">
        <select name="operacion[]" id="operacion" multiple>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="submit" value="Calculalo wey">
    </form>
</body>
</html>