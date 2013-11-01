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

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
mysql_query("SET NAMES 'utf8'");
//$loginname="william";

$query = "SELECT DISTINCT mk1 FROM photo WHERE fm_ID='".ltrim($loginname)."' and mk1 is not null order by mk1";
$result=mysql_query($query);

print($loginname);
?>
<br>
<input type=button value="日期" onClick="location.href='createleft.php?loginname=<?echo $loginname?>'">
<input type=button value="節慶" onClick="location.href='createleft3.php?loginname=<?echo $loginname?>'">
<input type=button value="地點" onClick="location.href='createleft4.php?loginname=<?echo $loginname?>'">
<TR><TH>主題</TH></TR>
<?
while ($row=mysql_fetch_row($result)) {

	$mk1 = $row[0];
	print("<TR><TD><a href=\"createright2.php?mk1=$mk1 & loginname=$loginname\" target=\"main\">$mk1</a></td>");	
	print("</TR>\n");
}
print("</TABLE>\n");

?>
</body>
</html>
