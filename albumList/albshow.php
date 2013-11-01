<!DOCTYPE HTML>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "../panel.css">
<script language="JavaScript" type="text/javascript" src="contentflow.js"></script>
<script tyle="text/javascript">
    var cf = new ContentFlow('contentFlow', 
		{
		reflectionColor: "#000000" 
		,startItem:3 //起始item，預設是中間
		,endOpacity:0.1 //後面item透明度
		,visibleItems:3 //後面顯示item數量
		,maxItemHeight:0 //最大高度
		,relativeItemPosition:"center"
		}
	);
</script>

</head>

<body>
	<Embed Src="homepage/moon.mp3" Loop="True" AutoStart="True" Hidden=True>
  	<div id=menu>
		<ul class=menu>
		<li><a href="../myhome.php" target="top"> 回上頁 </a></li>
	</div>
	<br>
	<div id="contentFlow" class="ContentFlow">
        <!-- should be place before flow so that contained images will be loaded first -->
        <div class="loadIndicator"><div class="indicator"></div></div>
        <div class="flow">
		<?
		//
		$dir = $dirpath;
		$dir = "../share/$albname/*.*";

		//讀取所有圖檔
		$images = glob($dir);
		$imgs = '';

		$imgs = array_slice($images, 0, 10);
		 
		foreach ($imgs as $img) {
			echo '<div class="item">';
			echo '<img class="content" src="'.$img.'">';
			echo '</div>';
		}
		?>
       </div>
       <div class="scrollbar">
            <div class="slider"><div class="position"></div></div>
       </div>
	</div>
</body>
</html>