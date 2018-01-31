<?php

echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "<br>";
#Ver el contenido completo de un array
print_r($_SERVER);
echo "<br>";
echo "<br>";
#Ver el contenido completo de un array y el tipo de dato que es
var_dump($_SERVER);
echo "<br>";
echo "<br>";

foreach ($_SERVER as $key => $value) {
    echo "$key : $value";
    echo "<br>";
}

?>