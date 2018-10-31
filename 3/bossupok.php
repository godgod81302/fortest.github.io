<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>登入狀況</title>
</head>

<body>
<?php
 //資料庫主機設定
 	 require_once("conMysql.php");
// Try to find a match in the database
$id = $_GET["id"];
$sql="SELECT * FROM `eatup` WHERE `idup`=$id";
$result =$conn->query($sql);
$row = @mysqli_fetch_row($result);
  $upid=$row[0];
  $upac=$row[1];
  $uppass=$row[2];
  $uptype=$row[3];
  $upshop=$row[4];
  $upfon=$row[5];
  $upadds=$row[6];
  $uptim=$row[7];
  $upallth=$row[8];
  $shopid=$row[9];
  $foodid=$row[10];
  $updollar=$row[11];
  
  
  $s="SELECT * FROM `eatwhat` WHERE `id` = '$upid'";
  $s1=mysqli_query($conn,$s);
  $ss=@mysqli_fetch_row($s1);
  unlink("../picture/".$ss[9]);
  unlink("../picture/".$ss[10]);
  
  $ssshop="$upid"."01.jpg";
  $ssfood="$upid"."02.jpg";
  rename("../picture/".$shopid,"../picture/".$ssshop);
  rename("../picture/".$foodid,"../picture/".$ssfood);

  
$upwhat = "UPDATE `eatwhat` SET `ac`='$upac',`pass`='$uppass',`type`='$uptype',`shop`='$upshop',`fon`='$upfon',`adds`='$upadds',`tim`='$uptim',`allth`='$upallth',`shopim`='$ssshop',`foodim`='$ssfood',`dollar`='$updollar',`ok`='2'  WHERE `id`='$upid'";
if($conn->query($upwhat)===true){
     
 	}
	
$inhis="INSERT INTO `his` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`, `idhis`) VALUES ('','".$upac."','".$uppass."',$uptype,'".$upshop."','".$upfon."','".$upadds."','".$uptim."','".$upallth."','".$shopid."','".$foodid."',$updollar,'2','')";
 	if($conn->query($inhis)===true){
    
 	}

$deup="DELETE FROM `eatup` WHERE `idup`=$id";
 	if($conn->query($deup)===true){
 		
 	}
     $url = "bossup.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
   
               
?>
</body>
</html>