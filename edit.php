<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">

<style type = "text/css">
	.fieldset1{position:absolute;
				top:90px; 
				left:250px;
				width:900px;
				height:650px;}
</style>

</head>

<body>
	<div>
		<header>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">回上頁</a></li>
					<li><a href="edit.php">塗鴉</a></li>
					<li><a href="edit-2.php">相框</a></li>							
				</ul>
			</nav>
		</header>		
	</div>
	<p class="name"><span style="float: right">您好!  <? echo $loginname;?></span> </p>
	
	<fieldset class="fieldset1">
		<legend><b><h3></h3></b></legend>
		<link rel="stylesheet" type="text/css" href="121.css" />
		<script src="1111.js" type="text/javascript"></script>
		<script src="drawings.js" type="text/javascript"></script>	
		<?
			$albID="A001";
			$memID=$loginname;
		?>

<script>
function init() {
	var img = new Image();
	img.src="A001/william/20130517/1.jpg";
	

    m = document.getElementById("canvas"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
	
}

function confirmDrawing() {
	m = document.getElementById("canvas"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("A001/william/20130517/");
	document.getElementById(imgName).src = canvasData;
	
var ajax = new XMLHttpRequest();
switch(iNo){
case 1:
ajax.open("POST",'savecanvas/savecanvas11.php',false);
break;
case 2:
ajax.open("POST",'savecanvas/savecanvas12.php',false);
break;
case 3:
ajax.open("POST",'savecanvas/savecanvas13.php',false);
break;
case 4:
ajax.open("POST",'savecanvas/savecanvas14.php',false);
break;
case 5:
ajax.open("POST",'savecanvas/savecanvas15.php',false);
break;
case 6:
ajax.open("POST",'savecanvas/savecanvas16.php',false);
break;
case 7:
ajax.open("POST",'savecanvas/savecanvas17.php',false);
break;
case 8:
ajax.open("POST",'savecanvas/savecanvas18.php',false);
break;
case 9:
ajax.open("POST",'savecanvas/savecanvas19.php',false);
break;
case 10:
ajax.open("POST",'savecanvas/savecanvas20.php',false);
break;

}
ajax.setRequestHeader('Content-Type', 'application/upload');
ajax.send(canvasData );
}

function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
    iNo = imgNo;
    m = document.getElementById("canvas"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
	c.clearRect(0, 0, 600, 500); 
    //  c.globalAlpha = 1;
	var height = img.height;
	var width =  img.width;
	
	if (height < width) {
		c.drawImage(img,0,0, 600, 500);
	} else {
	//	alert ('The image size is '+width+'*'+height);	
	
		c.drawImage(img,90,0, 512, 640);
	}
	
}
	
function getImgSize(imgSrc)
{
var newImg = new Image();
newImg.src = imgSrc;
var height = newImg.height;
var width = newImg.width;
alert ('The image size is '+width+'*'+height);
}
</script>

</head>

<div id="wrapper">
	<div class="menu2">
		<ul>
			<li>
				<a  id="edit">編輯</a>
				<ul>
					<li>
						<a  id="clear">清除</a>
					</li>
					<li>
						<a  id="undo" title="ctrl + z">復原</a>
					</li>
					<li>
						<a  id="redo" title="ctrl + y">重作</a>
					</li>
				</ul>
			</li>
			<li>
			<li>
				<a  id="draw">色盤</a>
				<ul id="colors">
					<li style="background-color:white;">
						<a>白色</a>
					</li>
					<li style="background-color:red;">
						<a>紅色</a>
					</li>
					<li style="background-color:orange;">
						<a>橘色</a>
					</li>
					<li style="background-color:yellow;">
						<a>黃色</a>
					</li>
					<li style="background-color:green;">
						<a>綠色</a>
					</li>
					<li style="background-color:blue;">
						<a>藍色</a>
					</li>
					<li style="background-color:indigo;">
						<a>紫色</a>
					</li>
					<li style="background-color:violet;">
						<a>粉紅色</a>
					</li>
					<li style="background-color:black;">
						<a>黑色</a>
					</li>
				</ul>
				
			</li>
			
			<li><a href="#" onclick="confirmDrawing()">儲存</a></li> 
		</ul>
		
	</div>
</div>
<br>
<br>
<br>
	<table border="2" cellpadding="4" >
		<tr>
		<td>
		<canvas id="canvas" width="600" height="500"></canvas>
		
		</td>
		
		<td >
			<div style=" overflow:auto; width: 200px; height: 500px; " border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/1.jpg',1)"><img id="img1" alt="" src="A001/william/20130517/1.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/2.jpg',2)"><img id="img2" alt="" src="A001/william/20130517/2.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/3.jpg',3)"><img id="img3" alt="" src="A001/william/20130517/3.jpg" width="120" height="120"></a></ol>
                <ol><a href="#_self" onclick="ShowImage('A001/william/20130517/4.jpg',4)"><img id="img4" alt="" src="A001/william/20130517/4.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/5.jpg',5)"><img id="img5" alt="" src="A001/william/20130517/5.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/6.jpg',6)"><img id="img6" alt="" src="A001/william/20130517/6.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/7.jpg',7)"><img id="img7" alt="" src="A001/william/20130517/7.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/8.jpg',8)"><img id="img8" alt="" src="A001/william/20130517/8.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/9.jpg',9)"><img id="img9" alt="" src="A001/william/20130517/9.jpg" width="120" height="120"></a></ol>
				<ol><a href="#_self" onclick="ShowImage('A001/william/20130517/10.jpg',10)"><img id="img10" alt="" src="A001/william/20130517/10.jpg" width="120" height="120"></a></ol>
             </div> 
		</td>
		</tr>
	</table>
</fieldset>	
</body>
</html>