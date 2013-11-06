<? 
//取得傳遞過來的資料
$host="localhost"; // Host name 
$sqlusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="album"; // Table name 

$loginname = $_SESSION['name'];
mysql_connect("$host", "$sqlusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

$myurl="http://localhost/myfamily/mark/markdirlist.php";
$loginname="william";
$query = "SELECT DISTINCT date_format(photo_date, \"%Y%m%d\") as photo_date FROM photo WHERE fm_ID='".$loginname."' order by photo_date";

$result=mysql_query($query);
print('<meta charset="UTF-8">');
print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<img width=100 height=100 src='../images/navp1.jpg'><br>");
print($loginname);
print("<TR><TH>日期</TH></TR>\n");
while ($row=mysql_fetch_row($result)) {

	$photo_date = $row[0];
	$dirpath = "../A001/$loginname/$photo_date";
	print("<TR><TD><a href=\"markright.php?photo_date=$photo_date & loginname=$loginname\" target=\"main\">$photo_date</a></td>");	
	print("</TR>\n");
}
print("</TABLE>\n");

?>
