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
mysqli_select_db($conn,"eatwhat");

$sql = "UPDATE eatwhat SET ok = 3  WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$url = "boss01.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
    
     
               
?>
</body>
</html>