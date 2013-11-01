<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type = "text/css" rel = "stylesheet" href = "form.css">
</head>

<body>
	<div>
		<header>
			<h1 class = "home_title">My Family Album</h1>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">我的首頁</a></li>
					<li><a href="upload.php">上傳</a></li>
					<li><a href="mark/markframe.php?loginname= <? echo $loginname;?>">標記</a></li>
					<li><a href="edit.php">美編</a></li>
					<li><a href="album.php">相簿</a>
						<ul>
							<li><a href="AlbumCreate/albcframe.php?loginname= <? echo $loginname;?>">建立</a></li>
							<li><a href="AlbumList/albframe.php?loginname= <? echo $loginname;?>">瀏覽</a></li>
							<li><a href="AlbumList/albset.php?loginname= <? echo $loginname;?>">分享</a></li>
						</ul>
					</li>
					<li><a href="familytree.php ?loginname= <? echo $loginname;?>">家庭樹</a>
					</li>
					<li><a href="join-1.php?loginname= <? echo $loginname;?>"> 資料編輯 </a></li>
					<li><a href="logout.php">登出</a></li>
				</ul>
			</nav>
		</header>		
	</div>
	
	<p class="name"><span style="float: right">您好!  <? echo $loginname;?></span> </p>

</body>
</html>