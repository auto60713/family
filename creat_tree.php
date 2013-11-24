<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>我家相簿</title>
<link type = "text/css" rel = "stylesheet" href = "panel.css">
<link type="text/css" rel="stylesheet" href="tree.css">
<style>
body {background: url(images/fam_tree1) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
	

	
img {
opacity: 0.6;
}

div.creat {
 height:70%;
   width:50%;
   position: absolute;
   top:20%;
   left:20%;
  
 padding:10px; 
      background:#CDFFCE;
   border: 2px double #178918;
    box-shadow: 3px 4px 4px #7B7B7B;
}

form{
 margin:40px; 
}

h1{ text-shadow: 1px 2px 1px #7B7B7B;}

h3{ text-shadow: 1px 2px 1px #7B7B7B;}
</style>
</head>

<body>
 	<div id=menu>
	<br>
		<ul class=menu>
		<li><a href="myhome.php"> 回上頁 </a></li>
	</div>
	<p class="name"><br><span style="float: right">您好!  <? echo $_SESSION['ssusername'];?></span> </p>
	
	<div class="creat">
	<h1>你還沒有建立家庭樹，趕快來建立一顆吧!~</h1><br>
	<form name="form" method="post" action="tree_finish.php">
    <h3>樹的名稱：<input type="text" name="title"/><h3><br>
    <h3>幾個子女：<input type="text" name="many"/> <h3><br>
    <input type="submit" name="button" value="建立" style="height:30px; width:50px;"/>
	</form>
	<h1>或是加入已成立的家庭樹</h1><br>
	<form name="form" method="post" action="tree_finish2.php">
    <h3>樹的代碼ˋ：<input type="text" name="treeid"/><h3><br>
    <h3>稱位號碼：<input type="text" name="who"/> <h3><br>
    <input type="submit" name="button" value="加入" style="height:30px; width:50px;"/>
    </form>
	</div>
	
	
</body>
</html>