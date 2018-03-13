<?php
	include_once("common.php");


	$uname = $_POST["uname"];
	$message = $_POST["message"];
	add($uname, $message);
	
?>
