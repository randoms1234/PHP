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


	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$folder".$_FILES['userfile']['name'])){
		print "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']}";
	}else{
		print"Upload Failed!";
	}

?>
<br>
<a href="welcome.php">home</a>