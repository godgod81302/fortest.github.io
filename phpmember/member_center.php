<?php
require_once("connMysql.php");
session_start();
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: index.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	
	$query_RecLoginUpdate = "UPDATE memberdata SET enter=0 WHERE m_username = '{$_SESSION["loginMember"]}'";
	$RecMember = $db_link->query($query_RecLoginUpdate);	
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: index.php");
}
//繫結登入會員資料
$query_RecMember = "SELECT * FROM memberdata WHERE m_username = '{$_SESSION["loginMember"]}'";
$RecMember = $db_link->query($query_RecMember);	
$row_RecMember=$RecMember->fetch_assoc();





?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>會員資料</title>

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

<body>

  <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>

	
	
	
	
	
	
	
	<?php include("nav.php");  ?>
	
	
	
    <!-- Header -->
    <header class="masthead d-flex">
     <table width="500" border="0" align="center"  cellspacing="0">
		<tr>
    <td class=""><table width="100%" >
      <tr valign="top">
       <form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
          <p class="title">基本資料</p>
          <div class="dataDiv">
            <hr size="1" />
            <p><strong>使用帳號</strong>：<?php echo $row_RecMember["m_username"];?></p>
            <p><strong>真實姓名</strong>：<?php echo $row_RecMember["m_name"];?></p>
            <p><strong>性　　別</strong>：<?php echo $row_RecMember["m_sex"];?>
            <p><strong>生　　日</strong>：<?php echo $row_RecMember["m_birthday"];?>
            <p><strong>電子郵件</strong>：<?php echo $row_RecMember["m_email"];?>
            <p><strong>個人網頁</strong>：<?php echo $row_RecMember["m_url"];?>

            <p><strong>電　　話</strong>：<?php echo $row_RecMember["m_phone"];?>
            <p><strong>住　　址</strong>：<?php echo $row_RecMember["m_address"];?>

          </div>
          <hr size="1" />
          <p align="center">
            <p align="center"><a href="member_update.php">修改資料</a> | <a href="?logout=true">登出系統</a></p>
          </p>
        </form>
       
      </tr>
    </table></td>
  </tr>
	 </table>
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
<?php
	$db_link->close();
?>