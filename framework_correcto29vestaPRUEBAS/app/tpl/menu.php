<?php /**
* @author Andreu Sanz Miedes y Aida Dahdah Castelló
* @author asanzm.sanz@gmail.com, aidadahdah@gmail.com
* @copyright 2015 PROYECTO FINAL
* @version 1.0
*/


if(isset($_SESSION['rol']) ){
$menu = '<div id="menu"><div><a href="'.APP_W.'home">Inicio</a></div>';

if($_SESSION['rol']==1){
	$menu.= '<div><a href="'.APP_W.'gestionar/gestionarusuarios">Gestionar Usuarios</a></div>';
}else{
	$menu.= '<div><a href="'.APP_W.'gestionar/gestionarcompras">Ver pedidos</a></div>
	<div><a href="'.APP_W.'gestionar/gestionarperfil">Modificar Perfil</a></div>
	<div><a href="'.APP_W.'carrito">Ver Carrito</a></div>';

}



$menu.= '</div>';
echo $menu;
}


?>