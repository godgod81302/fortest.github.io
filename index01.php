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
      <?php
		require_once("conMysql.php");
  
        $sql = "SELECT * FROM `boss` where `id`=1"; /*從eatwhat隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
		while($row =$result->fetch_assoc()){//印出資料
        $newnews=$row['newnews'];
    }

		
	    ?>
<style>
	body,input,button,select,textarea{
font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	</style>
  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/">EAT WHAT</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/">首頁</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/fastOK.php">隨機選餐</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/allchoice.php">完整搜尋</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/anew.php">新增商家</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://220.133.173.160/eat/#contact">聯絡我們</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">呷蝦蜜</h1>
        <h3 class="mb-5">
          <p>屬於聯大生最好的選餐系統!</p>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">開始使用</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>甲蝦蜜-最新消息</h2>
			<h3><?php echo $newnews?></h3>
            <p class="lead mb-5">(本系統設計與製作來至
              <a href="https://www.csie.nuu.edu.tw/">國立聯合大學資訊工程系</a>405<a href="3/enterall.php">實驗室)</p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">我們提供...</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">WHAT WE OFFER</h3>
          <h2 class="mb-5">我們提供..</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>RWD</strong>
            </h4>
            <p class="text-faded mb-0">符合各種平台的響應式網頁</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>Shop For free</strong>
            </h4>
            <p class="text-faded mb-0">商家註冊與更新維護均免費</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-like"></i>
            </span>
            <h4>
              <strong>選餐</strong>
            </h4>
            <p class="text-faded mb-0">擁有快速選餐
              <i class="fa fa-heart"></i>
              和完整搜尋功能!</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>
              <strong>即時回復</strong>
            </h4>
            <p class="text-faded mb-0">任何問題均會轉送至臉書並即時由工程師回復</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">不再猶豫不決</h2>
		<h1 class="mx-auto mb-5">馬上知道要吃什麼了</h1>
        <a class="btn btn-primary btn-xl" href="http://220.133.173.160/eat/fastOK.php">快速選餐</a>
		<p></p>
		<a class="btn btn-primary btn-xl" href="http://220.133.173.160/eat/allchoice.php">完整搜尋</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">System</h3>
          <h2 class="mb-5">we use</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h3>商家資訊</h3>
                  <p class="mb-0">店家可註冊、更新，系統也會定時更新商家資訊</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h3>快速選餐</h3>
                  <p class="mb-0">不須再猶豫想要吃什麼，由系統幫您快速選擇</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h3>完整搜尋</h3>
                  <p class="mb-0">自訂搜尋，給您最完整的選餐資訊</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h3>問題回復</h3>
                  <p class="mb-0">您寶貴的意見都會是我們往前的動力</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->


    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1440.3568027753777!2d120.78838351804848!3d24.538355330903656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf461f10843be0101!2z5ZyL56uL6IGv5ZCI5aSn5a24IOizh-ioiuW3peeoi-WtuOezuw!5e0!3m2!1szh-TW!2stw!4v1513837688676"></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1440.3568027753777!2d120.78838351804848!3d24.538355330903656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf461f10843be0101!2z5ZyL56uL6IGv5ZCI5aSn5a24IOizh-ioiuW3peeoi-WtuOezuw!5e0!3m2!1szh-TW!2stw!4v1513837688676"></a>
      </small>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/CSIEofNUU">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; NUU-CSIE LAB405 </p>
      </div>
    </footer>

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
