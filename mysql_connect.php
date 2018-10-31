<?php
	//資料庫主機設定
	$db_host = "localhost";
	$db_username = "eat1";
	$db_password = "p0975775056";
	$db_name = "lab405";
	//連線資料庫
	$conn = @new mysqli($db_host, $db_username, $db_password, $db_name);
	//錯誤處理
	if ($conn->connect_error != "") {
		echo "資料庫連結失敗！";
	}else{
		//設定字元集與編碼
		$conn->query("SET NAMES 'utf8'");
	}
?>