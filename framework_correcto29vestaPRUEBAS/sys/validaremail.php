<?php
/**
* @author Andreu Sanz Miedes y Aida Dahdah Castelló
* @author asanzm.sanz@gmail.com, aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/
$servidor = "localhost";
$usuario = "2daw13_root";
$clave = "rootroot";
$basedatos = "2daw13_tienda_online";
$email= $_POST['email'];

$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
$cadena ="select * from usuarios where email = '".$email."'";
$results = mysql_query($cadena) or die('la consulta falla');
	
	if(mysql_num_rows($results) > 0) // existe
	{
	echo 'Email no disponible';
	}
	else
	{
	echo 'Email disponible';
	}

?>