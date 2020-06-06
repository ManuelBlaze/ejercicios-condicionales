<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 9</title>
</head>

<body>
    <a href="Ej-9.html">Volver</a>
</body>

</html>
<?php

echo "<br>";
echo "<br>";
$hijos = $_GET["hijos"];

echo "Número de hijos: " . $hijos;
echo "<br/>";
echo "<br/>";
echo "<br/>";

switch ($hijos) {
    case "1":
        echo "Tiene derecho a subsidio de Comfama.";
        break;

    case "2":
        echo "Tiene derecho a subsidio del gobierno.";
        break;

    case "3":
        echo "Tiene derecho a subsidio de la ONU.";
        break;

    default:
        echo "Por ahora no hay beneficios.";
        break;
}
?>