<?php
$user_name = "root";
$server="localhost";
$password="";
$database="library";
$db_handle=mysql_connect($server,$user_name,$password);
if(!$db_handle){
	die("Could not connect");
}
$db_found=mysql_select_db($database);
if($db_found){	
	$query2=mysql_query("Select * from users");
	echo "<html> <body background= \"685e18ff8147427079a14ce27d984688.jpg\">
	<h1><center><font color=\"White\">USER LIST</font></center></h1>";
		echo "<TABLE BGCOLOR=\"RED\" BORDER='2' ALIGN=\"CENTER\">";
		echo "<TR>";
		echo "<TH  COLSPAN='2'><CENTER><FONT COLOR=\"GREEN\">BOOK LIST</FONT> <CENTER></TH>";
		echo "</TR>";
		echo "<TR>";
		echo "<TD>Sl.NO</TD>";
		echo "<TD>Name</TD>";
		echo "</TR>";
	while($tables =  mysql_fetch_array($query2)){
		echo "<TR>";
		echo "<TD>".$tables['sl_no']."</TD>";
		echo "<TD>".$tables['user_n']."</TD>";
		echo "</TR>";
		}
		echo "</TABLE>";
		echo "</body> </html>";
}
else{
	echo "No Database Found!";
}
mysql_close($db_handle);
?>
