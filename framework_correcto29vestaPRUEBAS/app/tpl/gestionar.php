<?php 
if(isset($_SESSION['compras'])){
	echo '<div id="vsesion">'.$_SESSION['compras'].'</div>';
}


if(isset($_SESSION['usuarios'])){
	echo '<div id="vsesion">'. $_SESSION['usuarios'].'</div>';
}

if(isset($_SESSION['libros'])){
	echo '<div id="vsesion">'.$_SESSION['libros'].'</div>';
}

if(isset($_SESSION['perfil'])){
	echo $_SESSION['perfil'];
}


// echo $_SESSION['id_usuario'];
?>

