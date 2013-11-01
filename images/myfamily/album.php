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
	
	</div>
</body>
</html>