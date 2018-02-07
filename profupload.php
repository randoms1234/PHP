<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
$username = $_SESSION['username'];
$folder = "./$username/";
$userimage = "$username" . ".jpg";


if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$folder". $userimage)){
	header("location: account.php");
	}else{
		print"Upload Failed. Please try again later";
	}



?>