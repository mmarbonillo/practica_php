<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Notas</title> 
</head> 
<body>

<?php

$num = rand(0, 1);


if($num == 1) {
    print "<img src=\"fotos/cara.gif\">";
}
else {
    print "<img src=\"fotos/cruz.gif\">";
}

?>

</body> 
</html>