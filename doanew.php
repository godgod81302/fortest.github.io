<?php
 session_start();
  require_once("conMysql.php");
  
    
 $ac =     $_SESSION["ac"];

 $type =      $_SESSION["type"];
 $shop =      $_SESSION["shop"];
 $fon =      $_SESSION["fon"];
 $adds =      $_SESSION["adds"];
 $tim =      $_SESSION["tim"];
 $allth =      $_SESSION["allth"];
 $dollar =      $_SESSION["dollar"];
 $shopid= $_SESSION["idshop"];
 $foodid= $_SESSION["idfood"];

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO `eatin` (`idin`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`) VALUES ('','".$ac."','',$type,'".$shop."','".$fon."','".$adds."','".$tim."','".$allth."','".$shopid."','".$foodid."',$dollar,'')";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


session_unset(); 
session_destroy();

echo "<script>alert('感謝您的支持，我們會盡速處理!'); location.href = 'http://127.0.0.1/eat/eat/';</script>";

?>


           
           
