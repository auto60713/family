<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../panel.css">	
</head>
<body>
  	<div id=menu>
	<br>
		<ul class=menu>
		<li><a href="../myhome.php" target="top"> 回上頁 </a></li>

		</li>
	</div>
   <form action="markset.php" method="post"  
     <div  class=Layout15_2 ><!--主欄(上)-->      
             <h3>主題 
			   <select size="1"name="topic" onchange=>
			      <option value="無">無</option>  	
       			  <option value="美食紀錄">美食紀錄</option>  
			      <option value="旅遊">旅遊</option>  
				  <option value="個人照片">個人照片</option>  
				  <option value="朋友團體">朋友團體</option>
				  <option value="家庭聚會">家庭聚會</option>
				  <option value="藝文活動">藝文活動</option><p>
			   </select>&nbsp;&nbsp;&nbsp;&nbsp;
				  
			節慶<select size="1"name="festival" onchange=>
				  <option value="無">無</option>  	
				  <option value="過新年">過新年</option>  
                  <option value="元宵">元宵</option>
                  <option value="愚人節">愚人節</option>
                  <option value="清明節">清明節</option>
                  <option value="端午節">端午節</option>   
				  <option value="母親節">母親節</option> 
				  <option value="父親節">父親節</option> 
				  <option value="七夕情人節">七夕情人節</option> 
				  <option value="中元節">中元節</option> 
				  <option value="中秋節">中秋節</option> 
				  <option value="教師節">教師節</option> 
				  <option value="萬聖節">萬聖節</option> 
				  <option value="感恩節">感恩節</option> 
				  <option value="冬至">冬至</option>
                  <option value="聖誕節">聖誕節</option>	
                  <option value="跨年">跨年</option>				  
				  </select>&nbsp;&nbsp;&nbsp;&nbsp;
				   
	        地點<select size="1" name="location" onchange=aa()>
 				  <option value="無">無</option>  		  
				  <option value="基隆市">基隆市</option>  <option value="台北市">台北市</option>  <option value="新北市">新北市</option>
				  <option value="桃園縣">桃園縣</option>  <option value="新竹市">新竹市</option>  <option value="新竹縣">新竹縣</option>  
				  <option value="苗栗縣">苗栗縣</option>  <option value="台中市">台中市</option>  <option value="南投縣">南投縣</option>  
				  <option value="彰化縣">彰化縣</option>  <option value="雲林縣">雲林縣</option>  <option value="嘉義市">嘉義市</option>
				  <option value="嘉義縣">嘉義縣</option>  <option value="台南市">台南市</option>  <option value="高雄市">高雄市</option>
                  <option value="屏東縣">屏東縣</option>  <option value="宜蘭縣">宜蘭縣</option>  <option value="花蓮縣">花蓮縣</option>
                  <option value="台東縣">台東縣</option>  <option value="澎湖縣">澎湖縣</option>  <option value="金門縣">金門縣</option>
				  <option value="馬祖">馬祖</option>
				  </select>&nbsp;&nbsp;&nbsp;&nbsp;
                            
              日期&nbsp;<input type="date" name="modify_date" value="<?php echo date('Y-m-d'); ?>" />
			</div>
	</div>
  </div> 
<br><br>
<? 
//取得傳遞過來的資料
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="album"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

$loginname="william";
$query = "SELECT photoID, location FROM photo WHERE fm_ID='".$loginname."' and photo_date=".$photo_date."";
$result=mysql_query($query);
$num=0;
while ($row=mysql_fetch_array($result)) {
	//echo "id=".$row['photoID'];
	if ($num>=8) {
		echo '<input type="checkbox" name="chk[]" value="'.$row['photoID'].'"><label></label>';
		echo "<img src='../".$row['location']."' width='80' height='80'/><br> ";
		$num=0;
	} else {
		echo '<input type="checkbox" name="chk[]" value="'.$row['photoID'].'"><label></label>';
		echo "<img src='../".$row['location']."' width='80' height='80'/> ";
		$num++;
	
	}
	}

?>
<input type="submit" name="Submit" value="送出">
<input type="reset" name="claer" value="重設"><br>
</form>
</body>
</html>