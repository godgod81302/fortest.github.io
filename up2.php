<?php
  session_start();
  
 require_once("conMysql.php");
  
  
  if(empty($_SESSION['ids'])) echo "NO";
  $id=$_GET['id'];
 $ac =     $_SESSION["ac"];
 $type =      $_SESSION["type"];
 $shop =      $_SESSION["shop"];
 $fon =      $_SESSION["fon"];
 $adds =      $_SESSION["adds"];
 $tim =      $_SESSION["tim"];
 $allth =      $_SESSION["allth"];
 $dollar =      $_SESSION["dollar"];
 $shopid=$_SESSION["ids"];
 $foodid=$_SESSION["idf"];
 
 
 
  
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 



$sql="SELECT * from `memberdata` WHERE `m_name` = '$ac'";
$m = mysqli_query($conn,$sql);
	 $r=mysqli_fetch_row($m);
 $rr = $r[15];
  echo   $rr1=$rr-1;


$sql="UPDATE `memberdata` SET `m_time`='$rr1' WHERE `m_name` = '$ac' ";
$q = $conn->query($sql);


//$sql = "UPDATE  SET  pass = '".$pass."',type = $type ,shop = '".$shop."',fon = $fon, adds = '".$adds."', tim = '".$tim."',allth = '".$allth."',dollar = $dollar WHERE ac = '".$ac."' ";
$sql="INSERT INTO `eatup` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`) VALUES ('".$id."','".$ac."','',$type,'".$shop."','".$fon."','".$adds."','".$tim."','".$allth."','".$shopid."','".$foodid."',$dollar,'')";
	
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



//session_unset(); 
//session_destroy();
echo "<script>alert('感謝您的支持，我們會盡速處理!'); location.href = 'http://127.0.0.1/eat/eat/';</script>";

?>


           
           
