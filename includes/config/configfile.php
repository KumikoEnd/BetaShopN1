<?php
$server = "localhost";
$user = "root";
$dbpass = "";
$db = "BetaEshop";
$conn = new mysqli($server, $user, $dbpass, $db);
session_start();
$pageconf = "SELECT * FROM siteconf";
$result = $conn->query($pageconf);
$conf = $result->fetch_assoc();
$rlink = "http://".$conf["host"]."/".$conf["opdir"];
$error = array(False,False,False);

$errorlist = array(
"<span ><font color='red'>Error 0: Correo o contraseña vacios.</font></span><br>",
"<span ><font color='red'>Error 1: Contraseña Incorrecta.</font></span><br>",
"<span ><font color='red'>Error 2: Usuario Inexistente.</font></span><br>"
);



$menudb = "SELECT * FROM menu";
$menucon = $conn->query($menudb);

?>