<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Lista</title> 
</head> 
<body>


<?php

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
$long = count($lista);

//Ordeno el array ascendentemente por valor
asort($lista);

print_r($lista);
echo "<br/>";
echo "<br/>";

//Recorro el array ya ordenado para mostrarlo
echo "Array ordenado de menor a mayor por valor: <br/>";
foreach ($lista as $clave => $valor) {
    echo "$clave = $valor <br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//Ordeno el array ascendentemente por clave
ksort($lista);

print_r($lista);
echo "<br/>";
echo "<br/>";

//Recorro el array ya ordenado para mostrarlo
echo "Array ordenado de menor a mayor por clave: <br/>";
foreach ($lista as $clave => $valor) {
    echo "$clave = $valor <br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//Ordeno el array descendentemente por valor
arsort($lista);

print_r($lista);
echo "<br/>";
echo "<br/>";

//Recorro el array ya ordenado para mostrarlo
echo "Array ordenado de mayor a menor por valor: <br/>";
foreach ($lista as $clave => $valor) {
    echo "$clave = $valor <br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//Ordeno el array descendentemente por valor
krsort($lista);

print_r($lista);
echo "<br/>";
echo "<br/>";

//Recorro el array ya ordenado para mostrarlo
echo "Array ordenado de mayor a menor por clave: <br/>";
foreach ($lista as $clave => $valor) {
    echo "$clave = $valor <br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

?>

</body> 
</html>