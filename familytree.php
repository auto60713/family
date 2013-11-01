<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type="text/css" rel="stylesheet" href="tree.css">
<style>
html {background: url(images/fam_tree1) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
</style>
</head>

<body>
 	<div id=menu>
		<ul class=menu>
		<li><a href="myhome.php" target="top"> 回上頁 </a></li>
	</div>
	<p class="name"><span style="float: right">您好!  <? echo $loginname;?></span> </p>
	<div class="tree">
	<ul>
		<li>
			<img src="./A001/john/3.png" height=70 width=70">
			<img src="./A001/ada/4.png" height=70 width=70"><br>
			<a href="./A001/john/br.html">祖父</a>
			<a href="./A001/ada/br.html">祖母</a>
			<ul>
				<li>
					<img src="./A001/1.jpg" height=70 width=70">
					<img src="./A001/2.jpg" height=70 width=70">
					<img src="./A001/james/7.jpg" height=70 width=70">
					<br>
					<a href="./A001/james/br.html">叔叔</a>
					<a href="./A001/jenny/br.html">嬸嬸</a>	
					<a href="./A001/james/br.html">父</a>				
					<ul>					
						<li>
							<img src="./A001/mary/1.jpg" height=70 width=70"><br>
							<a href="./A001/mary/br.html">大女兒</a>
						</li>
						<li>
							<img src="./A001/william/2.jpg" height=70 width=70"><br>
							<a href="./A001/william/br.html">大兒子</a>
						</li>
						<li>
							<img src="./A001/andson/7.jpg" height=70 width=70"><br>
							<a href="./A001/andson/br.html">小女兒</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<img src="./A001/6.png" height=70 width=70">
			<img src="./A001/5.png" height=70 width=70"><br>
			<a href="#">外祖父</a>
			<a href="#">外祖母</a>
			<ul>
				<li>
					<img src="./A001/52.jpg" height=70 width=70">
                    <img src="./A001/5.jpg" height=70 width=70">
					<img src="./A001/6.jpg" height=70 width=70">
					<br>					
					<a href="./A001/jenny/br.html">母</a>
					<a href="./A001/james/br.html">阿姨</a>
					<a href="./A001/jenny/br.html">姨丈</a>
					<ul>					
						<li>
							<img src="./A001/4.jpg" height=70 width=70"><br>
							<a href="./A001/mary/br.html">堂哥</a>
						</li>
						<li>
							<img src="./A001/3.jpg" height=70 width=70"><br>
							<a href="./A001/william/br.html">堂弟</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	</div>
</body>
</html>