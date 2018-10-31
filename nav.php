
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="">EAT WHAT</a>
        </li>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="http://120.105.129.135/eat/eat/">首頁</a>
        </li>

	    <?php 
		session_start();
		require_once("conMysql.php");
		if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
		?>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="phpmember">登入會員</a>
        </li>
		
		<?php } else {?>
		<li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="phpmember">會員中心</a>
        </li>
		<?php } ?>
		
		
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="fastOK.php">隨機選餐</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="allchoice.php">完整搜尋</a>
        </li>
		
		
	      <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="gps.php">地圖搜尋</a>
        </li>	
		
		
		
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="anew.php">新增商家</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="index.php#contact">聯絡</a>
        </li>
      </ul>
    </nav>

