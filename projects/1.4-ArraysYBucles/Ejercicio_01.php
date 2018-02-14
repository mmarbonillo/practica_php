<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Aleatorio</title> 
</head> 
<body>

<?php

$numero = rand(1, 10);

echo "<table border=\"1\">";
for($i = 1; $i <=10; $i++) {
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td> x </td>";
    echo "<td> $i </td>";
    echo "<td> = </td>";
    echo "<td> $resultado </td>";
    echo "</tr>";
    echo "<br>";
}
echo "</table>";

?>

</body> 
</html>