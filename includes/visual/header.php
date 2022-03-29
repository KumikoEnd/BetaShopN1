<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $conf['title'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $rlink;?>css/style.css">
	<script type="text/javascript" src="<?php echo $rlink;?>js/jquery-3.6.0.js"></script>
</head>
<body>
<div></div>
<div class="header">
	<div class="logo"><?php echo $conf['title']?></div>
	<?php
	include($_SERVER['DOCUMENT_ROOT']."/".$conf["opdir"]."/includes/visual/menu.php");
	?>
	<div class="iconos">
		<img src="<?php echo $rlink;?>img/lupa.png" style="width:30px">
		<img src="<?php echo $rlink;?>img/carrito.png" style="width:30px">
		<a href="<?php echo $rlink;?>ucp"><img src="<?php echo $rlink;?>img/iniciarSesion.png" style="width:30px"></a>
		<?php
		if(isset($_SESSION["user"])){
		include($_SERVER['DOCUMENT_ROOT']."/".$conf["opdir"]."/ucp/uincludes/userdata.php");
		echo "<p>".$usuario['nombre']."<br>";
		echo "<a href='".$rlink."ucp/logout.php'>Cerrar Sesion</a></p>";
		}
		?>
	</div> 
	</div>