<html>
<head>
</head>
<body>

<div id="main">

<?php
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$hora = $_POST["hora"];
$temp = $_POST["temp"];
$idciudad = $_POST["idciudad"];

include_once("TemperaturaCollector.php");

$TemperaturaCollectorObj = new TemperaturaCollector();
$ObjTemperatura = $TemperaturaCollectorObj->createTemperatura($dia,$mes,$hora,$temp,$idciudad);

echo "Se ha guardado correctamente </br>";

?>

<div><a href="index_temperatura.php">Volver al Inicio</a></div>
</div>
</body>
</html>
