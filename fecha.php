<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fecha</title>
</head>
<body>
<?php
 
$dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1];
//Salida: Viernes 24 de Febrero del 2012
 
?>

</body>
</html>