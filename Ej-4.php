<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 4</title>
</head>

<body>
    <a href="Ej-4.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";
$personaUno = $_GET["name1"];
$edadUno = $_GET["edad1"];
$personaDos = $_GET["name2"];
$edadDos = $_GET["edad2"];

echo "Persona 1 : " . $personaUno;
echo "<br>";
echo "Edad : " . $edadUno;
echo "<br>";
echo "<br>";
echo "Persona 2 : " . $personaDos;
echo "<br>";
echo "Edad : " . $edadDos;
echo "<br>";

echo "<br>";
echo "<br>";
if ($edadUno > ($edadDos * 2)) {
    echo "Le dobla los años";
} else {
    echo "No se llevan tanto tiempo";
}
?>