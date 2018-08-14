<?php
	
	$conn_error = 'could not connect';
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_password = '';
	$mysql_db = 'onlinefrshop';
	
	$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
	if(!$conn)
	{
		die($conn_error); 
	}
	
?>