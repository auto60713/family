<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>

<link type="text/css" rel="stylesheet" href="tree.css">
<link type="text/css" rel="stylesheet" href="PhoToOnLine.css">
</head>
<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<body>
<div id=menu>
	<ul class=navi>
	<li><a href="../Home-main.php"> �W�@�� </a></li>
</div>
<p class="name1"><span style="float: right">�z�n!  <? echo $loginname;?></span> </p>
<div class="tree">
	<ul>
		<li>
			<img src="image/gf1.jpg" height=70 width=70">
			<img src="image/gm1.jpg" height=70 width=70"><br>
			<a href="../A001/john/br.html">����</a>
			<a href="../A001/ada/br.html">����</a>
			<ul>
				<li>
					<img src="image/father.jpg" height=70 width=70">
					<img src="image/mother.jpg" height=70 width=70"><br>
					<a href="../A001/james/br.html">��</a>
					<a href="../A001/jenny/br.html">��</a>
					<ul>
					
						<li>
							<img src="image/2.jpg" height=70 width=70"><br>
							<a href="../A001/mary/br.html">�j�k��</a>
						</li>
						<li>
							<img src="image/1.jpg" height=70 width=70"><br>
							<a href="../A001/william/br.html">�j��l</a>
						</li>
						<li>
							<img src="image/3.jpg" height=70 width=70"><br>
							<a href="../A001/andson/br.html">�p��l</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<img src="image/gf1.jpg" height=70 width=70">
			<img src="image/gm1.jpg" height=70 width=70"><br>
			<a href="#">�~����</a>
			<a href="#">�~����</a>
		</li>
	</ul>
</div>
</body>
</html>