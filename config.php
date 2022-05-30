<?php 
session_start();
date_default_timezone_set('Asia/Dhaka');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note-book-b11";

$conn = new mysqli($servername,$username,$password,$dbname); 


if($conn->connect_error){
	die('Connection failed!!');
}

// DB tables
$TBL_USER = "nb_users";
$TBL_NOTES = "nb_notes";
