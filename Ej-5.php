<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 5</title>
</head>

<body>
    <a href="Ej-5.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";
$hermanoUno = $_GET["name1"];
$edadUno = $_GET["edad1"];
$hermanoDos = $_GET["name2"];
$edadDos = $_GET["edad2"];

echo "Hermano 1 : " . $hermanoUno;
echo "<br>";
echo "Edad : " . $edadUno;
echo "<br>";
echo "Hermano 2 : " . $hermanoDos;
echo "<br>";
echo "Edad : " . $edadDos;
echo "<br>";

if ($edadUno > $edadDos) {
    $mayor = $hermanoUno;
} else {
    $mayor = $hermanoDos;
}

echo "<br>";
echo "<br>";
echo "El hermano mayor es: " . $mayor;
?>