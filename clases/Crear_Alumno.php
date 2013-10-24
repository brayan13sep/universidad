<html>
<head>
</head>
<body>
	<form method="POST">
<?php 

include "manejador.class.php";

$Carne=$_POST['Carne'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Direccion="NULL";
$Correo=$_POST['Correo'];
$Sede=$_POST['Sede'];
$Manejador= new Manejador();

$Manejador->crearAlumno($Carne, $Nombre, $Direccion, $Correo, $Sede);


 ?>
	</form>
</body>
</html>