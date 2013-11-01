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
	<div id="book">
		<canvas id="pageflip-canvas"></canvas>
		<div id="pages">
		<?
		//
		$dir = $dirpath;
		//$albname=urlencode($albname);
		$dir = "../share/$albname/*.*";

		//讀取所有圖檔
		$images = glob($dir);
		$imgs = '';

		$imgs = array_slice($images, 0, 10);
		 
		foreach ($imgs as $img) {
			echo "<section><div>";
			echo "<p><img src='".$img."' width='400' height='240'> ";
			echo "</p></div></section>";
		}
		?>
		</div>
	</div>
	<script type="text/javascript" src="pageflip.js"></script>
</body>
</html>