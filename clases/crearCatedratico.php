<html>
<head>
	<title>Crear Catedratico</title>
</head>
<body>
	<form>
<?php 
include 'manejador.class.php';
$idcatedrtico=$_POST['id'];
$Nombre=$_POST['nombre'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['telefono'];
 $manejador=new Manejardor();
$resultado=$manejador->crearCatedratico($idcatedrtico, $Nombre, $Correo, $Telefono);
if ($resultado) {
echo "Catedratico Registrado Exitosamente";
}else{
	echo "Lo sentimos no se pudo Registrar ";
}
 ?>
 </form>
</body>
</html>