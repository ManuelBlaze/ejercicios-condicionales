<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 7</title>
</head>

<body>
    <a href="Ej-7.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";

class Bus
{
    public $placa;
    public $pasajeros;
    public $pasaje;

    function __construct($placa, $pasajeros, $pasaje)
    {
        $this->placa = $placa;
        $this->pasajeros = $pasajeros;
        $this->pasaje = $pasaje;
    }
    function getPlaca()
    {
        echo $this->placa . "<br/>";
    }
    function getPasajeros()
    {
        echo $this->pasajeros;
    }
    function getPasaje()
    {
        echo $this->pasaje;
    }
    function calcularDinero($pasajeros, $pasaje)
    {
        return $pasajeros * $pasaje;
    }
}

$bus1 = new Bus($_GET["placa1"], $_GET["pasajeros1"], $_GET["pasaje1"]);
$bus2 = new Bus($_GET["placa2"], $_GET["pasajeros2"], $_GET["pasaje2"]);

$bus1->getPlaca();
echo "Pasajeros: ";

$bus1->getPasajeros();
echo "<br>";
echo "Valor del pasaje: ";

echo " $" . $bus1->getPasaje();
echo "<br>";
echo "<br>";
$bus2->getPlaca();
echo "Pasajeros: ";

$bus2->getPasajeros();
echo "<br>";
echo "Valor del pasaje: ";

echo " $" . $bus2->getPasaje();
echo "<br>";
echo "<br>";

$dinero1 = $bus1->calcularDinero($_GET["pasajeros1"], $_GET["pasaje1"]);
$dinero2 = $bus2->calcularDinero($_GET["pasajeros2"], $_GET["pasaje2"]);

echo "<br>";
if ($dinero1 > $dinero2) {
    $bus1->getPlaca();
    echo "Es el bus que más dinero recaudó";
} else {
    $bus2->getPlaca();
    echo "Es el bus que más dinero recaudó";
}

?>