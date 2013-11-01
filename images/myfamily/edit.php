<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link rel="stylesheet" type="text/css" href="121.css" />
<script src="1111.js" type="text/javascript"></script>
<script src="drawings.js" type="text/javascript"></script>
<?
$albID="A001";
$memID=$loginname;
?>

<script> 
var X, Y, draw; //座標與繪圖與否
var m, c; //繪圖物件
var iNo=1; //圖片編號

function init() 
{
	var img = new Image();
	img.src="images/pic1.jpg";

    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
}

function  Radio1_onclick()
{
  var canvas = document.getElementById("thisPic");
  var ctx = canvas.getContext('2d'); 
  var img = new Image();	
  img.src="images"/*'<?  echo  $classID."/".$stuId."/".pic;?>'*/+ iNo + '.jpg';

  var imgd = ctx.getImageData(0, 0, 720, 540);
  var pix = imgd.data;

  // Loop over each pixel and invert the color.
  for (var i = 0, n = pix.length; i < n; i += 4) 
  {
	pix[i ] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
	pix[i+1] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
	pix[i+2] = 0.299*pix[i]+ 0.587*pix[i+1] + 0.114*pix[i+2];
  }

  // Draw the ImageData at the given (x,y) coordinates.
  ctx.putImageData(imgd, 0, 0);
}

function  Radio2_onclick()
{
  var canvas = document.getElementById("thisPic");
  var ctx = canvas.getContext('2d'); 
  var img = new Image();	
  img.src="images"/*'<?  echo  $classID."/".$stuId."/";?>'+ 'pic'*/+ iNo + '.jpg';

  var imgd = ctx.getImageData(0, 0, 720, 540);
  var pix = imgd.data;

  // Loop over each pixel and invert the color.
  for (var i = 0, n = pix.length; i < n; i += 4) 
  {
	pix[i  ] = 255 - pix[i  ]; // red
	pix[i+1] = 255 - pix[i+1]; // green
	pix[i+2] = 255 - pix[i+2]; // blue
  // i+3 is alpha (the fourth element)
  }

  // Draw the ImageData at the given (x,y) coordinates.
  ctx.putImageData(imgd, 0, 0);
}


function Radio3_onclick() 
{  
  var canvas = document.getElementById("thisPic");
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/film_bk2.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		//alert("OK");
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
	ctx.drawImage(img1,0, 0, 600, 500);
	ctx.drawImage(img2,13,55,580, 390);
   }
}

function Radio4_onclick()
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();	
 
  img1.src='images/p.04.gif';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);  
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,31,45,468,385);
   }
}
  
function Radio5_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.03.gif';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200); 
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,31,45,468,385);
  }
}
  
function Radio6_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();
 
  img1.src='images/p.05.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
  img1.onload = function()
  {
    ctx.drawImage(img1,0,0, 600, 500);  
    ctx.drawImage(img2,65,93,480,320); 
  }  
}
  
function Radio7_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.06.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,60,88,450,260);    
   }
}
  
function Radio8_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.07.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,36,95,510,350);  
   }
}
	 
function Radio9_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();
      
  img1.src='images/p.08.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,70,88,460,300);  
   }
}
  
function Radio10_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.11.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,100,111,449,303);
   }
}

function Radio11_onclick() 
{  
  var canvas = document.getElementById("thisPic");  
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/p.10.jpg';
  img2.src="images/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ "pic"+ iNo + ".jpg";
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
		// ctx.drawImage(img1,200,100,300,200,30,30,300,200);
   img1.onload = function()
   {
    ctx.drawImage(img1,0,0, 600, 500);
    ctx.drawImage(img2,125,81,412,340);
   }
}


function confirmDrawing() 
{
	m = document.getElementById("thisPic"); 
	var imgName = 'img' + iNo;
	var canvasData = m.toDataURL("images/");
	document.getElementById(imgName).src = canvasData;
	
	var ajax = new XMLHttpRequest();

	switch(iNo)
	{
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
	}
	
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData );
}


function ShowImage(imageFile, imgNo)
{
	var img = new Image();
	img.src = imageFile;
    iNo = imgNo;
    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
	c.clearRect(0, 0, 600, 500); 
    //  c.globalAlpha = 1;
	var height = img.height;
	var width =  img.width;
	
	if (height < width) 
	{
		c.drawImage(img,0,0, 600, 500);
	} 
	else 
	{
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

<body onLoad="init()">
	<div>
		<header>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">我的首頁</a></li>
					<li><a href="#">儲存</a></li>					
				</ul>
			</nav>
		</header>		
	</div>
	<p class="name">Hello!&nbsp&nbsp<? echo $memID; ?> </p>
	<div id="wrapper">
	<center>
	<script src="1111.js" type="text/javascript"></script>
	<script src="drawings.js" type="text/javascript"></script>
		<ul class = "menu2">
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
		<li>
			<a  id="text">增加文字</a>
			<ul id="fonts">
				<li style="font-family: 'Arial', Helvetica, sans-serif;">
					<a>宋體</a>
				</li>
				<li style="font-family: 'Courier New', Courier, monospace;">
					<a>Courier New</a>
				</li>
				<li style="font-family: 'Georgia', serif;">
					<a>Georgia</a>
				</li>
				<li style="font-family: 'Lucida Console', Monaco, monospace">
					<a>Lucida Console</a>
				</li>
				<li style="font-family: 'Times New Roman', Times, serif">
					<a>Times New Roman</a>
				</li>
				<li style="font-family: 'Verdana', Geneva, sans-serif">
					<a>Verdana</a>
				</li>
			</ul>
		</li>
		
		
		<li>
		<a label for="sizer">大小:</label>
		<input name="sizer" id="sizer" type="text" />
		</li>
   
	</ul>
		<p>
		<ul>
			<input id="Radio1" name="R" type="radio" onClick="Radio1_onclick()" />灰階
			<input id="Radio2" name="R" type="radio" onClick="Radio2_onclick()" />反相
			<input id="Radio3" name="R" type="radio" onClick="Radio3_onclick()" />膠片
			<input id="Radio4" name="R" type="radio" onClick="Radio4_onclick()" />相框(粉) 
			<input id="Radio5" name="R" type="radio" onClick="Radio5_onclick()" />相框(藍)
			<input id="Radio6" name="R" type="radio" onClick="Radio6_onclick()" />拍立得
			<input id="Radio7" name="R" type="radio" onClick="Radio7_onclick()" />拍立得2
			<input id="Radio8" name="R" type="radio" onClick="Radio8_onclick()" />可愛
			<input id="Radio9" name="R" type="radio" onClick="Radio9_onclick()" />可愛2
			<input id="Radio10" name="R" type="radio" onClick="Radio10_onclick()" />書籤
			<input id="Radio11" name="R" type="radio" onClick="Radio11_onclick()" />信紙
		</ul>
		</p>
		
		<table border="1">
			<tr>
			<td>
				<canvas id="thisPic" width="600" height="500"></canvas>
			</td>
		
			<td>
				<div style=" overflow:auto; width: 300px; height: 600px;" border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
					<ol><a href="#_self" onclick="ShowImage('<?  echo  $photoID."/".$memID."/".("pic1.jpg");  ?>',1)">
						<img id="img1" alt="" src="<?  echo  $classID."/".$stuId."/".("pic1.jpg");  ?>" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/chen/11.jpg',2)">
						<img id="img2" alt="" src="./live/chen/11.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/lai/14.jpg',3)">
						<img id="img3" alt="" src="./live/lai/14.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/lin/15.jpg',4)">
						<img id="img4" alt="" src="./live/lin/15.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/lu/6.jpg',5)">
						<img id="img5" alt="" src="./live/lu/6.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/su/10.jpg',6)">
						<img id="img6" alt="" src="./live/su/10.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('./live/yi/3.jpg',7)">
						<img id="img7" alt="" src="./live/yi/3.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('images/pic8.jpg',8)">
						<img id="img8" alt="" src="images/pic8.jpg" width="120" height="120"></a></ol>
				</div>
			</td>
			</tr>
		</table>
	</center>
	</div>
</body>
</html>