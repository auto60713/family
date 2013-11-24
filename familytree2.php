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

h1{ 
text-shadow: 1px 2px 2px #7B7B7B;
}
</style>
</head>
<?
//取得傳遞過來的資料
$host="localhost"; // Host name 
$sqlusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="tree"; // Table name 
$name = $_SESSION['ssusername'];

mysql_connect("$host", "$sqlusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
mysql_query("SET NAMES 'utf8'");

$sql = "SELECT * FROM tree where name = '$name'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
?>
<body>
 	<div id=menu>
	<br>
		<ul class=menu>
		<li><a href="myhome.php"> 回上頁 </a></li>
	</div>
	<p class="name"><br><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	
	
	<div class="tree">
	<?php 
	echo '<h1><a style="color:blue; font-size:40px">'.$_SESSION["treename"].'</a>　家庭樹　　<a style="font-size:14px">樹編號：'.$row[0].'</a></h1>';
	echo '<ul>';
			echo '<li>';
			echo '<img src="images/'.$row[4].'.jpg" height=120 width=120">1';
			echo '<img src="images/'.$row[5].'.jpg" height=120 width=120">2<br>';
			echo '<a href="#">爺爺</a><a style="visibility:hidden;">　　</a>';
			echo '<a href="#">奶奶</a>';
				echo '<ul>';
			        echo '<li>';
					echo '<img src="A001/'.$_SESSION['ssusername'].'/face.jpg" height=120 width=120" style="opacity: 1;"><br>';
				    echo '<a href="#">'.$_SESSION['ssusername'].'</a>	';
						echo '<ul>';
							echo '<li>';
	                            echo '<img src="images/nobody.jpg" height=120 width=120">6';
		                       	echo '<img src="images/nobody.jpg" height=120 width=120">7<br>';
		                      	echo '<a href="#">子女</a><a style="visibility:hidden;">　　</a>';
		                     	echo '<a href="#">子女</a>';
	
		                    echo '</li>';
						echo '</ul>';
					echo '</li>';
					
			    echo '</ul>';
		echo '</li>';
		   echo '<li>';
			echo '<img src="images/nobody.jpg" height=120 width=120">3';
			echo '<img src="images/nobody.jpg" height=120 width=120">4<br>';
			echo '<a href="#">外公</a><a style="visibility:hidden;">　　</a>';
			echo '<a href="#">外婆</a>';
			
				  
						echo '<ul>';
						echo '<li>';
						  echo '<img src="images/nobody.jpg" height=120 width=120">5<br>';		
				    echo '<a href="#">妻子</a>';
							
	                    	echo '</li>';
			            echo '</ul>';
					echo '</li>';
		
	echo '</ul>';
	?>
	</div>
	
</body>
</html>