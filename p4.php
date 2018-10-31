
<?php
require_once("conMysql.php");
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
        
        <label for="account" class="sr-only">帳號</label>
        <input type="text" name="ac" id="inputac" class="form-control" placeholder="請輸入帳號" required autofocus>
        
        <label for="Password" class="sr-only">密碼</label>
        <input type="text" name="pass" id="inputPass" class="form-control" placeholder="請輸入密碼" required autofocus>
      
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
        <label for="shopname" class="sr-only">商店店名</label>
        <input type="text" name="shop" id="inputshop" class="form-control" placeholder="請輸入店名" required autofocus>
        <label for="phone" class="sr-only">電話</label>
        <input type="text" name="fon" id="inputfon" class="form-control" placeholder="請輸入電話" required autofocus>
        
        <label for="address" class="sr-only">地址</label>
        <input type="text" name="adds" id="inputadds" class="form-control" placeholder="請輸入地址" required autofocus>
        <label for="time" class="sr-only">營業時間</label>
        <input type="text" name="tim" id="inputtim" class="form-control" placeholder="請輸入營業時間" required autofocus>

        <label for="allth" class="sr-only">簡介</label>
        <input type="text" name="allth" id="inputallth" class="form-control" placeholder="請輸入簡介" required autofocus>
        <label for="dollar" class="sr-only">平均消費</label>
        <input type="text" name="dollar" id="inputdollar" class="form-control" placeholder="請輸入平均消費" required autofocus>
        
        請輸入商家圖片:
        <input name="shopim "id="shopim" type="file"   data-bfi-disabled>  
        <script type="text/javascript">  
        $('input[type=file]').bootstrapFileInput();  
        </script> <br>
        請輸入商家圖片:
        <input name="foodim "id="foodim" type="file"   data-bfi-disabled>  
        <script type="text/javascript">  
        $('input[type=file]').bootstrapFileInput();  
        </script> <br>
  
        
          }
		
      


      
       
       <button class="btn btn-lg btn-primary btn-block" onclick="form1.action='insert.php';form1.submit();"  type="submit">register</button>
          
                
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
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>