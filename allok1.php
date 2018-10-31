<?php
 require_once("conMysql.php");
$dat="select * from `eatwhat` WHERE `id` = 1";//從contact資料庫中選擇所有的資料表
$data= mysqli_query($conn,$dat);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-4.0.0-beta.2/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  	<style>
	body,input,button,select,textarea{
font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;
font-size:108%;
}
	</style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">甲蝦密</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">首頁</a>
                <a class="nav-link" href="#">搜尋</a>
                <a class="nav-link" href="#">商家登入</a>
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <img src="aa.jpg">
          <thead>
                <tr>
                   <th scope="col"></th>
                 </tr>
          </thead>

  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  <table class="table table-dark" >

   <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">店家名稱</th>
      <th scope="col">營業時間</th>
      <th scope="col">電話</th>
      <th scope="col">地址</th>
      <th scope="col">簡介</th>
       <th scope="col">平均消費</th>
    </tr>
  </thead>
  
  <tbody>
    <?php
	$rs=mysqli_fetch_row($data);
	for($i=1;$i<=mysqli_num_rows($data);$i++){
 
  ?>
<table class="table table-dark" width="700" border="1" “style="table-layout:fixed;word-wrap:break-word; word-break;break-all;"”>
  <tr>
   <th scope="row"></th>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[7]?></td>
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>
    <td><?php echo $rs[8]?></td>
    <td><?php echo $rs[11]?></td>
	   
  
    </tr>
   
	</table>
	
	<button class="btn btn-lg btn-primary btn-block" onclick="location.href='up01.php?id=<?php echo $id?>'"  type="submit">updata</button>
	


<?php
}
	
?>

          
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>Design by vvv</p>
            </div>
          </footer>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
  </body>
</html>