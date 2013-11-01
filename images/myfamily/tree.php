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
$tbl_name1="photo"; // Table name 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");

 
?>
   <script language="JavaScript">
      alert("儲存成功");
     history.go(-2);
   </script> 
   <?   
?>
</body>
</html>