<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>完整資訊</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
</head>
<style>
	body,input,button,select,textarea{font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	</style>
  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <?php include("nav.php");  ?>
    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
<?php

  
  $id = $_GET["id"];
  $dat="select * from `eatwhat` WHERE `id` = '$id' ";//從contact資料庫中選擇所有的資料表
  $data= mysqli_query($conn,$dat);
  
  
?>
  
        <div class="cover-container">

  <tbody>
   <thead>
<?php
	
    $rs=mysqli_fetch_row($data);
	for($i=1;$i<=mysqli_num_rows($data);$i++){

?>
  


   <table class="table table-dark">
　<tr>
　    <td colspan="2">完整資訊</td>
　</tr>
　<tr>
　    <td>店家名稱</td>
　    <td><?php echo $rs[4]?></td>
　</tr>
<tr>
　    <td>營業時間</td>
　    <td><?php echo $rs[7]?></td>
　</tr>
<tr>
　    <td>電話</td>
　    <td><?php echo $rs[5]?></td>
　</tr>
<tr>
　    <td>地址</td>
　    <td><?php echo $rs[6]?></td>
　</tr>
<tr>
　    <td>簡介</td>
　    <td><?php echo $rs[8]?></td>
　</tr>
<tr>
　    <td>平均消費</td>
　    <td><?php echo $rs[11]?></td>
　</tr>

<tr>
　    <td>商家照片</td>
　  <!--  <td><img src="imageView.php?image_id=<?//php echo $rs[9]; ?>" style="width: 100px; height:auto;"/></td>
    -->
	  <td><img src="picture/<?php echo $rs[9];?>"/></td>
　</tr>
<tr>
　    <td>菜單</td>
　  <!--  <td><img src="imageView.php?image_id=<?//php echo $rs[10]; ?>" style="width: 100px; height:auto;" /></td>
    -->　
	  <td><img src="picture/<?php echo $rs[10];?>"/></td>
</tr>
<tr>
　    <td>更新者</td>
　    <td><?php echo $rs[1]?></td>
　</tr>
<tr>
　    <td>更新時間</td>
　    <td><?php echo $rs[13]?></td>
　</tr>
<tr>
　    <td>評價</td>
<?php
	}
 
   $sql="SELECT * FROM  `shopstar` WHERE `id` =".$id." AND `ch` = 0";
  $result =mysqli_query($conn,$sql);
  $n=0;
  $num=0;
  if ($result->num_rows <= 0){
	  $num=5;
  }else{
  while ($row = $result->fetch_assoc()){
	  $num=$num+$row["star"];
	  $n++;
  }
  $num=$num/$n;
  }
?>
　    <td><a href="star.php?id=<?php echo $id?>"><?php echo number_format($num,1) ?>★</a>　<a href="judge.php?id=<?php echo $id?>">評價</a></td>
　</tr>
</table>
	
	<button class="btn btn-primary btn-xl js-scroll-trigger" onclick="location.href='up1.php?id=<?php echo $id?>'" type="submit">申請更新</button>
	


  </tbody>
</div>

      <div class="overlay"></div>
    </header>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
