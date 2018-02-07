<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Monedas</title> 
</head> 
<body>

<form method="post">
<div>
<label for="num_mon">Número de monedas:</label>
    <select name="num_mon">
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
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
    </select>
</div> 

<div>
<label for="tipo_moneda">Tipo de moneda:</label>
    <select name="tipo_moneda">
        <option value="1" selected>dolar</option>
        <option value="2">Euro</option>
        <option value="3">Yen</option>
        <option value="4">Libra</option>
        <option value="5">Franco</option>
    </select>
</div>
<input type="submit" value="Enviar">
</form>

<?php

$numero_monedas = $_POST["num_mon"];
$tipo_monedas = $_POST["tipo_moneda"];

echo $numero_monedas;
echo "<br/>";
echo $tipo_monedas;
echo "<br/>";
echo "<br/>";

$monedas = array();

//"Lanzamos la moneda", es decir, le damos un valor a cada posicion del array
for($i = 0; $i < $numero_monedas; $i++) {
    $monedas[$i] = rand(0, 1);
}
print_r($monedas);

//Le indicamos que, si el valor de la posición ($x) del array ($monedas) es 0, nos muestre la cara; en caso contrario (que sea 1) nos mostrará cruz
for($x = 0; $x < $numero_monedas; $x++) {
    if( $monedas[$x] == 0) {
        if($tipo_monedas == 1){
            print "<img src=\"fotos/dolar1.jpeg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 2) {
            print "<img src=\"fotos/cara.gif\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 3) {
            print "<img src=\"fotos/yenfront.jpg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 4) {
            print "<img src=\"fotos/librafront.jpg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 5) {
            print "<img src=\"fotos/francofront.jpg\" width=\"200\ height\"200\">";
        } 


    } else {
        if($tipo_monedas == 1){
            print "<img src=\"fotos/dolar2.jpg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 2) {
            print "<img src=\"fotos/cruz.gif\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 3) {
            print "<img src=\"fotos/yenbehind.jpg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 4) {
            print "<img src=\"fotos/librabehind.jpg\" width=\"200\ height\"200\">";
        } elseif ($tipo_monedas == 5) {
            print "<img src=\"fotos/francobehind.jpg\" width=\"200\ height\"200\">";
        }
    }
    
    
    /*if( ($monedas[$x] == 0) && ($tipo_monedas == 1 ) {
        print "<img src=\"fotos/cruzdolar.JPG\">";
    } else {
        print "<img src=\"fotos/caradolar.jpg\">";
    }*/
}


?>

</body> 
</html>