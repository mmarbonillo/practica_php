<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Función 1</title> 
</head> 
<body>

<form method="post">

<div>
    <label for="numero">Tabla del:</label>
    <input type="int" name="numero">
</div>

<button type="submit">Enviar</button>

</form>



<?php
$numero = $_POST["numero"];

echo "Tabla del $numero";
echo "<br/>";
echo "<br/>";
function multiplicar($num) {
    for($i = 1; $i <=10; $i++) {
        $resultado = $num * $i;
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td> $resultado </td>";
        echo "</tr>";
        echo "<br>";
    }
}

multiplicar($numero);


?>

</body> 
</html>