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
$folder = "./$username/";
$delete = mysqli_query($connect, "DELETE FROM `users` WHERE username = '$username'");
mysqli_query($connect, "DELETE FROM `time` WHERE username = '$username'");
rmdir($folder);
// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();
header("location: login.php");


?>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; 
			background-color: #324D5C;
			color: white;
    </style>
<body>
<br>
<a href="welcome.php" class="btn btn-primary">Home</a>
</body>