<?ob_start(); 
session_start(); ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>登入資料檢查</title>
 </head>
 <body>
 
 <? 

 if(!isset($_POST['loginname']))
  {   ?>
  <script>
    window.alert('請至表單網頁輸入帳號');
 location.href='./login.php';
  </script><?
  }
  if(!isset($_POST['password1']))
  {   ?>
  <script>
    window.alert('請至表單網頁輸入密碼');
   location.href='./login.html';
  </script>
  <?
  }
  
  if($_POST['loginname']=="")
  {   ?>
  <script>
    window.alert('請輸入帳號');
 //    history.back();
  </script><?
  }
  if($_POST['password1']=="")
  {   ?>
  <script>
    window.alert('請輸入密碼');
 //  history.back();
  </script>
  
  <?
  }
   $memID =$_POST['loginname']; 
   $userpassword=$_POST['password1']; 

//	$loginname="1234";
	$con = mysql_connect("localhost","root","123456");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("myhome", $con);
	$sql="select * from member where memID = '$memID' and password='$userpassword'";  
	//echo $query;
	$result = mysql_query($sql);
    $row = @mysql_fetch_row($result); 
   if($row=="")
   {
		?>  
		<script language="JavaScript">
		alert("沒有這個帳號，請重新輸入");
		history.back();
		</script>  
		<?
   }    
   else
   {
		  	 
		$_SESSION["ssuserid"]=$row[0];   
		$_SESSION["ssusername"]=$row[2];	
		
	    header("Location:./myhome.php");
    } 
	 
	mysql_close($con);

   ?></body></html>
