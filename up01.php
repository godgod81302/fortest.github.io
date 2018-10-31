
<?php
session_start();
require_once("conMysql.php");




 if (count($_FILES) > 0 ){
 if(is_uploaded_file($_FILES['shopim']['tmp_name'])){
  $imgshop =addslashes(file_get_contents($_FILES['shopim']['tmp_name']));
  $shopProperties = getimageSize($_FILES['shopim']['tmp_name']);
  $shopsql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$shopProperties['mime']}', '{$imgshop}')";
	 $current_shop = mysqli_query($conn,$shopsql);
	 $shopidsql="SELECT MAX(imageId) FROM `output_images`";
	 $shopdata=mysqli_query($conn,$shopidsql);
	 $shopid=@mysqli_fetch_row($shopdata);
	 $_SESSION["idsup"]=$shopid[0];
	 
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
	 $_SESSION["idfup"]=$foodid[0];
	 
  }
 }


$id = $_GET['id'];
$data=mysqli_query($conn,"select * from `eatwhat` WHERE `id` =$id");
for($i=1;$i<=mysqli_num_rows($data);$i++)
$rs=mysqli_fetch_row($data);


	







?>
 
  


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>第七組</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
           


  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">甲蝦蜜</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">首頁</a>
                <a class="nav-link" href="#">快速選擇</a>
                <a class="nav-link" href="#">搜尋</a>
				<a class="nav-link" href="#">商家登入</a>
              </nav>
            </div>
            
          </header>

          <main role="main" class="inner cover">
		
            <h1 class="cover-heading"></h1>
            <p class="lead"></p>
            
			 <div class="btn-group">
           <p class="lead"><br>
         
   
         
     
        

      

        
    <div class="container" >

      <form class="form-signin" name="form1" method="Post" action="insert.php">
        <h2 class="form-signin-heading">請輸入商家資訊</h2>
        

        <label for="shopname" class="sr-only">商店店名</label><?php echo $rs[4]?>
        <input type="text" name="shop" id="inputshop" class="form-control" placeholder='<?php echo $rs[4]?>' required autofocus>
        
		<label for="phone" class="sr-only">電話</label>
        <input type="text" name="fon" id="inputfon" class="form-control" placeholder='<?php echo $rs[5]?>' required autofocus>
        
        <label for="address" class="sr-only">地址</label>
        <input type="text" name="adds" id="inputadds" class="form-control" placeholder='<?php echo $rs[6]?>' required autofocus>
        <label for="time" class="sr-only">營業時間</label>
        <input type="text" name="tim" id="inputtim" class="form-control" placeholder='<?php echo $rs[7]?>' required autofocus>

        <label for="allth" class="sr-only">簡介</label>
        <input type="text" name="allth" id="inputallth" class="form-control" placeholder='<?php echo $rs[8]?>' required autofocus>
        <label for="dollar" class="sr-only">平均消費</label>
        <input type="text" name="dollar" id="inputdollar" class="form-control" placeholder='<?php echo $rs[11]?>' required autofocus>



        請輸入商家圖片:
         <input name="shopim"id="shopim" type="file" class="inputFile" />  <br><br>
        請輸入商家圖片:
        <input name="foodim" id="foodim" type="file" class="inputFile" /> <br><br>
		   請點擊下方按鈕選擇商家類型
<!--
   <div class="dropdown">
	    <button class="btn btn-secondary dropdown-toggle" name="type" id="inputtype" class="form-control"  type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">吃喝玩類別</button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">吃</a>
    <a class="dropdown-item" href="#">喝</a>
    <a class="dropdown-item" href="#">玩</a>
   </div>
   </div>		 -->
 

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
 
}</script>

      




      
   
       <button class="btn btn-lg btn-primary btn-block" onclick="form1.action='up02.php';form1.submit();"  type="submit">updata</button>
          
                
      </form>

    </div> <!-- /container -->
            </p>


 
    
  
</div>
          </main>

          <footer class="mastfoot">

          </footer>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

  </body>
</html>