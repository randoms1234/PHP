<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
$host="localhost";
$username="root";
$password="randoms....";
$databasename="login";

$connect=mysqli_connect($host,$username,$password);//connects to the database
$db=mysqli_select_db($connect,$databasename);//selects the login database

$username = $_SESSION['username'];
$date = time();
$tim = date("r", $date);
$check_username = mysqli_query($connect, "SELECT `username` FROM `time` WHERE username = '$username'");
if(mysqli_num_rows($check_username)==$username){
	$name = "INSERT INTO `time`(`username`,`times`) VALUES('$username', '$tim')";
	mysqli_query($connect, $name);
}
else{	
	$time = "UPDATE `time` SET `times`= '$tim' WHERE username = '$username'";
	mysqli_query($connect, $time);
}
?>
