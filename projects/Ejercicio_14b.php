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


switch ($_POST["nota"]) {
    case 0:
        echo "Insuficiente";
        break;

    case 1:
        echo "Insuficiente";
        break;
    
    case 2:
        echo "Insuficiente";
        break;

    case 3:
        echo "Insuficiente";
        break;

    case 4:
        echo "Insuficiente";
        break;

    case 5:
        echo "Suficiente";
        break;

    case 6:
        echo "Bien";
        break;

    case 7:
        echo "Notable";
        break;

    case 8:
        echo "Notable";
        break;

    case 9:
        echo "Sobresaliente";
        break;

    case 10:
        echo "Sobresaliente";
        break;

}
?>

</body> 
</html>
