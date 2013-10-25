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

$conexion->loginUsuario($user,$pass);

?>
</form>
</body>
</html>
