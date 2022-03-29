<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
  $pass = $_POST["password"];
  if($correo == !null and $pass ==!null){
	$verifyu = "SELECT * FROM usuarios WHERE correo='".$correo."' OR usuario='".$correo."'";
	$ver = $conn->query($verifyu);
  $validados = $ver->fetch_assoc();
  if(empty($validados)){
	  $error[2]=True;
  }
  if(isset($validados)){
	  if(!isset($_SESSION["user"])){
		  if($validados['password']==$pass){
			  echo "pasó2";
			session_start();
			$_SESSION["user"] = $validados['usuario'];
			header("Refresh:0");
		  }else{
			  $error[1]=True;
			}
		}else{
			header('Location: ./ucp');
		}
  }
  }else{
	  $error[0]=True;
  }
}

?>
<body>
<form method="post" action="<? echo $_SERVER["PHP_SELF"];?>" autocomplete="off">

  <?if($error[0]){
	  echo $errorlist[0];
  }else if($error[1]){
	  echo $errorlist[1];
  }else if($error[2]){
	  echo $errorlist[2];
  }
  ?>
  Usuario o Correo: 	<input type="text" name="correo" placeholder="Usuario o Correo" value="" required>
  <br><br>
  Contraseña: <input type="password" name="password" placeholder="Contraseña" required>
  <br><br>
  <input type="submit" name="submit" value="Iniciar Sesion">  
</form>
</body>
</html>