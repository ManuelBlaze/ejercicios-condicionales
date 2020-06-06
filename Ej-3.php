<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 3</title>
</head>

<body>
    <a href="Ej-3.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";
$N1 = $_GET["N1"];
$N2 = $_GET["N2"];
$N3 = $_GET["N3"];

echo "NÚMERO 1 : " . $N1;
echo "<br>";
echo "NÚMERO 2 : " . $N2;
echo "<br>";
echo "NÚMERO 3 : " . $N3;
echo "<br>";

if ($N1 < 0) {
    $res = $N1 * $N2 * $N3;
} else {
    $res = $N1 + $N2 + $N3;
}

echo "<br>";
echo "<br>";
echo "Total : " . $res;

?>