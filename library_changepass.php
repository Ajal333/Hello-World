<?php
$database="library";
$name=$_POST['name'];
$password=$_POST['password'];
$db_handle=mysql_connect("localhost" , "root" , "");
if(!$db_handle){
	die("Could not connect");
}
$db_found=mysql_select_db($database);
if($db_found){
	$sql2="Delete * from users where user_n='".$name."' ";
	$record2=mysql_query($sql2);
	$sql="UPDATE users SET password='".$password."'  WHERE user_n= '".$name."'";
	$record=mysql_query($sql);
	echo "<html> <body background= \"685e18ff8147427079a14ce27d984688.jpg\">";
	echo "<h1><font color='Red'> Account Updated </font></h1>";
	echo "</html></body>";
	}
else{
	echo "No Database Found!";
}
mysql_close($db_handle);
?>
