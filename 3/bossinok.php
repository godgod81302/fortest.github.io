<?php
  	 require_once("conMysql.php");
	 
	 
	 
  $id = $_GET["id"];
   $sql = "SELECT * FROM `eatin` WHERE `idin`=$id";
    $result =$conn->query($sql);
 	$row = @mysqli_fetch_row($result);
	$inac=$row[1];
    $inpass=$row[2];
    $intype=$row[3];
    $inshop=$row[4];
    $infon=$row[5];
    $inadds=$row[6];
    $intim=$row[7];
    $inallth=$row[8];
    $shopid=$row[9];
    $foodid=$row[10];
    $indollar=$row[11];
    
	
	
	$inwhat="INSERT INTO `eatwhat` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`) VALUES (NULL,'".$inac."','".$inpass."',$intype,'".$inshop."','".$infon."','".$inadds."','".$intim."','".$inallth."','".$shopid."','".$foodid."',$indollar,'3')";
	if($conn->query($inwhat)===true){
	  $s="SELECT MAX(id) FROM `eatwhat`";
	  $s1=mysqli_query($conn,$s);
	  $ss=@mysqli_fetch_row($s1);
	  $ssshop="$ss[0]"."01.jpg";
	  $ssfood="$ss[0]"."02.jpg";
      rename("../picture/".$shopid,"../picture/".$ssshop);
	  rename("../picture/".$foodid,"../picture/".$ssfood);
	  
	  $upwhat="UPDATE `eatwhat` SET `shopim`='$ssshop',`foodim`='$ssfood' WHERE `id`='$ss[0]'";
	  if($conn->query($upwhat)===true){
      }
 	}
 	$inhis="INSERT INTO `his` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`, `idhis`) VALUES ('','".$inac."','".$inpass."',$intype,'".$inshop."','".$infon."','".$inadds."','".$intim."','".$inallth."','".$shopid."','".$foodid."',$indollar,'3','')";
 	if($conn->query($inhis)===true){
 	}
 	$dein="DELETE FROM `eatin` WHERE `idin`=$id";
 	if($conn->query($dein)===true){
 		
 	}
	
	$url = "bossin.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
    
?>