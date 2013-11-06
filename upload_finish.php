<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>上傳</title></head>
<body>
<?

 if (isset($_GET['loginname']))
    { $loginname=$_GET['loginname'];    }	
 else
  {  }
  
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="photo"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");




$classID="A001";
$stuId = $_SESSION['ssusername'];;
$userID = $_SESSION['ssusername'];;
$photo_date = date('Ymd', time());
$fmID = $_SESSION['ssusername'];
$thistime = date('Ymd', time());


if(is_dir($classID)) { } 
else { mkdir($classID);} 
	
if(is_dir($classID.'/'.$fmID)) { }
else { mkdir($classID.'/'.$fmID);} 		

if(is_dir($classID.'/'.$fmID.'/'.$thistime)) { }
else { mkdir($classID.'/'.$fmID.'/'.$thistime);} 	



//多張上傳


$files=array();
$fdata=$_FILES['imageURL'];

if (is_uploaded_file($_FILES["imageURL"]["tmp_name"][0])) {
if(is_array($fdata['name'])){
for($i=0;$i<count($fdata['name']);++$i){
$uid = uniqid();
if ( copy($_FILES["imageURL"]["tmp_name"][$i],$classID.'/'.$fmID.'/'.$thistime.'/'.$i.'.jpg')) {
$photoPath = $classID.'/'.$fmID.'/'.$thistime.'/'.$i.'.jpg';
$query = "INSERT INTO photo (fm_ID,photo_date,location) VALUES ('$fmID', $photo_date, '$photoPath')" or die("insert class member error");
$result=mysql_query($query);
// echo "檔案上傳成功<br>";
unlink($_FILES["imageURL"]["tmp_name"][$i]);
} else {
echo "檔案上傳失敗, imageURL<br>";
}
}
} else {
$files[]=$fdata;
if ( copy($_FILES["imageURL"]["tmp_name"],$classID.'/'.$fmID.'/'.$thistime.'/'.$i.'.jpg')) {
unlink($_FILES["imageURL"]["tmp_name"]);
} else {
echo "檔案上傳失敗, imageURL<br>";
}
}
} else {
echo "請選擇檔案<br>";
}



 //$query = "INSERT INTO photo (userID,date,location) VALUES ('$userID', $photo_date, '$photoPath')" or die("insert class member error");
 //$result=mysql_query($query);
 
 
?>
   <script language="JavaScript">
      alert("檔案上傳成功");
      history.go(-2);
   </script> 
   
</body>
</html>