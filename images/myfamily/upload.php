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
					<li><a href="mark/markframe.php">標記</a></li>
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
	
	<p class="name"><span style="float: right">您好!  <? echo $loginname;?></span>
	<div>
	<br>
		<form class = "form2" enctype = "multipart/form-data" method = "post" action = "myupload.php?loginname=<? echo $loginname?>">
		<table>
			<tr>
			<th>1</th>
			<td><input type = "file" name = "pic1"></td>
			<th>2</th>
			<td><input type = "file" name = "pic2"></td>
			</tr>
			<tr>
			<th>3</th>
			<td><input type = "file" name = "pic3"></td>
			<th>4</th>
			<td><input type = "file" name = "pic4"></td>
			</tr>
			<tr>
			<th>5</th>
			<td><input type = "file" name = "pic5"></td>
			<th>6</th>
			<td><input type = "file" name = "pic6"></td>
			</tr>
			<tr>
			<th>7</th>
			<td><input type = "file" name = "pic7"></td>
			<th>8</th>
			<td><input type = "file" name = "pic8"></td>
			</tr>
			<tr>
			<th>9</th>
			<td><input type = "file" name = "pic9"></td>
			<th>10</th>
			<td><input type = "file" name = "pic10"></td>
			</tr>
		</table>
		<p>
		<input type = "submit" value = "送出" id = "submit">
		</p>
		</form>
	<div>
</body>
</html>