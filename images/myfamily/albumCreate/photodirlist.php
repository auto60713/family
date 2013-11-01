<? 
// open this directory 
$mydirname = "../A001/".ltrim($loginname);
$myDirectory = opendir("$mydirname");
//$myDirectory = opendir("../A001/william");

// get each entry
while($entryName = readdir($myDirectory)) {
	if (!strpos( $entryName, '.')) {
		if (strlen($entryName) > 6) {
			$dirArray[] = $entryName;
		}
	}
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);
//Print ("$indexCount files<br>\n");

// sort 'em
sort($dirArray);

// print 'em

print('<meta charset="UTF-8">');
print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<img width=100 height=100 src='../images/navp1.jpg'><br>");
print($loginname);
print("<TR><TH>日期</TH></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {		
     if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		//print("<TR><TD><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
		$myurl="http://localhost/myfamily/albumCreate/albdirlist.php";
		$dirpath=ltrim($loginname)."/".$dirArray[$index];

		print("<TR><TD><a href=\"$myurl?dirpath=$dirpath\" target=\"main\">$dirArray[$index]</a></td>");	
		print("</TR>\n");
	}
}
print("</TABLE>\n");

?>
