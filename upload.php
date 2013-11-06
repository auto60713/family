<? session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type = "text/css" rel = "stylesheet" href = "form.css">
</head>

<style type = "text/css">
form {
position: absolute;
 top:20%;
 left:20%;
 
  height:40%;
   width:50%;
   
   padding:10px; 
   
  background:#CDFFCE;
   border: 2px double #178918;
    box-shadow: 3px 4px 4px #7B7B7B;

}
	
</style>


<body>
<di<div>
		<header>
			<h1 class = "home_title">My Family Album</h1>
			<nav>
				<ul class = "menu">
					<li><a href="myhome.php">回上頁</a></li>
					
				</ul>
			</nav>
		</header>		
	</div>
	
	<p class="name"><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span>
	
	
<form action="upload_finish.php" method="post" enctype="multipart/form-data">
<h2>請上傳個人照片</h2>
<h3>**** jpg圖片大小：600x500  可多張上傳****</h3>
 <input type="file" name="imageURL[]" id="imageURL" multiple />
<br><br><br><br>

<input type="submit" value="上傳" name="submit" />
</form>



</body>
</html>
