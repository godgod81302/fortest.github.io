<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>登入狀況</title>
</head>

<body><?php
	//資料庫主機設定
	 require_once("conMysql.php");
// Try to find a match in the database
$id = $_POST['id01'];
$password = $_POST['password'];

mysqli_select_db($conn,"keyy");

$sql = "SELECT * FROM keyy WHERE acco='$id'";



$RS = mysqli_query($conn,$sql);
	
	
	if ($Fields=mysqli_fetch_array($RS))
 {
          //驗證會員帳號存在
     if ( $Fields["acco"]==$id )
		
		 
        { if ($Fields["passw"]==$password )
		     {
				/* $Fields["passw"]==$password  */
				 $name =$Fields["name"];
				
				 session_start();  
                $_SESSION['name']=$name; 
				 
				 $url =" http://127.0.0.1/eat/eat/3/boss01.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
			 
			 }
				
               
		 else { echo "<script>alert('警告：帳號或密碼錯誤'); location.href = 'http://127.0.0.1/eat/eat/3/enterall.php';</script>";}
             }
 }
	else {  echo "<script>alert('警告：帳號或密碼錯誤'); location.href = 'http://127.0.0.1/eat/eat/3/enterall.php';</script>";}
	
	/*

 $sql_insert = "INSERT INTO book   (id,passw,name,idcard5,birth,high,weight) VALUES ('$id','$passw','$name','$idcard5','$birth','$high','$weight')";*/
/*

    echo $_REQUEST['number']."<br>";
    echo $_REQUEST['name']."<br>";
    echo $_REQUEST['junior']."<br>";
    echo $_REQUEST['wish']."<br>";
    echo "-----------------------<br>";



  $sql_query = "select * from book";
  $result = mysqli_query($conn,$sql_query)  ;
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
  while($row = mysqli_fetch_array($result))
  {
   echo $row['number']."<br>";
   echo $row['name']."<br>";
   echo $row['junior']."<br>";
   echo $row['wish']."<br><br>"; 
  }*/
?>
</body>
</html>