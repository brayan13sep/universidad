<html>
<head>
</head>
<body>
<form method="POST">
<?php 
include "manejador.class.php";
$user=$_POST['nombres'];
$pass=$_POST['contraseña'];
$conexion=new Manejador();


if ($conexion->loginUsuario($user,$pass)) {
header ("Location: http://localhost/webs/universidad/plantillas/cursos/ver_cursos.html");
}
else{
	header ("Location: http://www.google.com");
}
?>
</form>
</body>
</html>
