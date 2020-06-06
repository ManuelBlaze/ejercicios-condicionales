<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 2</title>
</head>

<body>
    <a href="Ej-2.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";
$N1 = $_GET["N1"];
$N2 = $_GET["N2"];

echo "NÚMERO 1 : " . $N1;
echo "<br>";
echo "NÚMERO 2 : " . $N2;
echo "<br>";

$suma = $N1 + $N2;
$resta = $N1 - $N2;
$multi = $N1 * $N2;
if ($N2 == 0) {
    $divis = "División entre 0";
} else {
    $divis = $N1 / $N2;
}

echo "SUMA : " . $suma;
echo "<br>";
echo "RESTA : " . $resta;
echo "<br>";
echo "MULTIPLICACIÓN : " . $multi;
echo "<br>";
echo "DIVISIÓN : " . $divis;
echo "<br>";

?>