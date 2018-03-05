<?php
$user_name = "root";
$server="localhost";
$password="";
$database="library";
$book_n=$_POST['book_n'];
$user_n=$_POST['user_n'];
$db_handle=mysql_connect($server,$user_name,$password);
if(!$db_handle){
	die("Could not connect");
}
$db_found=mysql_select_db($database);
if($db_found){
	$sql="
	delete from books where book_n =('".$book_n."')";
	$query= mysql_query($sql);
	$query2=mysql_query("Select * from  books");
	$query3=mysql_query("INSERT INTO book_user(user_name , book_name)
	values('".$user_n."' , '".$book_n."')");
	echo "<html> <body background= \"685e18ff8147427079a14ce27d984688.jpg\">
	<h1><center><font color=\"White\">REMOVE BOOK</font></center></h1>";
		echo "<TABLE BGCOLOR=\"Blue\" BORDER='2' ALIGN=\"CENTER\">";
		echo "<TR>";
		echo "<TH  COLSPAN='2'><CENTER><FONT COLOR=\"GREEN\">BOOK LIST</FONT> <CENTER></TH>";
		echo "</TR>";
		echo "<TR>";
		echo "<TD>Sl.NO</TD>";
		echo "<TD>User Name</TD>";
		echo "</TR>";
	while($tables =  mysql_fetch_array($query2)){
		echo "<TR>";
		echo "<TD>".$tables['sl_no']."</TD>";
		echo "<TD>".$tables['book_n']."</TD>";
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
