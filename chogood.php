
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





  $kchoice=$_REQUEST['kchoice'];

  if (empty($_REQUEST['check'])){
      $sql="SELECT * FROM  `eatwhat` ";
}else{
    $choice=$_REQUEST['check'];
    $sql="SELECT * FROM  `eatwhat` WHERE ";
    for ($i=0 ; $i<count($choice) ; $i++)
       { if ($i==0)
            {
              $sql=$sql."`type` = $choice[$i] ";
            }
          else {
            $sql=$sql."OR `type` = $choice[$i] ";
          }
       }

  }

   
  //if ( $kchoice!='')
    // {$sql="SELECT * FROM eatwhat WHERE fon LIKE %$kchoice%";}
   //else {$sql="SELECT * FROM  eatwhat";}
   if ($kchoice !='')
   { if (empty($_REQUEST['check'])){
    $sql=$sql."WHERE `fon` LIKE '%$kchoice%' OR `tim` LIKE '%$kchoice%' OR `allth` LIKE '%$kchoice%' OR `shop` LIKE '%$kchoice%'  OR `ac` LIKE '%$kchoice%'  OR `dollar` LIKE '%$kchoice%'";
   }else{
	   
   $sql=$sql."AND (`fon` LIKE '%$kchoice%' OR `tim` LIKE '%$kchoice%' OR `allth` LIKE '%$kchoice%' OR `shop` LIKE '%$kchoice%'  OR `ac` LIKE '%$kchoice%'  OR `dollar` LIKE '%$kchoice%'
   )";}
 }

   

  $result =mysqli_query($conn,$sql);
  
 
    // 输出数据
  
  
  /*$total_fields=mysqli_num_fields($result);
  $total_records=mysqli_num_rows($result);*/
  ?>


 

      <div class="site-wrapper-inner">

        <div class="cover-container">


      
			 
			  
		
	<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">店家名稱</th>
      <th scope="col">營業時間</th>
      <th scope="col">內容</th>
      <th scope="col">地圖</th>
      <th scope="col">詳細資訊</th>
    </tr>
  </thead>

  <tbody>
    
     <?php  if ($result->num_rows <= 0) { ?>
            <tr>
              <th></th>
              <th><?php echo "無"; ?></th>
              <th><?php echo "無"; ?></th>
              <th><?php echo "無"; ?></th>
              <th><?php echo "無"; ?></th>
              <th><?php echo "無"; ?></th>
            </tr>
            <?php } else{
            while ($row = $result->fetch_assoc()) {  ?>
            <tr>
              <th></th>
              <th><?php echo $row["shop"]; ?></th>
              <th><?php echo $row["tim"]; ?></th>
              <th><?php echo $row["allth"]; ?></th>
              <th><a href=http://maps.google.com.tw/maps?q=<?php echo $row["adds"]; ?>> 地圖 </a></th>
              <th><a href=allok.php?id=<?php echo $row["id"]?>>詳細資訊</a></th>
            </tr>
            <?php } } ?>
  </tbody>
   </table>



	

	
		
            
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