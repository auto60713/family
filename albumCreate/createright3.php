<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../panel.css">	
</head>
<body>
 <body>
<div id=menu>
<br>
	<ul class = "menu">
	<li><a href="../myhome.php" target="top"> 回上頁 </a></li>
	</ul>
</div>

<form action="albcreate.php?loginname=<?echo $loginname?>" method="post"  >
		<br>
      相簿名稱：<input type="text" name="albname">
	  日期：<input type="date" value="<?php echo date('Y-m-d'); ?>" name="albdate"/>
	  分享：<input type="checkbox" name="albshare">
 <br>
 <br>
<? 
//取得傳遞過來的資料
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="album"; // Table name 

$loginname=$_SESSION['ssusername'];

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

//$loginname="william";
$loginname = ltrim($loginname);
$query = "SELECT photoID, location FROM photo WHERE fm_ID='$loginname' and mk2='$mk2'";
$result=mysql_query($query);

while ($row=mysql_fetch_array($result)) {
	//echo "id=".$row['photoID'];
	echo '<input type="checkbox" name="chk[]" value="'.$row['location'].'"><label></label>';
    echo "<img src='../".$row['location']."' width='80' height='80'/> ";
}

?>
<input type="submit" name="Submit" value="送出">
<input type="reset" name="claer" value="清除"><br>
</form>
</body>
</html>