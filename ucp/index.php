<?php

include("../includes/config/configfile.php");
?>
<?php
include("../includes/visual/header.php");
?>
<?php
if(isset($_SESSION["user"])){
	
?>
	Contenido mostrado a logeados
	<?php
}else{
?>
Contenido mostrado a no logeados

<?php
include("logform.php");
?>
<section class="main">
	<div class="produc">


	</div>
</section>
<?php
}
?>
</body>
</html>