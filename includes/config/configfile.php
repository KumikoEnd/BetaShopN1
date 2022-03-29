<?php
$server = "localhost";
$user = "root";
$dbpass = "";
$db = "BetaEshop";
$conn = new mysqli($server, $user, $dbpass, $db);

$pageconf = "SELECT * FROM siteconf";
$result = $conn->query($pageconf);
$conf = $result->fetch_assoc();
$rlink = "http://".$conf["host"]."/".$conf["opdir"];
?>