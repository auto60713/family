<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type="text/css" rel="stylesheet" href="tree.css">
<style>
body {background: url(images/fam_tree1) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
	
	div.tree{
	 position: absolute;
 
   left:10%;
	}
	
	h1{
	text-shadow: 1px 2px 2px #7B7B7B;

	}
</style>
</head>

<body>
 	<div id=menu>
	<br>
		<ul class=menu>
		<li><a href="myhome.php"> 回上頁 </a></li>
	</div>
	<p class="name"><br><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	
	
	<div class="tree">
	<?php 
	echo '<h1><a style="color:blue; font-size:40px">'.$_SESSION['treename'].'</a>　的家庭樹</h1>';
	?>
	<ul>
		<li>
			<img src="./A001/john/3.png" height=120 width=120">
			<img src="./A001/ada/4.png" height=120 width=120"><br>
			<a href="./A001/john/br.html">John</a><a style="visibility:hidden;">　</a>
			<a href="./A001/ada/br.html">Ada</a>
			<ul>
				<li>
					<img src="./A001/1.jpg" height=120 width=120">
					<img src="./A001/2.jpg" height=120 width=120">
					<img src="./A001/james/7.jpg" height=120 width=120">
					<br>
					<a href="./A001/james/br.html">James</a><a style="visibility:hidden;">　　　</a>
					<a href="./A001/jenny/br.html">Jenny</a><a style="visibility:hidden;">　　　</a>
					<a href="./A001/<? echo $_SESSION['ssusername'];?>/br.html"><? echo $_SESSION['ssusername'];?></a>				
					<ul>					
						<li>
							<img src="./A001/mary/1.jpg" height=120 width=120"><br>
							<a href="./A001/mary/br.html">Mary</a>
						</li>
						<li>
							<img src="./A001/william/2.jpg" height=120 width=120"><br>
							<a href="./A001/william/br.html">Tony</a>
						</li>
						<li>
							<img src="./A001/andson/7.jpg" height=120 width=120"><br>
							<a href="./A001/andson/br.html">Andson</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<img src="./A001/6.png" height=120 width=120">
			<img src="./A001/5.png" height=120 width=120"><br>
			<a href="#">Standly</a><a style="visibility:hidden;">　</a>
			<a href="#">ColaLin</a>
			<ul>
				<li>
					<img src="./A001/52.jpg" height=120 width=120">
                    <img src="./A001/5.jpg" height=120 width=120">
					<img src="./A001/6.jpg" height=120 width=120">
					<br>					
					<a href="./A001/jenny/br.html">Alice</a><a style="visibility:hidden;">　　　</a>
					<a href="./A001/james/br.html">Oliver</a><a style="visibility:hidden;">　　　</a>
					<a href="./A001/jenny/br.html">Peter</a>
					<ul>					
						<li>
							<img src="./A001/4.jpg" height=120 width=120"><br>
							<a href="./A001/mary/br.html">Toyz</a>
						</li>
						<li>
							<img src="./A001/3.jpg" height=120 width=120"><br>
							<a href="./A001/william/br.html">Lilballs</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	
	</div>
	
</body>
</html>