<?php
require_once("conMysql.php");

 $ac =$_REQUEST['ac'];
 $pass = $_REQUEST['pass'];
 $type = $_REQUEST['type'];
 $shop = $_REQUEST['shop'];
 $fon = $_REQUEST['fon'];
 $adds = $_REQUEST['adds'];
 $tim = $_REQUEST['tim'];
 $allth = $_REQUEST['allth'];
 $dollar = $_REQUEST['dollar'];

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO `eatwhat` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`) VALUES (NULL,'".$ac."','".$pass."',$type,$shop,$fon,$adds,$tim,$allth,'','',$dollar,'1')";



if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


           
           
