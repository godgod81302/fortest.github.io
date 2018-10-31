 
<?php
		require_once("conMysql.php");
  
        $sql = "UPDATE `boss` SET `newnews`='$_GET[neww]' WHERE `id`=1"; /*從eatwhat隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
		echo "<script>alert('成功發布'); location.href = 'boss02.php';</script>";
        

		
	    ?>
		

<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>