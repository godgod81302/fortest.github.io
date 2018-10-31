<?php
 require_once("conMysql.php");


if(isset($_GET['image_id'])) {
$sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" . $_GET['image_id'];
$result = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_BOTH);



header("Content-type: " . $row["imageType"]);
echo $row["imageData"];
}

?>