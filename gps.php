
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   
   <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Marker Labels</title>
	
	 <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<?php include("nav.php");  ?>
	
    <style>
      /* Always set
	  the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu7zqaq98FuCQN1p1rjo3hpGCES5_OqxQ&callback=initMap"></script>
	<?php
 
 require_once("conMysql.php");
 

$dat="select * from `eatwhat`";//從contact資料庫中選擇所有的資料表
$result= mysqli_query($conn,$dat);

  $row_total=mysqli_num_rows($result);
 $fields=mysqli_num_fields($result);
   for ($x=0;$x<($fields);$x++){
    $meta=mysqli_fetch_field($result);//取得欄位資訊,使用mysql_fetch_field函數目的要取得資料表欄位名稱
    $fields_name[$x]=$meta->name; //將欄位名稱儲存到$fields_name陣列
  }
// echo "<br/>筆數=$row_total;欄位數=$fields<br />";
 
 
 
 for ($y=0;$y<($row_total);$y++){
    $row=mysqli_fetch_array($result);
    $db_data[$y]=$row;
  }
 /*  echo '<table border="1">';
  for ($y=-1;$y<($row_total);$y++){
    echo '<tr>';
    for ($x=0;$x<($fields);$x++){
   //假如y等於-1就先輸出資料表欄位名稱
   if ($y==-1){
     echo '<td align="center">'.$fields_name[$x].'</td>';
   }else{
     echo '<td align="center">'.$db_data[$y][$x].'</td>';
     
   }
 }
 echo '</tr>';
  }

*/

  //printf($db_data[0][5]);

?>

<?php
 
	$db_list = []; //資料庫清單
	$db_gg= [];// shopname & allth
	//取值
	$db_ph=[];//phone
	$db_td=[];//td is time+dollar.
	$db_id=[];
	$db_type=[];

	for($i=0 ; $i<($row_total) ; $i++){ //列
		array_push($db_list, ($db_data[$i][14]), ($db_data[$i][15]) );
	}
	for($j=0 ; $j<($row_total) ; $j++){ //列
		array_push($db_gg, ($db_data[$j][4]), ($db_data[$j][8]) );
	}	
	for($i=0 ; $i<($row_total) ; $i++){ //列
		array_push($db_td, ($db_data[$i][7]), ($db_data[$i][11]) );
	}	
	
	for($j=0 ; $j<($row_total) ; $j+=1){ //列
	    
		    if ($db_data[$j][5]!=null)
		 
			{array_push($db_ph, ($db_data[$j][5]));}
		
	
	}		
	for($j=0 ; $j<($row_total) ; $j+=1){ //列
	    
		    if ($db_data[$j][5]!=null)
		 
			{array_push($db_id, ($db_data[$j][0]));}
		
	
	}		
	for($j=0 ; $j<($row_total) ; $j+=1){ //列
	    
		    if ($db_data[$j][5]!=null)
		 
			{array_push($db_type, ($db_data[$j][3]));}
		
	
	}		
	
	$db_list_length = count($db_list);
	
?>

<script type="text/javascript">

</script>


    <script>

	// In the following example, markers appear when the user clicks on the map.
	// Each marker is labeled with a single alphabetical character.
	var labels = '';
	var labelIndex = 0;

	var db_list_length = <?php echo($db_list_length); ?>;
    

//	console.log("資料數:", db_list_length);
   
	var db_list = [];//資料庫清單
    var db_gg=[];
	var db_ph=[];
	var db_td=[];
	var db_id=[];
    var db_tp=[];
	db_list.push(
	<?php
		for($i=0 ; $i<$db_list_length ; $i++){
			print_r($db_list[$i]);
			print(',');
		}
	?>
	);
	db_ph.push(
	<?php
	     $a=($db_list_length/2);
		for($i=0 ; $i<$a ; $i++){
			
			print_r($db_ph[$i]);
			if($db_list_length-1 != $i)
			{
				
					print(',');
			}
		
			
		}
	?>
	);
	
	db_gg.push(
	<?php
		for($i=0 ; $i<$db_list_length; $i++){
			
			print_r(json_encode($db_gg[$i]));
			
				print(',');
			
			
		}
	?>	
	
	);
	db_td.push(
	<?php
		for($i=0 ; $i<$db_list_length ; $i++){
			print_r(json_encode($db_td[$i]));
			print(',');
		}
	?>
	);

	db_id.push(
	<?php
	     $a=($db_list_length/2);
		for($i=0 ; $i<$a ; $i++){
			
			print_r($db_id[$i]);
			if($db_list_length-1 != $i)
			{
				
					print(',');
			}
		
			
		}
	?>
	);	
	db_tp.push(
	<?php
	     $a=($db_list_length/2);
		for($i=0 ; $i<$a ; $i++){
			
			print_r($db_type[$i]);
			if($db_list_length-1 != $i)
			{
				
					print(',');
			}
		
			
		}
	?>
	);		
	
	
  
	//console.log("資料庫清單:");
	//console.log(db_list);

	function initialize() {
	  
		//其餘座標清單
		var value_list = [];
        var name_list = [];
		var allth_list = [];
		var phonelist=[];
		var timelist=[];
		var dollarlist=[];
		var typelist=[];
		
		for (x=2 ; x<db_list_length ; x+=2){			
			value_list.push( 
				{ 
					lat: db_list[x],
					lng: db_list[x+1] 
				} 
			);
		}
	    var coun =0;
		for (x=2 ; x<db_list_length ; x+=2){			
               
					name_list[coun]=db_gg[x];
					coun++;
	
		
		}	
	    var count =0;
        for (x=2 ; x<db_list_length ; x+=2){			
               
					
					allth_list[count]=db_gg[x+1] ;
	                count++;
		  
		}			
	    var counter =0;
        for (x=1 ; x<db_list_length ; x+=1){			
               
					
					phonelist[count]=db_ph[x] ;
	                counter++;
		  
		}	
        var cc=0;		
		for (x=2 ; x<db_list_length ; x+=2){			
               
					timelist[cc]=db_td[x];
					cc++;
	
		
		}	
	    var count =0;
        for (x=2 ; x<db_list_length ; x+=2){			
               
					dollarlist[count]=db_td[x+1] ;
	                count++;
		  
		}	
		
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var marker = new google.maps.Marker({
                    position: pos,
                   
                    map: map
                });
                map.setZoom(13);
                map.setCenter(pos);
				
				
				
            });
        } else {
            // Browser doesn't support Geolocation
            alert("未允許或遭遇錯誤！");
        }		

		//console.log("其餘座標清單:");
		

		// 中心點座標
		var bangalore = { lat: db_list[0], lng: db_list[1] };


		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 13,
		  center: bangalore
		});





	
		

		
		addMarker(bangalore, map,db_gg[0],db_gg[1],db_ph[0],db_td[0],db_td[1],db_id[0],db_tp[0]); //顯示中心點座標
		
		//顯示其餘座標
		for(i=0 ; i<value_list.length ; i++){
			
			
			
			
			
			
			addMarker(value_list[i], map,name_list[i],allth_list[i],db_ph[i+1],timelist[i],dollarlist[i],db_id[i+1],db_tp[i+1]);
			
			
		}
	}
	

	// Adds a marker to the map.
	function addMarker(location, map,name_list,allth_list,db_ph,timelist,dollarlist,db_id,db_tp) {
		// Add the marker at the clicked location, and add the next-available label
	
	// from the array of alphabetical characters.
	var shit = '';
    if (db_tp==1)
	   {
		shit = '吃';   
	   }
    if (db_tp==2)
	   {
		shit='喝';    
	   }
    if (db_tp==3)
	   {
		shit = '玩';   
	   }		
		
		
		
		
		
		
		var marker = new google.maps.Marker({
			position: location,
			label: shit,
			map: map
		});

        var secretMessage ='<div id="content">'+'<h1 id="firstHeading" class="firstHeading">'+name_list+'</h1>'+'<div id="bodyContent">'+'<b>介紹:</b>'+allth_list+'<p></p>'+'<b>電話:</b>'+db_ph+'<p></p>'+'<b>時間:</b>'+timelist+'<p></p>'+'<b>平均消費:</b>'+dollarlist+'<p></p>'+'<a href="allok.php?id='+db_id+'">詳細資料</a>'+'</div>';



		
        var  secretMessagee=allth_list;	



        var infowindow = new google.maps.InfoWindow({
          content: secretMessage 
        });
		
		
        marker.addListener('click', function() {
          infowindow.open(map, marker);
		  if(marker.getAnimation()==null){
          marker.setAnimation(google.maps.Animation.BOUNCE);
          }else{
          marker.setAnimation(null);
          }
          });			
	}

	google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </head>
  <style>
	body,input,button,select,textarea{
font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;font-size:108%;}
	</style>
  <body>
  <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
  
  
   
  <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
	
	
    <div id="map"></div>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
  </body>
</html>