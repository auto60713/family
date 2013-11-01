<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>資料編輯</title></head>
<body>
<?
	$link=mysql_connect("localhost","root","123456") or die("無法連接".mysql_error());  
	mysql_select_db("myhome", $link);
	mysql_query("SET CHARACTER SET utf8");

	$appellation= $_POST["appellation"];	
	//$appellation= iconv("UTF-8","Big5",$_POST["appellation"]);	
	$memID= $_POST["memID"];	
	$level = $_POST["level"];
	$no = $_POST["no"];
	$name = $_POST["name"];
	$nickname = $_POST["nickname"];
	$adm=0;
	if (isset($_POST["adm"])) {
		$adm = 1;
	}
	$sexvalue = $_POST["sex"];
	$sex=2;
	if ($sexvalue="male") $sex=1;
	$password = $_POST["password"];
	$birth = $_POST["birth"];
	$email = $_POST["email"];
			
	$sql ="DELETE FROM member WHERE memID = '$memID'";
//	echo $sql;
	mysql_query($sql)or die ("無法刪除".mysql_error()); //執行sql語法

	$sql ="INSERT INTO member(memID,appellation,level,no,name,nickname,adm, sex, password, birth, email) ";
	$sql = $sql." VALUES ( '$memID','$appellation',$level,$no,'$name','$nickname',$adm, $sex, '$password', '$birth', '$email')";  //新增資料
//	echo $sql;
	mysql_query($sql)or die ("無法新增".mysql_error()); //執行sql語法

	mysql_close($link); //關閉資料庫連結
?>
	<script>
		alert("儲存成功");
		window.history.back(1);
	</script>  	
</body>
</html>

