<?php

require_once("conMysql.php");
ignore_user_abort(true); 
set_time_limit(0); 
$time=60*60*24;
do{
	$sql="SELECT * FROM  `memberdata`";
	$result =mysqli_query($conn,$sql);
	while ($row = $result->fetch_assoc()) {
		$r=$row["m_name"];
		$z=0;
		$t=3;
		$up="UPDATE `memberdata` SET `m_login`='$z',`m_time`='$t' WHERE `m_name`='$r' ";
		if($conn->query($up)===true){
     
     	}
	}
	sleep($time);
}while(true);



?>