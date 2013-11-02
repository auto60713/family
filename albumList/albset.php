<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../panel.css">	
</head>
<script>
    

  function getUserlist() {
	var myobject = {
		ValueA : 'H26010001',
		ValueB : 'H26010002',
		ValueB : 'H260100003'
	};
	var select = document.getElementById("example-select");
	for(index in myobject) {
		select.options[select.options.length] = new Option(myobject[index], index);
	}
  }
  
  function sidChg(sidName){
	document.myPic.src="img/" +picName
  }
  </script>
  </head>
  <body >
  <body>
  	<div id=menu>
	<br>
		<ul class=menu>
		<li><a href="../myhome.php" target="top"> 回上頁 </a></li>
	</div>
	<p class="name"><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
    <br>

  
  <br><H3><center>設定分享相簿</center></H3>
  <form action="albshareset.php ? loginname=<? echo $_SESSION['ssusername'];?>" method="post"  
  <?
	$host="localhost"; // Host name 
	$sqlusername="root"; // Mysql username 
	$password="123456"; // Mysql password 
	$db_name="myhome"; // Database name 
	$tbl_name1="album"; // Table name 
	
	$con=mysql_connect("$host", "$sqlusername", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	mysql_query("SET NAMES 'utf8'");
	$memID = $_SESSION['ssusername'];
	$result = mysql_query("SELECT albID,albumName,share FROM $tbl_name1 where memID='$memID'");
	
	print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks align=\"center\">\n");   
	$num=1;
	while($row=mysql_fetch_array($result)){
		$share = $row[share];
		//if ($num > 6) print("<TR>");
		///$num++;
		print("<TR>");
		if ($share)
			print("<TD>$row[albumName]<input type=\"checkbox\" name=\"chk[]\" value=\"$row[albID]\" checked></td>");	
		else
			print("<TD>$row[albumName]<input type=\"checkbox\" name=\"chk[]\" value=\"$row[albID]\"></td>");	
	}
	print("</TR>\n");
?>
<br>
<br>
	<input type="submit" name="Submit" value="送出">
	<input type="reset" name="claer" value="重設"><br>
</form>
 </body>
</html>
