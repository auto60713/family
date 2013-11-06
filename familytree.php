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
	
img {
opacity: 0.6;
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
	echo '<h1>'.$_SESSION["treename"].'　的家庭樹</h1>';
	echo '<ul><li>';
			echo '<img src="images/nobody.jpg" height=120 width=120">';
			echo '<img src="images/nobody.jpg" height=120 width=120"><br>';
			echo '<a href="#">子女</a><a>　　</a>';
			echo '<a href="#">子女</a>';
				echo '<ul>';
			        echo '<li>';
					echo '<img src="A001/'.$_SESSION['ssusername'].'/face.jpg" height=120 width=120" style="opacity: 1;"><br>';
				    echo '<a href="#">'.$_SESSION['ssusername'].'</a>	';
						echo '<ul>';
							echo '<li>';
	                            echo '<img src="images/nobody.jpg" height=120 width=120">';
		                       	echo '<img src="images/nobody.jpg" height=120 width=120"><br>';
		                      	echo '<a href="#">祖父</a><a>　　</a>';
		                     	echo '<a href="#">祖母</a>';
	
		                    echo '</li>';
						echo '</ul>';
					echo '</li>';
					echo '<li>';
				    echo '<img src="images/nobody.jpg" height=120 width=120"><br>';		
				    echo '<a href="#">妻子</a>';
						echo '<ul>';
							echo '<li>';
		                    	echo '<img src="images/nobody.jpg" height=120 width=120">';
		                     	echo '<img src="images/nobody.jpg" height=120 width=120"><br>';
		                     	echo '<a href="#">外祖父</a><a>　　</a>';
		                    	echo '<a href="#">外祖母</a>';
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