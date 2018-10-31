<?php

require_once("conMysql.php");
$id = $_GET["id"];
$idin=$_GET["idin"];

$up= "UPDATE `shopstar` SET `ch` = 1  WHERE `idin`= $idin";
$update= mysqli_query($conn,$up);
 if($update === true){
$k='star.php?id='.$id;
 echo "<script>alert('提示：檢舉成功'); location.href = '$k';</script>";}
 

?>

