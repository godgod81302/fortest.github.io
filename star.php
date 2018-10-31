
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
       <?php


  $id=$_GET['id'];

    $sql="SELECT * FROM  `shopstar` WHERE `id` =".$id." AND ( `ch` = 0 OR `ch` = 2 )";

  $result =mysqli_query($conn,$sql);
  

  ?>


 

      <div class="site-wrapper-inner">

        <div class="cover-container">


      
			 
			  
		
	<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">星星</th>
      <th scope="col">評價</th>
	  <th scope="col">檢舉</th> 
    </tr>
  </thead>

  <tbody>
    
     <?php $b=0;  
	       
	     if ($result->num_rows <= 0) { ?>
            <tr>
              <th></th>
              <th><?php echo "無"; ?></th>
              <th><?php echo "無"; ?></th>
			  <th><?php echo "無"; ?></th>
            </tr>
            <?php } else{
            while ($row = $result->fetch_assoc()) {
			
				?>
            <tr>
              <th></th>
              <th><?php echo $row["star"]; ?>★　</th>
              <th><?php echo $row["text"]; ?></th>
			  
			  <?php 
                     if ($row["ch"]==0)
					 {						 
			  ?>
			  <th><input type="button"  value="檢舉" class="btn" onclick="location.href='checkch.php?idin=<?php echo $row["idin"]?>&id=<?php echo $id?>'"/> </th>
			  <?php  } else {?>
			  <th> </th>
			  <?php } ?>
            </tr>
				<?php  } } ?>
  </tbody>
   </table>
  


			
					 

<button class="btn btn-primary btn-xl js-scroll-trigger" onclick="location.href='allok.php?id=<?php echo $id?>'" type="submit">回前頁</button>
    
      </div>

            </p>
          </main>
 <div>
       

        </div>

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