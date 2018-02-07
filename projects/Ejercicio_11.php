<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Notas</title> 
</head> 
<body>

<form method="post">
<div>
<label for="num_mon">Número de monedas:</label>
    <select name="num_mon">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
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


?>

</body> 
</html>