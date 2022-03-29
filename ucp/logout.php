<?php
include("../includes/config/configfile.php");
session_destroy();
header("Location: {$rlink}");
?>