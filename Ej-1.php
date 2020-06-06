<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 1</title>
</head>

<body>
    <a href="Ej-1.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";
$A = $_GET["A"];
$B = $_GET["B"];

echo "A = " . $A;
echo "<br>";
echo "B = " . $B;
echo "<br>";
echo "<br>";

$aux = $A;
$A = $B;
$B = $aux;

echo "Ahora :";
echo "<br>";
echo "A = " . $A;
echo "<br>";
echo "B = " . $B;
?>