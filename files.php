<?php
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/log.txt');
	error_reporting(E_ALL);
$host="localhost";
$username="root";
$password="randoms....";
$databasename="login";

$connect=mysqli_connect($host,$username,$password);//connects to the database
$db=mysqli_select_db($connect,$databasename);//selects the login database
$username = $_SESSION['username'];
$folder = "./$username/";
$files = scandir($folder, 1);
print_r($files);
?>
<head>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; 
			background-color: #324D5C;
			color: white;
			position: fixed;
    		top: 50%;
    		left: 50%;
    		margin-top: -100px;
    		margin-left: -400px;
		}
    </style>
</head>
<body>

<form action="download.php" method="post">
<input type="text" name="file">
<input class="btn btn-primary" type="submit" value="download file"/>
</form>
<form action="delfile.php" method="post">
<input type="text" name="fil">
<input class="btn btn-primary" type="submit" value="Delete File"/>
</form>
<a class="btn btn-primary" href="welcome.php">Home</a>
</body>