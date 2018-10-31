<?php
	$db_host = "eatwhat.mysql.database.azure.com";
	$db_username = "nuu405405@eatwhat";
	$db_password = "Lab405405";
	$db_name = "eat1";

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $db_host, $db_username, $db_password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Run the create table query
if (mysqli_query($conn, '
CREATE TABLE Products (
`Id` INT NOT NULL AUTO_INCREMENT ,
`ProductName` VARCHAR(200) NOT NULL ,
`Color` VARCHAR(50) NOT NULL ,
`Price` DOUBLE NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}
else{printf("error\n");}

//Close the connection
mysqli_close($conn);
?>