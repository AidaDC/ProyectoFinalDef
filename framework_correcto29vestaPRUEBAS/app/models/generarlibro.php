<?php
$aaa.= ('
<div id="libro">
<div id="izq"><img id="imagen" src="'.$fila['imagen'].'" alt="'.utf8_encode($fila['alt']). '"></div>
<div id="der"><div id="descrip"><p>Nombre:  ' . utf8_encode($fila['nombre']) . '</p>
<p>Autor:  ' . utf8_encode($fila['nombre autor']) . ' ' . utf8_encode($fila['apellidos']) . '</p>
<p >Precio:  ' . $fila['price'] . '</p>
<p>Stock:  ' . $fila['stock'] . '</p></div>
<div id="der2">
<form id="comp" name="' . 'form' . $idlib . '" method="post" accept-charset="UTF-8" action="' . APP_W . 'gestionar/gestionarlibros"><input id="comp" type="submit" value="Más  Información" name="enviar">
</div>
</div> <!-- final del div der -->');
?>