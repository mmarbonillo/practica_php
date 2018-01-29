<?php
$title = "Tabla de multiplicar";
$NUMERO = 8;
?> 



<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title><?php echo $title; ?></title> 
</head> 
<body>

<h1><?php echo $title; ?></h1>

<?php
// Variables

/*
Otro comentario
*/

$TEXTO = "Hola";
$PRECIO = 100.75;
$ESTAAPROBADO = true;

echo $TEXTO;
echo "<br>";
echo $NUMERO;
echo "<br>";
echo $PRECIO;
echo "<br>";
echo $ESTAAPROBADO;
echo "<br>";
echo "<br>";

/*
for($NUMERO = 0; $NUMERO <=10; $NUMERO++) {
    echo "Número = $NUMERO";
    echo "<br>";
}
*/
echo "<br>";
echo "<br>";


echo "<table border=\"1\">";
for($i = 1; $i <=10; $i++) {
    $reluntado = $NUMERO * $i;
    echo "<tr>";
    echo "<td>$NUMERO</td>";
    echo "<td> x </td>";
    echo "<td> $i </td>";
    echo "<td> = </td>";
    echo "<td> $reluntado </td>";
    echo "</tr>";
    echo "<br>";
}
echo "</table>";

?>

</body> 
</html> 