<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Aleatorio</title> 
</head> 
<body>

<form method="get">

<div>
    <label for="edad">Edad:</label>
    <input type="int" name="edad">
</div>

<button type="submit">Enviar</button>

</form>




<?php


if(!empty($_GET["edad"])) {
    if($_GET["edad"]<18 | $_GET["edad"]>100) {
        echo "La edad no es correcta o no eres mayor de edad";
        exit;
    }
    
    echo "Edad: ".$_GET["edad"];
}

?>

</body> 
</html>