<?php
if(isset($_SESSION["user"])){
	$datos = "SELECT * FROM usuarios WHERE usuario='".$_SESSION["user"]."'";
	$cargardatos = $conn->query($datos);
	$usuario = $cargardatos->fetch_assoc();
}

?>