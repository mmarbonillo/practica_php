<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Días</title> 
</head> 
<body>

<form method="post">

<div>
    <label for="dia">Día:</label>
    <input type="int" name="dia">
</div>

<button type="submit">Enviar</button>

</form>




<?php


switch ($_POST["dia"]) {
    case 1:
        echo "Lunes";
        break;
    
    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miércoles";
        break;

    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;

    case 6:
        echo "Sábado";
        break;

    case 7:
        echo "Domingo";
        break;

}
?>

</body> 
</html>