<?php

include("../includes/config/configfile.php");
?>
<?php
include("../includes/visual/header.php");
?>
<?php
if(isset($_SESSION["user"]) and $usuario['privilegio']>8){

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $titulo = $_POST["titulo"];
	  $contenido = $_POST["contenido"];
	  $tipo = $_POST["tipo"];
	  $level = $_POST["level"];
	  $p = $_POST["p"];
	  if($titulo == !null and $contenido ==!null){
	  $verpag = "UPDATE paginas SET titulo='{$titulo}',contenido='{$contenido}',tipo='{$tipo}',level='{$level}' WHERE id='{$p}'";
		if ($conn->query($verpag) === TRUE) {
			echo "SS";
		}
	}
	}
		if(isset($_GET['p'])){
?>

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
	<section class="site-content">
	<?php
	$pagdb = "SELECT * FROM paginas";
	$pg = $conn->query($pagdb);
	?>
	<form method="get" class="pageform" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<select id="p" name="p">
			<?php 
			while($p = $pg->fetch_assoc()){
					if($_GET['p'] == $p['id']){
						echo "<option value='".$p['id']."' selected>".$p['titulo']."</option>";
					}else{
						echo "<option value='".$p['id']."' >".$p['titulo']."</option>";
					}
			} ?>
		</select>
		<input type="submit" value="Seleccionar">
	</form>
		<?php
	$pagdb = "SELECT * FROM paginas WHERE id={$_GET['p']}";
	$pg = $conn->query($pagdb);
	$p = $pg->fetch_assoc();
	?>
		<form method="post" class="pageform" action="<? echo $_SERVER["PHP_SELF"];?>" autocomplete="off">
		<input type="text" name="titulo" placeholder="Titulo de la Pagina" value="<?php echo $p['titulo'] ?>" required>
		<input type="number" name="tipo" placeholder="<?php echo $p['tipo'] ?>" value="<?php echo $p['tipo'] ?>" required>
		<input type="hidden" id="p" name="p" value="<?php echo $_GET['p'] ?>">
		<select id="level" name="level">
		<?php
		for($x = 1; $x <= 10; $x++){
			if($x == $p['level']){
			echo "<option value='".$x."'selected>".$x."</option>";
			}else{
				echo "<option value='".$x."' >".$x."</option>";
			}
		}
		?>
		</select>
		<textarea type="text" name="contenido" required><?php echo $p['contenido'] ?></textarea>
		<input type="submit" value="Enviar">
		</form>
	</section>
	
	</section>
	
	<!-- Fin logeado -->
	<?php
	}else{
		header("Location: ?p=1");
	}
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