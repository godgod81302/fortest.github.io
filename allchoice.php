
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
  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <?php include("nav.php");  ?>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">完整搜尋</h1>
        <h3 class="mb-1">
           <div class="form-group row">
          
		  <div class="col-4 col-md-4">
           <div class="form-check">
              <input class="form-check-input","inner" name="check[]" type="checkbox" value="1"><a>吃</a>
            </div>
          </div>
		


          
          <div class="col-4 col-md-4">
            <div class="form-check">
              <input class="form-check-input" name="check[]" type="checkbox" value="2"><a>喝</a>
            </div>
          </div>


          <div class="col-4 col-md-4">
            <div class="form-check">
              <input class="form-check-input" name="check[]" type="checkbox" value="3"><a>玩</a>
            </div>
          </div>
		  
       
        </h3>
         <form action="chogood.php" method="get">

		<div class="container col-md-7 col-md-offset-3">
       
	   <div class="form-row">
         <div class="input-group">
            <span class="input-group-addon" id="b">關鍵字</span>
            <input type="text" class="form-control" name="kchoice" id="input" aria-describedby="b">
         <div class="col-6 col-md-4">
          <button type="submit" class="btn btn-primary">搜尋</button>  
		 </div>
		 </div>
        
		
		
		</div>
		 
		</div>
		
		
		
       </form>
	  
    </div>
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