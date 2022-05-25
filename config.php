<?php 
date_default_timezone_set('Asia/Dhaka');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note-book-b11";

$conn = new mysqli($servername,$username,$password); 


if($conn->connect_error){
	die('Connection failed!!');
}


$q =  $conn->query("drop DATABASE databasename00000000007");

if ($q==true) {
	echo "data query successfull";
}else{
	echo "faild ".$conn->error;
}