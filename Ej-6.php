<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 6</title>
</head>

<body>
    <a href="Ej-6.html">Volver</a>
</body>

</html>
<?php
echo "<br>";
echo "<br>";

class empleado
{
    public $name;
    public $salBrut;
    public $deducciones;
    public $bonificaciones;

    function __construct($name, $salBrut, $deducciones, $bonificaciones)
    {
        $this->name = $name;
        $this->salBrut = $salBrut;
        $this->deducciones = $deducciones;
        $this->bonificaciones = $bonificaciones;
    }
    function getName()
    {
        echo $this->name . "<br/>";
    }
    function getSalBrut()
    {
        echo $this->salBrut;
    }
    function getDeducciones()
    {
        echo $this->deducciones;
    }
    function getBonificaciones()
    {
        echo $this->bonificaciones;
    }
    function calcular_salario($salBrut, $deducciones, $bonificaciones)
    {
        return $salBrut - $deducciones + $bonificaciones;
    }
}

$emp1 = new empleado($_GET["name1"], $_GET["salBrut1"], $_GET["deduc1"], $_GET["bonif1"]);
$emp2 = new empleado($_GET["name2"], $_GET["salBrut2"], $_GET["deduc2"], $_GET["bonif2"]);

$emp1->getName();
echo "Sueldo Bruto : ";
$emp1->getSalBrut();
echo "<br>";
echo "Deducciones : ";
$emp1->getDeducciones();
echo "<br>";
echo "Bonificaciones : ";
$emp1->getBonificaciones();
echo "<br>";
echo "<br>";
$emp2->getName();
echo "Sueldo Bruto : ";
$emp2->getSalBrut();
echo "<br>";
echo "Deducciones : ";
$emp2->getDeducciones();
echo "<br>";
echo "Bonificaciones : ";
$emp2->getBonificaciones();
echo "<br>";
echo "<br>";

$salNeto1 = $emp1->calcular_salario($_GET["salBrut1"], $_GET["deduc1"], $_GET["bonif1"]);
$salNeto2 = $emp2->calcular_salario($_GET["salBrut2"], $_GET["deduc2"], $_GET["bonif2"]);

if ($salNeto1 > $salNeto2) {
    $emp1->getName();
    echo "Tiene el salario neto más alto";
} else {
    $emp2->getName();
    echo "Tiene el salario neto más alto";
}
?>