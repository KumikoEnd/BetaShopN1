<?php 
if (isset($_FILES['img'])){
$nombre_img=$_FILES['img']['name'];
$tipo_img=$_FILES['img']['type'];
$tama_img=$_FILES['img']['size'];
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/BetaEshop/img-produc/';
move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$nombre_img);
header('Location: vender.php');
}else{
	header('Location: vender.php');
}
?>