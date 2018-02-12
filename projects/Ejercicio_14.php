<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Notas</title> 
</head> 
<body>

<form method="post">

<div>
    <label for="nota">Nota:</label>
    <input type="int" name="nota">
</div>

<button type="submit">Enviar</button>

</form>




<?php


if(!empty($_POST["nota"])) {
    if($_POST["nota"]>=0 && $_POST["nota"]<5) {
        echo "Insuficiente";    
    } 
        elseif($_POST["nota"]>=5 && $_POST["nota"]<6){
            echo "Suficiente";
        } 
        elseif($_POST["nota"]>=6 && $_POST["nota"]<7) {
        echo "Bien";
        }
        elseif($_POST["nota"]>=7 && $_POST["nota"]<9){
            echo "Notable";
        }
        elseif($_POST["nota"]>=9 && $_POST["nota"]<=10){
            echo "Sobresaliente";
        } else { echo "La nota no es válida"; }
        
    
    echo "</br>";
    echo "</br>";
    echo "Nota: ".$_POST["nota"];
}
