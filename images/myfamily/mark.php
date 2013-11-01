<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
</head>

<body>
	<div>
		<header>
			<h1 class = "home_title">My Family Album</h1>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">我的首頁</a></li>
					<li><a href="upload.php">上傳</a></li>
					<li><a href="mark.php">標記</a></li>
					<li><a href="edit.php">美編</a></li>
					<li><a href="album.php">相簿</a>
						<ul>
							<li><a href="setup">建立</a></li>
							<li><a href="#">瀏覽</a></li>
							<li><a href="#">分享</a></li>
						</ul>
					</li>
					<li><a href="familytree.php">家庭樹</a>
					</li>
					<li><a href="manage.php">管理</a></li>
					<li><a href="logout.php">登出</a></li>
				</ul>
			</nav>
		</header>		
	</div>
	<p class="name">Hello!&nbsp&nbsp<? echo $memID; ?> </p>
	<div>
	<center>
		<form class = "form4">
            <h3>
			主題： <select size="1"name="" onchange=>
			      <option value="無">無</option>  	
       			  <option value="美食紀錄">美食紀錄</option>  
			      <option value="旅遊">旅遊</option>  
				  <option value="個人照片">個人照片</option>  
				  <option value="朋友團體">朋友團體</option>
				  <option value="家庭聚會">家庭聚會</option>
				  <option value="藝文活動">藝文活動</option><p>
			   </select>&nbsp;&nbsp;&nbsp;&nbsp;

			<!--活動<select size="1"name="" onchange=>
			 	  <option value="無">無</option>  	
       			  <option value="慶生">慶生</option>  
			      <option value="其他">其他</option>  
				   </select>&nbsp;&nbsp;&nbsp;&nbsp;-->
				  
			節慶：<select size="1"name="" onchange=>
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
				   
	        地點：<select size="1"name="Location" onchange=aa()>
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
           
			日期：<input type = "date" name = "date">
			</h3>
	   
			<table border="1">
				<tr>
				<td>
				<canvas id="thisPic" width="500" height="400"></canvas>
				</td>
				<td >
					<div style=" overflow:auto; width: 200px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
						<ol><a href="#_self" onclick="ShowImage('<?  echo  $photoID."/".$memID."/".("pic1.jpg");  ?>',1)"><img id="img1" alt="" src="<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>"  width="120" height="120"></a></ol>
						<ol><a href="#_self" onclick="ShowImage('./live/chen/11.jpg',2)"><img id="img2" alt="" src="./live/chen/11.jpg" width="120" height="120"></a></ol>		
						<ol><a href="#_self" onclick="ShowImage('./live/lai/14.jpg',3)"><img id="img3" alt="" src="./live/lai/14.jpg" width="120" height="120"></a></ol>			
						<ol><a href="#_self" onclick="ShowImage('./live/lin/15.jpg',4)"><img id="img4" alt="" src="./live/lin/15.jpg" width="120" height="120"></a></ol>				
						<ol><a href="#_self" onclick="ShowImage('./live/lu/6.jpg',1)"><img id="img1" alt="" src="./live/lu/6.jpg" width="120" height="120"></a></ol>
						<ol><a href="#_self" onclick="ShowImage('./live/su/10.jpg',1)"><img id="img1" alt="" src="./live/su/10.jpg" width="120" height="120"></a></ol>
					</div>
				</td>
				</tr>
			</table>
		</form> 
	</center>
    </div>	
</body>
</html>