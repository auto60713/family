<html>
<head>
<meta charset="UTF-8">
<title>上傳</title></head>
<body>
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

if (!$_POST["chk"]) {
?>
 <script language="JavaScript">
     alert("請選擇相簿");
     history.go(-1);
 </script> 
<?
} else {
	$albumarray=$_POST["chk"];

	$query = "UPDATE album SET share = 0 WHERE memID='".ltrim($loginname)."'";

	$result=mysql_query($query);
	foreach($albumarray as $albumID) {	
		$query = "UPDATE album SET share = 1 WHERE albID=".$albumID;
		$result=mysql_query($query);
	}
?>
 <script language="JavaScript">
     alert("相簿分享設定成功");
     history.go(-1);
 </script> 
 
 <?
 }
 ?>

</body>
</html>