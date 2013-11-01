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
			<img src="./live/lin/15.jpg" height=70 width=70">
			<img src="./live/lai/14.jpg" height=70 width=70"><br>
			<a href="./A001/john/br.html">祖父</a>
			<a href="./A001/ada/br.html">祖母</a>
			<ul>
				<li>
					<img src="./live/lu/6.jpg" height=70 width=70">
					<img src="./live/chen/11.jpg" height=70 width=70">
					<img src="./live/lu/6.jpg" height=70 width=70">
					<img src="./live/chen/11.jpg" height=70 width=70"><br>
					<a href="./A001/james/br.html">叔叔</a>
					<a href="./A001/jenny/br.html">嬸嬸</a>	
					<a href="./A001/james/br.html">父</a>				
					<a href="./A001/jenny/br.html">母</a>
					<ul>					
						<li>
							<img src="./live/yi/3.jpg" height=70 width=70"><br>
							<a href="./A001/mary/br.html">大女兒</a>
						</li>
						<li>
							<img src="./live/su/10.jpg" height=70 width=70"><br>
							<a href="./A001/william/br.html">大兒子</a>
						</li>
						<li>
							<img src="./live/lu/7.jpg" height=70 width=70"><br>
							<a href="./A001/andson/br.html">小兒子</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<img src="./live/su/9.jpg" height=70 width=70">
			<img src="./live/chen/13.jpg" height=70 width=70"><br>
			<a href="#">外祖父</a>
			<a href="#">外祖母</a>
		</li>
	</ul>
	</div>
</body>
</html>