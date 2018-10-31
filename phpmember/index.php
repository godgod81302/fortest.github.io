

<?php
require_once("connMysql.php");
session_start();

//檢查是否經過登入，若有登入則重新導向
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")){
	//若帳號等級為 member 則導向會員中心
	if($_SESSION["memberLevel"]=="member"){
		header("Location: member_center.php");
	//否則則導向管理中心
	}else{
		header("Location: ../3/boss01.php");	
	}
}


//執行會員登入
if(isset($_POST["username"]) && isset($_POST["passwd"])){
	//繫結登入會員資料
	$query_RecLogin = "SELECT m_username, m_passwd, m_level FROM memberdata WHERE m_username=?";
	$stmt=$db_link->prepare($query_RecLogin);
	$stmt->bind_param("s", $_POST["username"]);
	$stmt->execute();
	//取出帳號密碼的值綁定結果
	$stmt->bind_result($username, $passwd, $level);	
	$stmt->fetch();
	$stmt->close();
	//比對密碼，若登入成功則呈現登入狀態
	if(password_verify($_POST["passwd"],$passwd)){
		//計算登入次數及更新登入時間
		$query_RecLoginUpdate = "UPDATE memberdata SET m_login=m_login+1, m_logintime=NOW() WHERE m_username=?";
		$stmt=$db_link->prepare($query_RecLoginUpdate);
	    $stmt->bind_param("s", $username);
	    $stmt->execute();	
	    $stmt->close();
		//設定登入者的名稱及等級
		$_SESSION["loginMember"]=$username;
		$_SESSION["memberLevel"]=$level;
		//使用Cookie記錄登入資料
		if(isset($_POST["rememberme"])&&($_POST["rememberme"]=="true")){
			setcookie("remUser", $_POST["username"], time()+365*24*60);
			setcookie("remPass", $_POST["passwd"], time()+365*24*60);
		}else{
			if(isset($_COOKIE["remUser"])){
				setcookie("remUser", $_POST["username"], time()-100);
				setcookie("remPass", $_POST["passwd"], time()-100);
			}
		}
		//若帳號等級為 member 則導向會員中心
		if($_SESSION["memberLevel"]=="member"){
			
			
			
			$na=$_SESSION["loginMember"];
            $a="a1234";
$inhis="SELECT `enter` FROM `memberdata` WHERE `m_username`='$na' ";
$result = mysqli_query($db_link,$inhis);
$row = @mysqli_fetch_row($result);
$ttt=$row[0];
			 //echo "<script>confirm('提示：现在一共要订购".$ttt."， 多余 是否继续？');</script>";
			
			if ($ttt==1){
				echo "<script type='text/javascript'>alert('警告：請檢視上次登入時間，重複登入或是忘記登出');location.href = 'member_center.php';</script>";
	
			}
			
			
		$query_RecLoginUpdate = "UPDATE memberdata SET enter=1 WHERE m_username=?";
		$stmt=$db_link->prepare($query_RecLoginUpdate);
	    $stmt->bind_param("s", $username);
	    $stmt->execute();	
	    $stmt->close();
			
			
			
		  echo "<script type='text/javascript'>alert('登入成功');location.href = 'member_center.php';</script>";
	
		  
		  
		//否則則導向管理中心
		}else{
			$_SESSION['name']=$_SESSION['loginMember'];
			header("Location: ../3/boss01.php");	
		}
	}
	
	else{
            
           if(isset($_SESSION['NONO'])!=1) {
			   
			   $_SESSION['NONO']=1;
		   }
		   
		   
		
	        $_SESSION['fail']=$_SESSION['NONO']++;
			$oo=$_SESSION['fail'];
			
			
			if($_SESSION['fail']>3){
				$_SESSION['NONO']=1;
				$_SESSION['fail']=1;
				$oo=$_SESSION['fail'];
				$message = $oo;
				echo "<script>alert('警告：帳號或密碼錯誤太多次'); location.href = '../index.php';</script>";
			}
			
	    $message = $oo;
        
	    
		echo "<script>alert('警告：帳號或密碼錯誤'); ;</script>";
		
	}
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>網站會員系統</title>

<!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
	<link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<link href="../css/stylish-portfolio.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
	body,input,button,select,textarea{
font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	</style>
	<style>
	 .form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
 }
}.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}}
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



          <?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
          <p align="center"> <div class="errDiv"> 登入帳號或密碼錯誤！</div>
          <?php }?>
         
		
          <form name="form1" method="post" action="" class="form-signin">
            <h2 class="form-signin-heading">登入會員系統</h2>
		
			<label for="inputEmail" class="sr-only">Account</label>
            <input name="username" type="text" class="form-control" id="username" value="<?php if(isset($_COOKIE["remUser"]) && ($_COOKIE["remUser"]!="")) echo $_COOKIE["remUser"];?>" placeholder="Account" required autofocus>
           
		 <br>
            <label for="inputPassword" class="sr-only">Password</label>
              <input name="passwd" type="password" class="form-control" id="passwd" value="<?php if(isset($_COOKIE["remPass"]) && ($_COOKIE["remPass"]!="")) echo $_COOKIE["remPass"];?>" placeholder="Password" required>
          
            <p>
              <input name="rememberme" type="checkbox" id="rememberme" value="true" checked>
記住我的帳號密碼。</p>
          
              <button type="submit" name="button" class="btn btn-lg btn-primary btn-block" id="button" >登入</button>
           
            </form><br>
			
			
			<hr>
	
         <a href="admin_passmail.php">忘記密碼，補寄密碼信。</a>
          <hr size="1" />
         
		  
         
          <a href="member_join.php">馬上申請會員</a>

 

 		  

      </div>
      <div class="overlay"></div>

    </header>	
	

 		

 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	
	
	
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/stylish-portfolio.min.js"></script>

</body>
</html>
