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
     alert("請選擇相片");
     history.go(-1);
 </script> 
<?
} else {
	$photoIDarray=$_POST["chk"];
	
	$mk1="";
	$mk2="";
	$mk3="";
	$mk4="";
	$mk5="";
	if ($_POST['topic']) $mk1=$_POST['topic'];
	if ($_POST['festival']) $mk2=$_POST['festival'];
	if ($_POST['location']) $mk3=$_POST['location'];
	if ($_POST['modify_date']) $mk4=$_POST['modify_date'];
	
	
	$result=mysql_query($query);
	foreach($photoIDarray as $photoID) {	
		$query = "UPDATE photo SET mk1=null, mk2=null, mk3=null, mk4=null, mk5=null WHERE photoID=".$photoID;
		$result=mysql_query($query);
		
		$query = "UPDATE photo SET mk1='$mk1', mk2='$mk2', mk3='$mk3', mk4='$mk4' WHERE photoID=".$photoID;	
	//	echo $query;
		$result=mysql_query($query);
	}
?>
 <script language="JavaScript">
     alert("相片註記設定成功");
     history.go(-1);
 </script> 
 
 <?
 }
 ?>

</body>
</html>