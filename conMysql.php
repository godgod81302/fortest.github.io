<?php
	
	$db_host = "eatwhat.mysql.database.azure.com";
	$db_username = "nuu405405@eatwhat";
	$db_password = "Lab405405";
	$db_name = "eat1";

	//Establishes the connection

	$conn = mysqli_init();
    mysqli_real_connect($conn, $db_host, $db_username, $db_password, $db_name, 3306);
	if ($conn->connect_error != "") {
		echo "資料庫連結失敗！";
	}else{
		//設定字元集與編碼
		$conn->query("SET NAMES 'utf8'");
		
		
		
		
	}
	
	
	
	
	
	





?>