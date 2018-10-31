
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>發布最新訊息</title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>
 <?php
  session_start();   //開啟session
  
  require_once("conMysql.php");
   if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	
	$query_RecLoginUpdate = "UPDATE memberdata SET enter=0 WHERE m_username = '{$_SESSION["loginMember"]}'";
	$RecMember = $conn->query($query_RecLoginUpdate);	
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: ../phpmember/index.php");
}
  
  if(!isset($_SESSION['name'])){
  echo  "<script>alert('警告：請先登入'); location.href = '../index.php';</script>";
    //轉址
  exit(); //不執行之後的程式碼
}
?>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="boss01.php"><?php echo $_SESSION['name']?>管理者</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">首頁<span class="sr-only">(current)</span></a>
          </li>
         
        </ul>
       
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
   <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link " href="boss01.php">使用者狀態 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="boss02.php">發布公告</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bossup.php">管理修改</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="bossin.php">管理新增</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="bossjudge.php">管理評價</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="bosshis.php">歷史紀錄</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="?logout=true">登出</a>
            </li>
          </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <a></a><h1>發布訊息</h1>
            <?php
		require_once("conMysql.php");
  
        $sql = "SELECT * FROM `boss` where `id`=1"; /*從eatwhat隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
		while($row =$result->fetch_assoc()){//印出資料
        $newnews=$row['newnews'];
		$timee=$row['timeat'];
		 echo "更新時間:".$timee;
    }

		
	    ?>
		  <form action="ponews.php" method="get">
　       <textarea style="width:700px;height:300px;" name="neww" id="neww"><?php echo $newnews ?>
          </textarea><br>
　         <input type="submit"  style="width:120px;height:40px;font-size:20px;" value="點擊發布"  >
          </form>
           

          
          </div>
        </main>
		
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
