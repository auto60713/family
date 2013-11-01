<?
if(empty($_POST["loginname"]))
{?>
	<script language="JavaScript">
		alert("請輸入帳號");
		history.back();
	</script>  
<?}
else if(empty($_POST["password1"]))
{?>
	<script language="JavaScript">
		alert("請輸入密碼");
		history.back();
	</script>  
<?}

else
{
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 
$tbl_name1="member"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query("SET NAMES 'utf8'");


$memID=$_POST['loginname']; 
$userpassword=$_POST['password1']; 


//建立查詢字串用以判斷登入名稱是否重複
$SQL="Select loginname From member Where memID='" . $loginname . "'";
$RS=mysql_query($SQL);

	if (!mysql_num_rows($RS) )
	{
	 $sql = "Insert Into member ( memID,  password) Values ('$memID',  '$userpassword')"or die("insert class member error");
	 mysql_query($SQL);
	 echo "$SQL";
	?>
	<script language="JavaScript">
		alert("加入成功");
		//localhost.href = "login.html";
	</script>  
	<?}
	else 
	{?>
	<script language="JavaScript">
		alert("帳號已經有人使用");
		history.back();
	</script>  
	<?}
}?>