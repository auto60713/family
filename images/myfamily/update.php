<?ob_start();
 session_start();

$link = mysql_connect("localhost", "root", "123456") or die('Error with MySQL connection');;
$dbname = "myhome";
mysql_select_db($dbname);
mysql_query("set character set utf8");  
	
	
?>