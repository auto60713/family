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
	echo '<h1>'.$_SESSION["ssusername"].'　的家庭樹</h1>';
	echo '<ul><li>';
			echo '<img src="./A001/mary/1.jpg" height=120 width=120">';
			echo '<img src="./A001/william/2.jpg" height=120 width=120">';
			echo '<img src="./A001/andson/7.jpg" height=120 width=120"><br>';
			echo '<a href="./A001/mary/br.html">Mary</a><a>　　</a>';
			echo '<a href="./A001/william/br.html">James</a><a>　　</a>';
			echo '<a href="./A001/andson/br.html">Andson</a>';
				echo '<ul>';
			        echo '<li>';
					echo '<img src="./A001/james/7.jpg" height=120 width=120"><br>';
				    echo '<a href="./A001/james/br.html">'.$_SESSION["ssusername"].'</a>	';
						echo '<ul>';
							echo '<li>';
	                            echo '<img src="./A001/john/3.png" height=120 width=120">';
		                       	echo '<img src="./A001/ada/4.png" height=120 width=120"><br>';
		                      	echo '<a href="./A001/john/br.html">John</a><a>　　</a>';
		                     	echo '<a href="./A001/ada/br.html">Ada</a>';
	
		                    echo '</li>';
						echo '</ul>';
					echo '</li>';
					echo '<li>';
				    echo '<img src="./A001/52.jpg" height=120 width=120"><br>';		
				    echo '<a href="./A001/jenny/br.html">Jenny</a>';
						echo '<ul>';
							echo '<li>';
		                    	echo '<img src="./A001/6.png" height=120 width=120">';
		                     	echo '<img src="./A001/5.png" height=120 width=120"><br>';
		                     	echo '<a href="#">Peter</a><a>　　</a>';
		                    	echo '<a href="#">Oliver</a>';
	                    	echo '</li>';
			            echo '</ul>';
					echo '</li>';
			    echo '</ul>';
		echo '</li>';
	echo '</ul>';
	?>
	</div>
	
</body>
</html>