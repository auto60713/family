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

//$fmDirectory=$_POST["fmDirectory"];
//$className=$_POST["className"];
$fmDirectory="A001";
//$fmId="william";
$fmId= ltrim($loginname);

if(is_dir($fmDirectory)) { 
	//echo '$fmDirectory dir existed...<br>'; 
} else { 
//	echo '$fmDirectory dir not existed...<br>'; 
	mkdir($fmDirectory);
} 

if(is_dir($fmDirectory."/".$fmId)) { 
	//echo '$fmId dir existed...<br>'; 
} else { 
	mkdir($fmDirectory."/".$fmId);
	mkdir($fmDirectory."/".$fmId."/bak");
} 		

$currdatedir = $fmDirectory."/".$fmId."/".date('Ymd', time());
//$currdatedir = $fmDirectory."/".$fmId."/20121121";
$photo_date = date('Ymd', time());
//$photo_date = "20121121";
//echo $fmId." ".$currdatedir;

$photo0 = $fmDirectory."/".$fmId;
if(is_dir($currdatedir)) { 
	//echo '$fmId dir existed...<br>'; 
} else { 
	mkdir($currdatedir);
	mkdir($currdatedir."/bak");
} 
//echo "上傳檔案資訊: <hr>";

//儲存上傳的檔案
if (is_uploaded_file($_FILES["pic1"]["tmp_name"])) {
if ( copy($_FILES["pic1"]["tmp_name"],$currdatedir."/".$_FILES["pic1"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic1"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic1"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic1"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic1"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic1<br>";
}
}

if (is_uploaded_file($_FILES["pic2"]["tmp_name"])) {
if ( copy($_FILES["pic2"]["tmp_name"],$currdatedir."/".$_FILES["pic2"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic2"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic2"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic2"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic2"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic2<br>";
}
}

if (is_uploaded_file($_FILES["pic3"]["tmp_name"])) {
if ( copy($_FILES["pic3"]["tmp_name"],$currdatedir."/".$_FILES["pic3"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic3"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic3"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic3"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic3"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic3<br>";
}
}

if (is_uploaded_file($_FILES["pic4"]["tmp_name"])) {
if ( copy($_FILES["pic4"]["tmp_name"],$currdatedir."/".$_FILES["pic4"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic4"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic4"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic4"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic4"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic4<br>";
}
}

if (is_uploaded_file($_FILES["pic5"]["tmp_name"])) {
if ( copy($_FILES["pic5"]["tmp_name"],$currdatedir."/".$_FILES["pic5"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic5"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic5"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic5"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic5"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic5<br>";
} 
 }
 
if (is_uploaded_file($_FILES["pic6"]["tmp_name"])) {
 if ( copy($_FILES["pic6"]["tmp_name"],$currdatedir."/".$_FILES["pic6"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic6"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic6"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic6"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic6"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic6<br>";
} 
}

if (is_uploaded_file($_FILES["pic7"]["tmp_name"])) {
 if ( copy($_FILES["pic7"]["tmp_name"],$currdatedir."/".$_FILES["pic7"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic7"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic7"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic6"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic7"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic6<br>";
} 
}

if (is_uploaded_file($_FILES["pic8"]["tmp_name"])) {
 if ( copy($_FILES["pic8"]["tmp_name"],$currdatedir."/".$_FILES["pic8"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic8"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic8"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic8"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic8"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic8<br>";
} 
}

if (is_uploaded_file($_FILES["pic9"]["tmp_name"])) {
 if ( copy($_FILES["pic9"]["tmp_name"],$currdatedir."/".$_FILES["pic9"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic9"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic9"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic9"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic9"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic9<br>";
} 
}

if (is_uploaded_file($_FILES["pic10"]["tmp_name"])) {
 if ( copy($_FILES["pic10"]["tmp_name"],$currdatedir."/".$_FILES["pic10"]["name"])) {
  // echo "檔案上傳成功<br>";
   copy($_FILES["pic10"]["tmp_name"],$currdatedir."/bak/".$_FILES["pic10"]["name"]);
   $photoPath = $currdatedir."/".$_FILES["pic8"]["name"];
   $query = "INSERT INTO $tbl_name1 (fm_Id,photo_date,location) VALUES ('$fmId', $photo_date, '$photoPath')" or die("insert class member error");
   $result=mysql_query($query);
   unlink($_FILES["pic10"]["tmp_name"]);
}
else {
   echo "檔案上傳失敗, pic8<br>";
} 
}
?>
   <script language="JavaScript">
      alert("檔案上傳成功");
     history.go(-1);
   </script> 
   <?   
?>
</body>
</html>