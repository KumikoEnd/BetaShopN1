<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>betaEshop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
</head>
<body>
<div class="header">
	<div class="logo">BetaEshop</div>
	<ul class="menu">
		<li><a href="">Inicio</a></li>
		<li><a href="">Nosotros</a></li>
		<li><a href="">Tienda</a></li>
	</ul>
	<div class="iconos">
		<img src="img/lupa.png" style="width:30px">
		<img src="img/carrito.png" style="width:30px">
		<img src="img/iniciarSesion.png" style="width:30px">
	</div>
</div>
<section class="subir-producto"> 
	<br><br><h1>Vende tu Producto</h1>
	<div class="subir-producto-div">
		<form action="vender_db.php" method="post" enctype="multipart/form-data" id="form-vender">
			<div class="form-col">
			<div>
				<label>Nombre del Producto</label>
				<label>Precio</label>
			</div>
			<div>
				<input type="text" name="">
				<input type="text" name="">
			</div>
			</div>
			<div class="form-fila">
			<label>Descripción del producto</label>
			<textarea name=""></textarea>
			<input type="file" name="img" id="subir-img">
			<input type="submit" name="enviar">
			</div>
		</form>
	</div>
</section>
</body>
</html>