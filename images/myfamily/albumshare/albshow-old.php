<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../panel.css">	
<link type="text/css" href="main.css" rel="stylesheet" media="screen" />
</head>
<script>
    

function showimage() {
	//alert("OK");
}
</script>

<body>
  	<div id=menu>
		<ul class=menu>
		<li><a href="../login.html" target="top">我的首頁 </a></li>
	</div>
    <br>
<?
//
$dir = $dirpath;
//$albname=urlencode($albname);
$dir = "../share/$albname/*.*";

//讀取所有圖檔
$images = glob($dir);
$imgs = '';

//shuffle array
//shuffle($imgs);
 
//select first 20 images in randomized array
$imgs = array_slice($images, 0, 10);
 
//display images
foreach ($imgs as $img) {
    echo "<a href=\"#\" onclick=\"showimage()\"><img src='$img' width='80' height='80'> ";
}

?>
	<script type="text/javascript" src="pageflip.js"></script>
</body>
</html>