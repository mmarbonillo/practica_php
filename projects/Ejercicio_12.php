<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Dado</title> 
</head> 
<body>

<?php
/*
$dado = array();

for ($i = 0; $i < 6; $i++) {
    $dado[$i] = rand(1, 6);
    $cara = $dado[$i];
}
*/

$cara= rand(1, 6);

if($cara == 1) {
    print "<img src=\"dado/1.jpg\">";
} elseif ($cara == 2) {
    print "<img src=\"dado/2.jpg\">";
} elseif ($cara == 3) {
    print "<img src=\"dado/3.jpg\">";
} elseif ($cara == 4) {
    print "<img src=\"dado/4.png\">";
} elseif ($cara == 5) {
    print "<img src=\"dado/5.png\">";
} elseif ($cara == 6) {
    print "<img src=\"dado/6.png\">";
}

?>

</body> 
</html>