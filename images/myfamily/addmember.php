<?
if (empty($_POST["name"]))
{?>
	<script language="JavaScript">
		alert("請輸入帳號");
		history.back();
	</script>  
<?}
else if(empty($_POST["age"]))
{?>
	<script language="JavaScript">
		alert("請輸入年齡");
		history.back();
	</script>  
<?}
else if(empty($_POST["appellation"]))
{?>
	<script language="JavaScript">
		alert("請輸入身分");
		history.back();
	</script>  
<?}
else if(empty($_POST["loginname"]))
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
else if(empty($_POST["email"]))
{?>
	<script language="JavaScript">
		alert("請輸入電子郵件");
		history.back();
	</script>  
<?}
else
{
$memID=$_POST['loginname']; 
$appellation=$_POST['appellation'];
$name=$_POST['name'];
//$nickName=$_POST['nickName'];
$email=$_POST['email'];
//$phone=$_POST['phone'];
$userpassword=$_POST['password1']; 
$birth=$_POST['birth'];
//$age=$_POST['age'];

$conn = mysql_connect("localhost", "root", "123456");
mysql_select_db("myhome", $conn); 
mysql_query("set character set utf8");
//建立查詢字串用以判斷登入名稱是否重複
$SQL="Select loginname From member Where memID='" . $loginname . "'";
$RS=mysql_query($SQL);

	if (!mysql_fetch_array($RS))
	{
	 $sql = "Insert Into member (memID, appellation, name, nickName, email, phone, password, birth, age) Values ('";
	 $sql = $sql . $memID . "', '";
	 $sql = $sql . $appellation . "', '";
	 $sql = $sql . $name . "', '";
	 $sql = $sql . $nickName . "', '";
	 $sql = $sql . $email . "', '";
	 $sql = $sql . $phone . "', '";
	 $sql = $sql . $userpassword . "', '";
	 $sql = $sql . $birth . "')";
	 mysql_query($SQL);
	 echo "SQL";
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