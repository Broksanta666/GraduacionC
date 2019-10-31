<?php

$conexionDB = new mysqli("localhost","root","graduacion4C");

if ($conexionDB->connect_error){
	die("Errir de conoexcion". $conexionDB->connect_error);

}
else{
	echo"conexion exitosa"
}
?>