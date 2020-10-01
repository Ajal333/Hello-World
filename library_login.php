<?php
$user_name = "root";
$server="localhost";
$password="";
$database="library";
$u_name=$_POST['name'];
$password=$_POST['password'];
$db_handle=mysql_connect("localhost" , "root" , "");
if(!$db_handle){
	die("Could not connect");
}
$db_found=mysql_select_db($database);
if($db_found){
	$query=("SELECT * FROM users");
	$result=mysql_query($query);
	while($record=mysql_fetch_array($result)){
		if(strcmp($u_name , $record['user_n'])==0){
				if(strcmp($password , $record['password'])==0){
				include 'library_newhome.html';
			}
						else{
		echo "<script type='text/javascript'>alert('Incorrect user name or password');</script>";
		break;
	}
		}
}
}
else{
	echo "No Database Found!";
}
mysql_close($db_handle);
?>
