<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Monedas</title> 
</head> 
<body>

<form method="post">
<div>
<label for="num_tmp">Número de temperaturass:</label>
    <select name="num_tmp">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4" selected>4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>

    <button type="submit">Enviar</button>

</div> 


<?php

$numero_tmp = $_POST["num_tmp"];

echo $numero_tmp;
echo "<br/>";
echo "<br/>";

$temperaturas = array();

//Le damos un valor a cada posicion del array
for($i = 0; $i < $numero_tmp; $i++) {
    $temperaturas[$i] = rand(1, 30);
}

print_r($temperaturas);
echo "<br/>";
echo "<br/>";


$temp = 0.0;


//MEDIA
foreach ($temperaturas as &$valor) {
    $temp = $temp + $valor;
    
}

print_r($temp);
echo "<br/>";
echo "<br/>";


$media = $temp / $numero_tmp;

print_r($media);




//TEMP MAXIMA
/*
$temp = array();
$cont = 0;
foreach ($temperaturas as &$valor) {
    $temp[$cont] = $valor;
    $cont++;
}

print_r($temp);
echo "<br/>";
echo "<br/>";

$maximo = max($temp);

print_r($maximo);

*/



/*
//TEMP MINIMA

$temp = array();
$cont = 0;
foreach ($temperaturas as &$valor) {
    $temp[$cont] = $valor;
    $cont++;
}

print_r($temp);
echo "<br/>";
echo "<br/>";

$minimo = min($temp);

print_r($minimo);
*/



?>

</body> 
</html>