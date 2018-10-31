<?php


require_once("conMysql.php");


        echo "BANG";
   
        
        $sql = "SELECT * FROM `eatwhat` where `type` = 2 ORDER BY RAND() LIMIT 1"; /*從eatwhat TYPE1中隨機抓取一個*/
        $result = mysqli_query($conn,$sql);
        while($row = @mysqli_fetch_row($result))  /*顯示出隨機抓到的內容*/
        {
                 echo "編號:$row[0]  種類：$row[4] 店名 :$row[5] 電話：$row[6] 地址 :$row[6] 營業時間 :$row[7] 簡介 :$row[7]"
                 ;
        }


?>
