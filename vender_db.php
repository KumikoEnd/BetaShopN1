<?php 
$nombre_img=$_FILES['img']['name'];
$tipo_img=$_FILES['img']['type'];
$tama_img=$_FILES['img']['size'];

$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'Practicas_Proyectos/BetaEshop/img-produc';
move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$nombre_img);

?>