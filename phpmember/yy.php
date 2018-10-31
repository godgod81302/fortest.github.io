<?php

   $url="localhost";
  $user="root";
  $pw="p0975775056";
  $db="memberdata";
  $conn =@new mysqli($url,$user,$pw,$db);
 if ($conn->connect_error != "") {
  echo "資料庫 404";
 }else{
  //設定字元集與編碼
  $conn->query("SET NAMES 'utf8'") ;}
require_once("connMysql.php");
session_start();

$na=$_SESSION["loginMember"];
$a="a1234";
$inhis="SELECT `m_jointime` FROM `memberdata` WHERE `m_username`='$na' ";
$result = mysqli_query($conn, $inhis);
$row = @mysqli_fetch_row($result);
$ttt=$row[0];

echo $ooo=strtotime($ttt);
echo "////////////////";



$days=ceil( (time() - strtotime($ttt)) / 86400);
if ($days>25){
	
echo "<script type='text/javascript'>alert('警告：密碼已經25天未改，盡速改密碼');</script>";
	
	
}

if ($days>25){
	
echo "<script type='text/javascript'>alert('警告：密碼已經30天未改，請改密碼');location.href = 'member_update.php';</script>";
	
	
}










$t=time();
echo $t;
$tk=strtotime($t);
echo "//////////";
$pt=$tk;
echo $days;
?>