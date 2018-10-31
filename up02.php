<?php
  session_start();
  require_once("conMysql.php");
  
 $ac = $_REQUEST['ac'];
 $pass = $_REQUEST['pass'];
 $type = $_REQUEST['type'];
 $shop = $_REQUEST['shop'];
 $fon = $_REQUEST['fon'];
 $adds = $_REQUEST['adds'];
 $tim = $_REQUEST['tim'];
 $allth = $_REQUEST['allth'];
 $dollar = $_REQUEST['dollar'];
  $shopupid=$_SESSION["idsup"];
 $foodupid=$_SESSION["idfup"];
 echo $shopupid;
echo $foodupid;
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

//$sql = "UPDATE  SET  pass = '".$pass."',type = $type ,shop = '".$shop."',fon = $fon, adds = '".$adds."', tim = '".$tim."',allth = '".$allth."',dollar = $dollar WHERE ac = '".$ac."' ";
$sql = "UPDATE `eatwhat` SET `type`='$type', `pass`='$pass' , `shop`='$shop' ,`fon`='$fon' ,`adds`='$adds', `tim`='$tim',`allth`='$allth' ,`dollar`='$dollar'   WHERE `ac`='$ac' ";
        $result = mysqli_query($conn,$sql);


if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


           
           
