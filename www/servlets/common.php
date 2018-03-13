<?php
	include_once("db.php");

	//common utility
	function checksum($txt){
		return md5($txt);
	}

	function insertUserMessage($uname, $message){
		$uname = secure($uname);
		$message = secure(checksum($message));


		$q = "INSERT INTO tbl_users(uname, message) VALUES ('$uname', '$message')";
		executeSQL($q);
	}	


if(1==2){
	insertuser("User1", "He's Here");


if(1==2){
	insertUserMessage("User1", "He's Here");
}
?>
