<?php

include("../includes/config/configfile.php");
?>
<?php
include("../includes/visual/header.php");
?>
<?php
if(isset($_SESSION["user"])){
?>
	<!--Logeado -->
	<section class="main">
	
		<section class="sidebar">
		<div class="conten-logo-p">
		<a href="#">	
		<span><?php echo $usuario['nombre'];?></span>
		</a>
		</div>
		<img src="img/barras.png" id="barras">
		<hr>
		<ul id="lista">
			<li class="lista-li"><a href="<?php echo $rlink;?>index.php">Inicio</a></li>
			<?php
			include("uincludes/vertmenu.php");
			 ?>
			<li class="lista-li"><a href="<?php echo $rlink;?>ucp/logout.php">Cerrar Sesión</a></li>
			
		</ul>
		</section>
	
	
	</section>
	
	<!-- Fin logeado -->
	<?php
}else{
?>
	<!--No logeado -->


<section class="main">
	<div class="produc">
<?php
include("logform.php");
?>

	</div>
</section>
<!-- Fin no logeado -->
<?php
}
?>
</body>
</html>