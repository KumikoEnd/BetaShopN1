<?php

include("../includes/config/configfile.php");
?>
<?php
include("../includes/visual/header.php");
?>
<?php
if(isset($_SESSION["user"])){
	 //Datos del usuario logeado
?>
	<!--Logeado -->
	<section class="main">
	<span>Bienvenido de vuelta <?php echo $usuario['nombre'];?></span>
	
	
	
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