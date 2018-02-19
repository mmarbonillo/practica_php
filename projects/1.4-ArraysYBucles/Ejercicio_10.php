<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Lista</title> 
</head> 
<body>


<?php

$lista = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
$long = count($lista);

//Ordeno el array ascendentemente por clave
$orden = ksort($lista);

/*
//Recorro el array ya ordenado para mostrarlo
foreach ($lista as $clave => $valor) {
    echo " La capital de $clave es $valor <br/><br/>";
}
*/

json_encode($orden);


?>

</body> 
</html>