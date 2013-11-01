<!DOCTYPE HTML>
<html>
<head>
<title>PhoTo OnLine</title>
<meta charset="UTF-8">
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
	<li><a href="../Home-main.html"> 首頁 </a></li>
</div>
<div class="tree">
	<ul>
		<li>
			<?
				$con = mysql_connect("localhost","root","123456");
				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
				
				mysql_select_db("myhome", $con);
				mysql_query("SET NAMES 'utf8'");
				$query="select * from member order by level, no";  
				
				$result = mysql_query($query);
				$rnum =mysql_num_rows($result); 

				while ($rnum > 0) { 
					$row=mysql_fetch_array($result);
					$rnum--;
					$appe1 = $row["appellation"];			
echo $appe1;					
					$name = $row["name"];				
					$nickname = $row["nickName"];
					$level = $row["level"];
					$no = $row["no"];
					$levelnojpg1="image/".$level.$no.".jpg";
					echo $levelnojpg;
					echo "<img src='$levelnojpg1' height=50 width=50>";
					$row=mysql_fetch_array($result);
					$rnum--;
					$appe2 = $row["appellation"];						
					$name = $row["name"];				
					$nickname = $row["nickName"];
					$level = $row["level"];
					$no = $row["no"];
					$levelnojpg2="image/".$level.$no.".jpg";
				
					echo "<img src='$levelnojpg2' height=50 width=50><br>";		
					echo "<a href='../A001/gfather/br.html'>$appe1"."</a>";
					echo "<a href='../A001/gmother/br.html'></a>";			
				}
				mysql_close($con);
			?>
			<img src="image/gf1.jpg" height=50 width=50">
			<img src="image/gm1.jpg" height=50 width=50"><br>
			<a href="../A001/gfather/br.html"><? echo $appe1 ?></a>
			<a href="../A001/gmother/br.html"><? echo $appe2 ?></a>
			<ul>
				<li>
					<img src="image/father.jpg" height=50 width=50">
					<img src="image/mother.jpg" height=50 width=50"><br>
					<a href="../A001/father/br.html">父</a>
					<a href="../A001/mother/br.html">母</a>
					<ul>
					
						<li>
							<img src="image/2.jpg" height=50 width=50"><br>
							<a href="../A001/mary/br.html">大女兒</a>
						</li>
						<li>
							<img src="image/1.jpg" height=50 width=50"><br>
							<a href="../A001/william/br.html">大兒子</a>
						</li>
						<li>
							<img src="image/3.jpg" height=50 width=50"><br>
							<a href="../A001/andson/br.html">小兒子</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<img src="image/gf1.jpg" height=50 width=50">
			<img src="image/gm1.jpg" height=50 width=50"><br>
			<a href="#">外祖父</a>
			<a href="#">外祖母</a>
		</li>
	</ul>
</div>

</body>
</html>