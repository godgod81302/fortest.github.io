<?php

require_once("conMysql.php");
$id = $_GET["id"];

$de="DELETE FROM `shopstar` WHERE `idin`=$id";
$update= mysqli_query($conn,$de);
$url = "bossjudge.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
?>

