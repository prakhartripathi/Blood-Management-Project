<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = '';
 $mysql_db = "blood";
$conn_error = "Please try later";
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
 if(!$con){
 	die($conn_error);
 }
 else{
 	
 }

?>