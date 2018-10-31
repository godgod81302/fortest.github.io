<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>撰寫評價</title>
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
?>
  <main role="main" class="inner cover">
		
            <h1 class="cover-heading"></h1>
            <p class="lead"></p>

			 <div class="btn-group">
           <p class="lead"><br>
    <div class="container" >
		  
	  
	  <form class="form-signin" enctype="multipart/form-data" name="form1" method="Post" >
        
		

		
		<h2 class="form-signin-heading">撰寫評價</h2>
        <label  class="btn btn-info">
            <input  type="radio" name="options" value="1">１★
        </label>
        <label  class="btn btn-info">
            <input  type="radio" name="options" value="2">２★
        </label>
        <label  class="btn btn-info">
            <input  type="radio" name="options" value="3">３★
        </label>
		<label  class="btn btn-info">
            <input  type="radio" name="options" value="4">４★
        </label>
		<label  class="btn btn-info">
            <input  type="radio" name="options" value="5">５★
        </label>

        <label for="allth" class="sr-only">撰寫評論</label>
		 
        <br><br>
		<textarea name="content" id="content" rows="5" cols="35" class="span10" placeholder="請輸入評論" required autofocus></textarea>
		<br><br> 
       
       <button class="btn btn-lg btn-primary btn-block" name="Submit" type="submit"  >給評價</button>
          
                
      </form>
<?php
require_once("conMysql.php");

 if (isset($_POST['Submit'])){
	 
	 $str=$_POST['content'];
	 $r=$_POST['options'];
	 
	 if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql="INSERT INTO `shopstar` (`idin`,`star`,`text`,`id`,`ch`) VALUES ('','".$r."','".$str."','".$id."','0')";
$k='allok.php?id='.$id;
echo "<script>alert('提示：已收到評價'); location.href = '$k';</script>";



 if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 }



 
?>
    </div> <!-- /container -->
            </p> 
</div>
          
		  
		  
		  </main>
     
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
