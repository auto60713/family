<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title></title>
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
  <body onload="">
  <img width="100" height="100" src="../images/navp1.jpg">
  
  <br>已分享的相簿
  
  <?
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123456"; // Mysql password 
	$db_name="myhome"; // Database name 
	$tbl_name1="album"; // Table name 
	
	$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	mysql_query("SET NAMES 'utf8'");

	$result = mysql_query("SELECT albId,albumName FROM $tbl_name1 where share=1");
	print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");   
	while($row=mysql_fetch_array($result)){
		$myurl="http://localhost/myfamily/albumpre/albshow.php";
		print("<TR><TD><a href=\"$myurl?albname=$row[albId]\" target=\"main\">$row[albumName]</a></td>");	
	//	print("<TR><TD>$row[albumName]</td>");	
	}
	print("</TR>\n");
?>
<br>
<br>

 </body>
</html>
