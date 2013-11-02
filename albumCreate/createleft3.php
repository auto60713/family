<? session_start(); ?>
<html>
<head>
<meta charset="UTF-8">
<title></title></head>
<body>
<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>
<img width=100 height=100 src='../images/navp1.jpg'>
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

$query = "SELECT DISTINCT mk2 FROM photo WHERE fm_ID='".ltrim($loginname)."' and mk2 is not null order by mk2";
$result=mysql_query($query);
echo "<br>";
print($loginname);
?>
<br>
<input type=button value="日期" onClick="location.href='createleft.php'">
<input type=button value="主題" onClick="location.href='createleft2.php'">
<input type=button value="地點" onClick="location.href='createleft4.php'">
<br><br>
<TR><TH>節慶</TH></TR>
<?
while ($row=mysql_fetch_row($result)) {

	$mk2 = $row[0];
	print("<TR><TD><a href=\"createright3.php?mk2=$mk2 & loginname=$loginname\" target=\"main\">$mk2</a></td>");	
	print("</TR>\n");
}
print("</TABLE>\n");

?>
</body>
</html>
