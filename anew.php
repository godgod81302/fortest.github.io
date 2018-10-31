<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>申請新增商家</title>
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

		if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
		 echo "<script type='text/javascript'>alert('尚未登入');location.href = 'index.php';</script>";
		}
  //將圖片儲存於資料庫
 /*if (count($_FILES) > 0 ){
 if(is_uploaded_file($_FILES['shopim']['tmp_name'])){
  $imgshop =addslashes(file_get_contents($_FILES['shopim']['tmp_name']));
  $shopProperties = getimageSize($_FILES['shopim']['tmp_name']);
  $shopsql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$shopProperties['mime']}', '{$imgshop}')";
	 $current_shop = mysqli_query($conn,$shopsql);
	 $shopidsql="SELECT MAX(imageId) FROM `output_images`";
	 $shopdata=mysqli_query($conn,$shopidsql);
	 $shopid=@mysqli_fetch_row($shopdata);
	 echo $shopid[0];
	 $_SESSION["idshop"]=$shopid[0];
	 echo $_SESSION["idshop"];
 }
  if(is_uploaded_file($_FILES['foodim']['tmp_name'])){
  $imgfood =addslashes(file_get_contents($_FILES['foodim']['tmp_name']));
  $foodProperties = getimageSize($_FILES['foodim']['tmp_name']);
  $foodsql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$foodProperties['mime']}', '{$imgfood}')";
 $current_food = mysqli_query($conn,$foodsql);
 $foodidsql="SELECT MAX(imageId) FROM `output_images`";
	 $fooddata=mysqli_query($conn,$foodidsql);
	 $foodid=@mysqli_fetch_row($fooddata);
	 $_SESSION["idfood"]=$foodid[0];
	 echo $_SESSION["idfood"];
	 
  }
  header("Location: doanew.php");
  
 }*/
  
?>
  <main role="main" class="inner cover">
		
            <h1 class="cover-heading"></h1>
            <p class="lead"></p>
            
			 
			 
			 
			 
			 <div class="btn-group">
           <p class="lead"><br>
    <div class="container" >

      <form class="form-signin" enctype="multipart/form-data" name="form1" method="Post" >
        <h2 class="form-signin-heading">請輸入商家資訊</h2>
		
        <label for="account" class="sr-only">申請者</label>
        <h4 class="form-signin-heading">申請者:
		<?php   
		        if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]==""))
				{
					echo "尚未登入";
				}else{
		        $sql="SELECT * FROM memberdata WHERE m_username = '{$_SESSION["loginMember"]}'";
				$RecMember = $conn->query($sql);	
				$row_RecMember=$RecMember->fetch_assoc();
				echo $row_RecMember["m_name"];}
		?>
		</h4>
     
        <label for="shopname" class="sr-only">商店店名</label>
        <input type="text" name="shop" id="inputshop" class="btn" placeholder="請輸入店名" required autofocus>
        <br><br><label for="phone" class="sr-only">電話</label>
        <input type="text" name="fon" id="inputfon" class="btn" placeholder="請輸入電話" required autofocus>
        
        <label for="address" class="sr-only">地址</label>
        <br><br><input type="text" name="adds" id="inputadds" class="btn" placeholder="請輸入地址" required autofocus>
        <label for="time" class="sr-only">營業時間</label>
        <br><br><input type="text" name="tim" id="inputtim" class="btn" placeholder="請輸入營業時間" required autofocus>

        <label for="allth" class="sr-only">簡介</label>
        <br><br><input type="text" name="allth" id="inputallth" class="btn" placeholder="請輸入簡介" required autofocus>
        <label for="dollar" class="sr-only">平均消費</label>
        <br><br><input type="text" name="dollar" id="inputdollar" class="btn" placeholder="請輸入平均消費" required autofocus>
        <br><br>
        上傳商家圖片:
        <input name="shopim" id="shopim" type="file" class="inputFile" />  <br><br>
        上傳菜單圖片:
        <input name="foodim" id="foodim" type="file" class="inputFile" />  
       <br>
       <br>
        請選擇店家類別:
       <select name = "type" onchange="update()" >
 <option value = 1 >吃 </option>
  <option value = 2 >喝 </option>
   <option value = 3 >玩 </option> 
</select>
<script>
<input type=text name="type1" id="inputtype" class="form-control" readonly>
function update() {
if (document.all.inputtype.selectedIndex == 1)
 document.all.type1.value = 1 ;
 if (document.all.inputtype.selectedIndex == 2)
 document.all.type1.value = 2 ;
 if (document.all.inputtype.selectedIndex == 3)
 document.all.type1.value = 3 ;
 }
 </script>  
      


      
       
       <button class="btn btn-lg btn-primary btn-block" name="Submit" type="submit"  >register</button>
          
                
      </form>
  <?php

 if (isset($_POST['Submit'])) {
	 
     $_SESSION["ac"] = $row_RecMember["m_name"];
	 $_SESSION["type"] = $_POST['type'];
	 $_SESSION["shop"] = $_POST['shop'];
	 $_SESSION["fon"] = $_POST['fon'];
	 $_SESSION["adds"] = $_POST['adds'];
	 $_SESSION["tim"] = $_POST['tim'];
	 $_SESSION["allth"] = $_POST['allth'];
	 $_SESSION["dollar"] = $_POST['dollar'];
	
	 $checksh=0;
	 $checkfo=0;
	 if ($_FILES["shopim"]["error"]==0){
		if (move_uploaded_file($_FILES["shopim"]["tmp_name"],"picture/".$_FILES["shopim"]["name"])){
			$_SESSION["idshop"]=$_FILES["shopim"]["name"];
			
		} 
	 }
	 else {echo "圖片上傳失敗";
	       $checksh++;
	 }
	 
	 if ($_FILES["foodim"]["error"]==0 ){
		if (move_uploaded_file($_FILES["foodim"]["tmp_name"],"picture/".$_FILES["foodim"]["name"])){
			$_SESSION["idfood"]=$_FILES["foodim"]["name"];
		
		} 
	 }
	 else {echo "菜單上傳失敗";
	       $checkfo++;
     }
	 if ( $checksh==0 && $checkfo==0 )
	    {
			echo " <script>location.href = 'doanew.php';</script>";;
		}
	 else {
		 $checksh=0;
		 $checkfo=0;
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
