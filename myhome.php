﻿<? session_start(); ?>
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

img.cloud {
float:left;

 position: absolute;
 left:5%;
 z-index:-2;
  opacity: 0.5;
}

img.tree {
float:left;

 position: absolute;
 left:50%;
 opacity: 0.8;
}

img.tree:hover {

 opacity: 1;
}

h1 {
 position: absolute;
 top:40%;
 left:10%;
 
 font-size:50px;
   color:#007AFA;
   text-shadow: 1px 2px 2px #7B7B7B;
}
	
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
					
					<li><a href="join-1.php"> 資料編輯 </a></li>
				
					<li><a href="logout.php">登出</a></li>
				</ul>
			</nav>
		</header>		
	</div>
	
	
	<!--<div style="top:420px;left:560px;position:absolute;"><img src="images/pic01.jpg" height="240" width="550" ></div>  -->
   
	<p class="name"><br><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	<a href="familytreelog.php"><h1>快來組織你的家庭樹！→</h1>
	<img src="images/clouds.png" height="80%" width="60%" class="cloud">
	<img src="images/tree12.png" height="80%" width="40%" class="tree"></a>
</body>
</html>