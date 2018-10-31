<?php

require_once("conMysql.php");
$id = $_GET["id"];

$up= "UPDATE `shopstar` SET `ch` = 2  WHERE `idin`= $id";
$update= mysqli_query($conn,$up);
$url = "bossjudge.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
?>

