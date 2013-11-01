<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">

<script>

<?php
$classID="A001";
$stuId=$loginname;

//連結MySQL Server
    $conn = mysql_connect("localhost", "root", "123456");
//選擇資料庫
    mysql_select_db("photo", $conn);       
?>


function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
    iNo = imgNo;
    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
	c.clearRect(0, 0, 800, 640); 
    //  c.globalAlpha = 1;
	var height = img.height;
	var width =  img.width;
	
	if (height < width) {
		c.drawImage(img,0,0, 800, 640);
	} else {
	//	alert ('The image size is '+width+'*'+height);	
	
		c.drawImage(img,90,0, 512, 640);
	}
	
}
	
	//沒對應 技術保留
function getImgSize(imgSrc)
{
var newImg = new Image();
newImg.src = imgSrc;
var height = newImg.height;
var width = newImg.width;
alert ('The image size is '+width+'*'+height);
}



</script>
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
	<form method="post" action="<? echo basename($PHP_SELF); ?>" enctype="application/x-www-form-urlencoded">
		<table border="2" cellpadding="4">
			<tr>
			<td>
			<canvas id="thisPic" width="700" height="550"></canvas>  
			</td>
			<td>
				<table border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
					<td><a href="#_self" onclick="ShowImage('./live/chen/11.jpg',1)"><img id="img1" alt="" src="./live/chen/11.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="01"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/lai/14.jpg',2)"><img id="img2" alt="" src="./live/lai/14.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="02"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/lin/15.jpg',3)"><img id="img3" alt="" src="./live/lin/15.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="03"/> </td>
					<tr>
					<td><a href="#_self" onclick="ShowImage('./live/lu/6.jpg',4)"><img id="img4" alt="" src="./live/lu/6.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="04"/> </td>			
					<td><a href="#_self" onclick="ShowImage('./live/su/10.jpg',5)"><img id="img5" alt="" src="./live/su/10.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="05"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/yi/3.jpg',6)"><img id="img6" alt="" src="./live/yi/3.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="06"/> </td>
					<tr>
					<td><a href="#_self" onclick="ShowImage('./live/chen/13.jpg',7)"><img id="img7" alt="" src="./live/chen/13.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="07"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/lai/1.jpg',8)"><img id="img8" alt="" src="./live/lai/1.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="08"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/lin/8.jpg',9)"><img id="img9" alt="" src="./live/lin/8.jpg" width="120" height="120"></a>  <input type="checkbox" name="x[]" value="09"/> </td>
					<tr>
					<td><a href="#_self" onclick="ShowImage('./live/lu/7.jpg',10)"><img id="img10" alt="" src="./live/lu/7.jpg" width="120" height="120">  <input type="checkbox" name="x[]" value="10"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/su/9.jpg',11)"><img id="img11" alt="" src="./live/su/9.jpg" width="120" height="120">  <input type="checkbox" name="x[]" value="11"/> </td>
					<td><a href="#_self" onclick="ShowImage('./live/yi/12.jpg',12)"><img id="img12" alt="" src="./live/yi/12.jpg" width="120" height="120">  <input type="checkbox" name="x[]" value="12"/> </td>
				</table>
			</td>
		</table>
	</form>
	
	<input type="submit" value = "建立" />
	</center>
	</div>
</body>
</html>