<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Función 4</title> 
</head> 
<body>

<form method="post">

<div>
<label for="numero_de_elementos">Número de elementos:</label>
    <select name="numero_de_elementos">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10" selected>10</option>
    </select>
</div>

<div>
    <label for="min">Valor mínimo:</label>
    <input type="int" name="min">
</div>

<div>
    <label for="max">Valor máximo:</label>
    <input type="int" name="max">
</div>

<button type="submit">Enviar</button>

</form>

<?php

$num_elem = $_POST["numero_de_elementos"];
$minimo = $_POST["min"];
$maximo = $_POST["max"];

function inicializar_array($num_elem, $minimo, $maximo){
    $numeros = array();
    for($i = 0; $i < $num_elem; $i++) {
        $numeros[$i] = rand ($minimo, $maximo);
    }
    return $numeros;
}


function calcular_minimo($numeros) {
    $min = $numeros[0];
    $numero_elementos = count($numeros);
    for ($i = 1; $i < $numero_elementos; $i++) {
        if ($min > $numeros[$i]) {
            $min = $numeros[$i];
        }
    }
    return $min;
}

$numeros = inicializar_array($num_elem, $minimo, $maximo);
$valor_min = calcular_minimo($numeros);
print_r($numeros);
print_r($valor_min);


?>

</body> 
</html>