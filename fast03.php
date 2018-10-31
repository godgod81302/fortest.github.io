
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EAT WHAT</title>
   
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
	body,input,button,select,textarea{
font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	</style>
  <body id="page-top" >
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <?php include("nav.php");  ?>

    <!-- Header -->

    <header class="masthead d-flex" >
      <div class="container text-center my-auto">
	 
       <?php

  require_once("conMysql.php");
       $sql = "SELECT * FROM `eatwhat` where `type` = 3 ORDER BY RAND() LIMIT 1"; /*從eatwhat TYPE1中隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
        $rs = @mysqli_fetch_row($result); /*顯示出隨機抓到的內容*/
  ?>

  
  <h3></h3>
    
          <main role="main" class="inner cover">
		  
            <h1 class="cover-heading"></h1>
            <p class="lead"></p>
            
			 <div class="btn-group">

  <div class="cover-container">
   <tbody>
   <table class="table table-dark">
　<tr>
　    <td colspan="2">快速選取</td>
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
　    <td>地址</td>
　    <td><a href=http://maps.google.com.tw/maps?q=<?php echo $rs[6]; ?>> 地圖 </a> </td>
　</tr>
<tr>
　    <td>平均消費</td>
　    <td><?php echo $rs[11]?></td>
　</tr>
<tr>
　    <td>詳細資料</td>
　    <td><a href=allok.php?id=<?php echo $rs[0]?>>詳細資訊</td>
　</tr>


</table>
<button class="btn btn-primary btn-xl js-scroll-trigger" onclick="location.href='fastOK.php'"  type="submit">回上一頁</button>
	
	

  
</div>
          </main>
</tbody>
 
	  </div></div>
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