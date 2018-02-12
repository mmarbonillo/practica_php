<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Dados</title> 
</head> 
<body>

<form method="post">
<div>
<label for="num_dados">Número de dados:</label>
    <select name="num_dados">
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

<input type="submit" value="Enviar">

</form>

<?php

$numero_dados = $_POST["num_dados"];

echo $numero_dados;

$dado = array();

//"Tiramos el dado", es decir, le damos un valor a cada posicion del array
for($i = 0; $i < $numero_dados; $i++) {
    $dado[$i] = rand(1, 6);
}
print_r($dado);

//Le indicamos que, si el valor de la posición ($x) del array ($monedas) es 0, nos muestre la cara; en caso contrario (que sea 1) nos mostrará cruz
for($x = 0; $x < $numero_dados; $x++) {
    if( $dado[$x] == 1) {
        print "<img src=\"dado/1.jpg\">";
    } elseif($dado[$x] == 2)  {
        print "<img src=\"dado/2.jpg\">";
    } elseif($dado[$x] == 3)  {
        print "<img src=\"dado/3.jpg\">";
    } elseif($dado[$x] == 4)  {
        print "<img src=\"dado/4.png\">";
    } elseif($dado[$x] == 5)  {
        print "<img src=\"dado/5.png\">";
    } elseif($dado[$x] == 6)  {
        print "<img src=\"dado/6.png\">";
    }

}


?>

</body> 
</html>