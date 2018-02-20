<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>While</title> 
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
$i = 0;
while ($i < $numero_tmp) {
    $temperaturas[$i] = rand(1, 30);
    $i++;
}

print_r($temperaturas);
echo "<br/>";
echo "<br/>";

$temp = 0.0;
$x = 0;

//MEDIA

while ($x < $numero_tmp) {
    $temp = $temp + $temperaturas[$x];
    $x++;
}

$media = $temp / $numero_tmp;

echo "<h4>Media: $media</h4>";



//VALOR MAXIMO
$y = 0;
$maximo = $temperaturas[0];

while ($y < $numero_tmp) {
    if($maximo < $temperaturas[$y]) {
        $maximo = $temperaturas[$y];
    }
    $y++;
}
echo "<h4>Máximo: $maximo</h4>";


//VALOR MINIMO
$z = 0;
$minima = $temperaturas[0];

while ($z < $numero_tmp) {
    if($minima > $temperaturas[$z]) {
        $minima = $temperaturas[$z];
    }
    $z++;
}
echo "<h4>Mínimo: $minima</h4>";


?>

</body> 
</html>