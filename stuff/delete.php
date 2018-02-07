<?php
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../login.php");
  exit;
}

$host="localhost";
$username="root";
$password="randoms....";
$databasename="login";

$connect=mysqli_connect($host,$username,$password);//connects to the database
$db=mysqli_select_db($connect,$databasename);//selects the login database
$username = $_SESSION['username'];
$bye = mysqli_query($connect, "DELETE FROM `users` WHERE username = '$username'");
$_SESSION = array();
 
// Destroy the session.
session_destroy();
echo "your account has been deleted bye";
?>
<br>
<a href="../login.php">Home</a>