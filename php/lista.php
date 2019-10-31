
<!DOCTYPE html>
<html>
<head>
	<title>lista de usuarios</title>
</head>
<body>
<?php


include("conecxion.php");
$consulta="SELECT usuario,contrasena,email from  usuarios";

$resultado=$conexionDB->query($consulta);
var_dump($resultado);

?>


</body>
</html>