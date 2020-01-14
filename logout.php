<?php
session_start();
$_SESSION["already_logged"]=false;
session_destroy();
header("location:index.php");
?>
