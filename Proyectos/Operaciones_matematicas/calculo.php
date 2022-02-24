<?php

$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$operacion = $_REQUEST["operacion"];
$total_operacion = 0;

switch ($operacion) {
    case 'suma':
        $total_operacion = $numero1 + $numero2;
        //echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'resta':
        $total_operacion = $numero1 - $numero2;
        //echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'multiplicacion':
        $total_operacion = $numero1 * $numero2;
        //echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'division':
        $total_operacion = $numero1 / $numero2;
        //echo "El total de la $operacion es ". $total_operacion;
        break;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matematicas</title>
</head>
<body>
    <h3>Operaciones Matemáticas</h3>
    <form action="calculo.php" method="post">
        <h4>Numero 1: </h4>
        <input type="text" name="numero1" value="<?php echo $numero1; ?>">
        <select name="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">*</option>
            <option value="division">/</option>
        </select>
        <h4>Numero 2:</h4>
        <input type="text" name="numero2" value="<?php echo $numero2; ?>"> 
        <button type="submit">Calcular</button>
        <label>Total</label>
        <input type="number" value="<?php echo $total_operacion; ?>">
    </form>
</body>
</html>