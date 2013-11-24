<!--<? session_start(); ?>-->
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">

<style type = "text/css">
	.fieldset2{position:absolute;
				top:90px; 
				left:250px;
				width:870px;
				height:650px;}
</style>

</head>

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
	img.src="A001/william/20131109/1.jpg";

    m = document.getElementById("thisPic"); //取得畫布物件參考
    c = m.getContext("2d"); //建立2d繪圖物件
    //  c.globalAlpha = 1;
    c.drawImage(img,0,0, 700, 540);
}



function Radio3_onclick() 
{  
  var canvas = document.getElementById("thisPic");
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height); 
  
  var img1 = new Image();
  var img2 = new Image();

  img1.src='images/film_bk2.jpg';
  //alert ("A001/william/20130517/"+ iNo + '.jpg');
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"+ iNo + '.jpg';
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
  img2.src="A001/william/20131109/"/*'<?  echo  $classID."/".$stuId."/";?>'*/+ 'pic'+ iNo + '.jpg';
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
	var canvasData = m.toDataURL("A001/william/20131109/");
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
			<br>
				<ul class = "menu">
					<li><a href="myhome.php">回上頁</a></li>
					<li><a href="edit.php">塗鴉</a></li>
					<li><a href="#">相框</a></li>							
				</ul>
			</nav>
		</header>		
	</div>
	<p class="name"><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	
	<fieldset class="fieldset2">
		<legend><b><h3></h3></b></legend>
		<br>
		<p>
		<ul>
			<input id="Radio3" name="R" type="radio" onClick="Radio3_onclick()" />膠片
			<input id="Radio4" name="R" type="radio" onClick="Radio4_onclick()" />相框(粉) 
			<input id="Radio5" name="R" type="radio" onClick="Radio5_onclick()" />相框(藍)
			<input id="Radio6" name="R" type="radio" onClick="Radio6_onclick()" />拍立得
			<input id="Radio7" name="R" type="radio" onClick="Radio7_onclick()" />拍立得2
			<input id="Radio8" name="R" type="radio" onClick="Radio8_onclick()" />可愛
			<input id="Radio9" name="R" type="radio" onClick="Radio9_onclick()" />可愛2
			<input id="Radio10" name="R" type="radio" onClick="Radio10_onclick()" />書籤
			<input id="Radio11" name="R" type="radio" onClick="Radio11_onclick()" />信紙
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#"  onclick="confirmDrawing()">儲存</a> 
		</ul>
		
		</p>
		
		<table border="1" align="center">
			<tr>
			<td>
				<canvas id="thisPic" width="600" height="500"></canvas>
			</td>
		
			<td>
				<div style=" overflow:auto; width: 200px; height: 500px;" border="1" cellpadding="4" cellspacing="0" align="center" valign="middle">
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/1.jpg',1)">
						<img id="img1" alt="" src="A001/william/20131109/1.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/2.jpg',2)">
						<img id="img2" alt="" src="A001/william/20131109/2.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/3.jpg',3)">
						<img id="img3" alt="" src="A001/william/20131109/3.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/4.jpg',4)">
						<img id="img4" alt="" src="A001/william/20131109/4.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/5.jpg',5)">
						<img id="img5" alt="" src="A001/william/20131109/5.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/6.jpg',6)">
						<img id="img6" alt="" src="A001/william/20131109/6.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/7.jpg',7)">
						<img id="img7" alt="" src="A001/william/20131109/7.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/8.jpg',8)">
						<img id="img8" alt="" src="A001/william/20131109/8.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/9.jpg',9)">
						<img id="img9" alt="" src="A001/william/20131109/9.jpg" width="120" height="120"></a></ol>
					<ol><a href="#_self" onclick="ShowImage('A001/william/20131109/10.jpg',10)">
						<img id="img10" alt="" src="A001/william/20131109/10.jpg" width="120" height="120"></a></ol>
				</div>
			</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>