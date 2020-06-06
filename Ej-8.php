<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 8</title>
</head>

<body>
    <a href="Ej-8.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";

class Bus
{
    public $placa;
    public $pasajeros;
    public $ruta;

    function __construct($placa, $pasajeros, $ruta)
    {
        $this->placa = $placa;
        $this->pasajeros = $pasajeros;
        $this->ruta = $ruta;
    }
    function getPlaca()
    {
        echo $this->placa . "<br/>";
    }
    function getPasajeros()
    {
        echo $this->pasajeros;
    }
    function getRuta()
    {
        return $this->ruta;
    }
    function calcularDinero($pasajeros, $pasaje)
    {
        echo $pasajeros * $pasaje;
    }
}

$bus = new Bus($_GET["placa"], $_GET["pasajeros"], $_GET["ruta"]);

$ruta = $bus->getRuta();
$bus->getPlaca();
echo "Pasajeros: ";
$bus->getPasajeros();
echo "<br>";
echo "Ruta: " . $ruta;
echo "<br>";
echo "<br>";

switch ($ruta) {
    case 'A':
        $pasaje = 1200;
        break;

    case 'B':
        $pasaje = 1000;
        break;

    default:
        # code...
        break;
}

echo "Valor del pasaje: " . $pasaje;
echo "<br>";
echo "Dinero Recolectado: ";
echo " $" . $bus->calcularDinero(132, $pasaje);
?>