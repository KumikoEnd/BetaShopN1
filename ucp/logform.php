<?
$mailerror = False;
$badpass = False;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
  $pass = $_POST["password"];
  if($correo == !null and $pass ==!null){
	$verifyu = "SELECT * FROM usuarios WHERE correo='".$correo."' OR usuario='".$correo."'";
	$ver = $conn->query($verifyu);
	$validados = $ver->fetch_assoc();
  if(isset($validados)){
	  
	  if($validados['password']==$pass){
		  echo "pasó2";
		session_start();
		$_SESSION["user"] = $validados['usuario'];
		header("Refresh:0");
	  }else{
		  $badpass = True;
	  }
  }
  }else{
	  $mailerror = True;
  }
}

?>
<body>
<form method="post" action="<? echo $_SERVER["PHP_SELF"];?>" autocomplete="off">

  <?if($mailerror){
	  echo "<span ><font color='red'>Error: Correo o contraseña vacios.</font></span><br>";
  }else if($badpass){
	  echo "<span ><font color='red'>Error: Contraseña Incorrecta.</font></span><br>";
  }
  ?>
  Usuario o Correo: 	<input type="text" name="correo" placeholder="Usuario o Correo" value="" required>
  <br><br>
  Contraseña: <input type="password" name="password" placeholder="Contraseña" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>