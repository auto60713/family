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
	
	<?php
	//取得傳遞過來的資料
$host="localhost"; // Host name 
$sqlusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 


$loginname = $_SESSION['name'];
mysql_connect("$host", "$sqlusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
mysql_query("SET NAMES 'utf8'"); 
$name = $_SESSION['ssusername'];

$sql = "SELECT * FROM tree where name = '$name'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);


	if($row[1] != null)
    {
	    $_SESSION['treename'] = $row[1];
	    if($name != "william")
        {
          echo '<meta http-equiv=REFRESH CONTENT=0;url=familytree2.php>';
        }
        else
        {
	      echo '<meta http-equiv=REFRESH CONTENT=0;url=familytree.php>';
        }
    }
    else
    {
       //第一次使用家庭樹
        echo '<meta http-equiv=REFRESH CONTENT=0;url=creat_tree.php>';
    }
	
	
	?>
	
</body>
</html>