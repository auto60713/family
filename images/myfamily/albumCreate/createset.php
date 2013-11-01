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

albname=$_POST["albname"];
$albshare=0;
if($_POST["albshare"]) {
	$albshare=1;
}
$albdate=$_POST["albdate"];
$albDirectory="share/".$albname;

if (!$_POST["chk"]) {
?>
 <script language="JavaScript">
     alert("請選擇相片");
     history.back();
 </script> 
<?
} else {
	
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	mysql_query("SET NAMES 'utf8'");

	$photoIDarray=$_POST["chk"];

	$query = "INSERT INTO album (albumName,memID,date, share) VALUES ('$albname', '$loginname', now(), $albshare)" or die("insert class member error");
	$result=mysql_query($query);
	
	$query = "SELECT max(albID) as mID from album";
	$result=mysql_query($query);
	$row=mysql_fetch_row($result);
	//$albID= $row['mID'];
	$albID=$row[0];
	 
	if(is_dir("../share/".$albID)) { 
		//echo '$stuID dir existed...<br>'; 
	} 
	else { 
		mkdir("../share/".$albID);
	} 		
	$targetdir = "../share/".$albID;

	$num=1;
	foreach($postarray as $picpath) {	
		//	$picpath = $mydirname."/".$entryName;	
		$target = $targetdir."/".$num.".jpg";
		copy($picpath, $targetdir."/".$num.".jpg");
		$num++;
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