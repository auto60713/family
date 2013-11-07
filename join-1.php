<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset = "UTF-8">
<title>成員</title>
<link type="text/css" rel="stylesheet" href="panel.css">
</head>
<body>
<?//取得傳遞過來的資料
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123456"; // Mysql password 
	$db_name="myhome"; // Database name 
	$tbl_name1="member"; // Table name 
	
	$loginname = $_SESSION['ssusername'];

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	mysql_query("SET NAMES 'utf8'");

	$sql = "SELECT * FROM member WHERE memID ='".ltrim($loginname)."'";
    $result = mysql_query($sql) or die('MySQL query error');
    while($row = mysql_fetch_array($result)){
        $appellation= $row['appellation'];	
		$memID= $row['memID'];	
		$level = $row['level'];
		$no = $row['no'];
		$name = $row['name'];
		$nickname = $row['nickName'];
		$adm = $row['adm'];
		$sex = $row['sex'];
		$password = $row['password'];
		$birth = $row['birth'];
		$email = $row['email'];
    }
//	if (ltrim($birth)="") {
//		$birth=date('Y-m-d');
//	}
?>
	<div>
		<header>
			<h1 class = "home_title">My Family Album</h1>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">回上頁</a></li>
				</ul>
			</nav>
		<p class="name"><span style="float: right">您好!  <? echo $loginname;?></span> </p>
		</header>		
	</div>
	
	<br>
	<form name="form1" method="post" action="insert.php">
	<table style="width: 65%" align="center"><tr><td>
		<fieldset class=a4>
			<legend><b><h3>成員資料...</h3></b></legend>
			<center>
				
				<p><label for="name">姓名:</label><input name="name" type="text" value ="<? echo $name; ?>">
					<label for="name">暱稱:</label><input name="nickname" type="text" value ="<? echo $nickname; ?>">
				</p>
				<p><label for="id">帳號:</label>
					<input name="memID" type="text" value ="<? echo $memID; ?>">
				</p>
				<p><label for="password">密碼：</label>
					<input name="password" type="password" value ="<? echo $password; ?>">
				</p>
				<p><label for="password">再次確認密碼:</label>
					<input name="password" type="password" value ="<? echo $password; ?>">
				</p>
				<p>性別：<input type="radio" name="gender" value="male">男性
						 <input type="radio" name="gender" value="female">女性
				</p>
				<p>生日:<input type="date" name="birth" value="<? echo $birth; ?>">
				</p>
				<p><label for="mail">電子郵件:</label>
					<input name="email" type="email" size="25" value="<? echo $email; ?>">
				</p>
				<p><button type="submit">確定</button></p>
			</center>
		</fieldset>
	</tr></td>
	</table>
	</form>
</body>
</html>