<?php
	include_once("db.php");

	//common utility
	function checksum($txt){
		return md5($txt);
	}
	function insertUser($uname, $pwd, $real_name){
		$uname = secure($uname);
		$message = secure($message);

		$q = "INSERT INTO tbl_users(uname, message) VALUES ('$uname', '$message')";
		executeSQL($q);
	}	


if(1==2){
	insertuser("User1", "He's Here");

}
?>
