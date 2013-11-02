<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type = "text/css" rel = "stylesheet" href = "form.css">
<link href="layout.css" rel="stylesheet" type="text/css" />
</head>
<style type = "text/css">

	

</style>
<body>
	<div>
		<header>
		    <br>
			<h1 class = "home_title">My Family Album</h1>
			<br>
			<nav>
				<ul class = "menu">
					<li><a href="upload.php">上傳</a></li>
					<li><a href="edit.php">美編</a></li>
					<li><a href="mark/markframe.php">註記</a></li>			
					<li><a href="#">相簿</a>
						<ul>
							<li><a href="AlbumCreate/albcframe.php">建立</a></li>
							<li><a href="AlbumList/albframe.php">全部相簿</a></li>
							<li><a href="AlbumList/albset.php">分享設定</a></li>
							<li><a href="albumpre/albframe.php">分享預覽</a></li>
							
						</ul>
					</li>
					<li><a href="familytree.php">家庭樹</a></li>
					<li><a href="join-1.php"> 資料編輯 </a></li>
				
					<li><a href="logout.php">登出</a></li>
				</ul>
			</nav>
		</header>		
	</div>
	
	
	<!--<div style="top:420px;left:560px;position:absolute;"><img src="images/pic01.jpg" height="240" width="550" ></div>  -->
   
	<p class="name"><br><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	
	<div class="BOX">
		<img src = "images/pic6.jpg" height="150" width="150" style="top:480px;left:390px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic2.jpg" height="230" width="230" style="top:230px;left:560px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic3.jpg" height="200" width="200" style="top:450px;left:820px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic4.jpg" height="200" width="200" style="top:200px;left:900px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic5.jpg" height="150" width="150" style="top:430px;left:1080px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic7.jpg" height="150" width="150" style="top:180px;left:1150px; position:absolute;" />
	</div>
	<div class="BOX">
		<img src = "images/pic8.jpg" height="150" width="150" style="top:450px;left:1250px; position:absolute;" />
	</div>
</body>
</html>