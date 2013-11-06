<?php session_start(); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
header("Content-Type:text/html; charset=utf-8");
//取得傳遞過來的資料
$host="localhost"; // Host name 
$sqlusername="root"; // Mysql username 
$password="123456"; // Mysql password 
$db_name="myhome"; // Database name 

$loginname = $_SESSION['name'];
mysql_connect("$host", "$sqlusername", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
mysql_query("SET NAMES 'utf8'");


$name = $_SESSION['ssusername'];
$title = $_POST['title'];
$many = $_POST['many'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($title != null && $many != null)
{
        //新增資料進資料庫語法
        $sql = "insert into tree (name, title, many) values ('$name', '$title', '$many')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
				$_SESSION['treename'] = $title;
                echo '<meta http-equiv=REFRESH CONTENT=2;url=familytreelog.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=familytreelog.php>';
        }
}
else
{
        echo '請輸入資料!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=familytreelog.php>';
}
?>