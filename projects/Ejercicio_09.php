<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Notas</title> 
</head> 
<body>

<form method="post">

<div>
    <label for="num">Número:</label>
    <input type="int" name="num">
</div>

<button type="submit">Enviar</button>

</form>




<?php

$numnum = $_POST["num"];

if(!empty($_POST["num"])) {
    echo "<table border=\"1\">";
    echo "Tabla del $numnum";
    for($i = 1; $i <=10; $i++) {
        $resultado = $_POST["num"] * $i;
        echo "<tr>";
        echo "<td>$numnum</td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td> $resultado </td>";
        echo "</tr>";
        echo "<br>";
}
echo "</table>";
} else{
    echo "Introduce un número";
}



?>

</body> 
</html>