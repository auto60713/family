<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../panel.css">	
</head>
<body>
<div id=menu>
	<ul class = "menu">
	<li><a href="../myhome.php" target="top"> 回上頁 </a></li>
	</ul>
</div>

 <form action="albcreate.php" method="post"  >
		<br>
      相簿名稱：<input type="text" name="albname">
	  日期：<input type="date" value="<?php echo date('Y-m-d'); ?>" name="albdate"/>
	  分享：<input type="checkbox" name="albshare">
	   <input type="submit" name="Submit" value="送出">
	   <input type="reset" name="claer" value="清除"><br>
 
<?
//

$dir = "../A001/$dirpath/*.*";

// open this directory 
$mydirname = "../A001/$dirpath";
$myDirectory = opendir("$mydirname");

// get each entry
while($entryName = readdir($myDirectory)) {
	if (strpos( $entryName, '.jpg')) {	
		$picarray[] = $entryName;
		$picpath = $mydirname."/".$entryName;
		echo '<input type="checkbox" name="chk[]" value="'.$picpath.'"><label></label>';
		echo "<img src='$picpath' width='80' height='80'/> ";
	}
}
closedir($myDirectory);

?>
</form>

</body>
</html>