<?php
// Initialize the session
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
  $password="";
  $databasename="login";

  $connect=mysqli_connect($host,$username,$password);//connects to the database
  $db=mysqli_select_db($connect,$databasename);//selects the login database
 	$username = $_SESSION['username'];//gets the username from the session
	$sql = "UPDATE `users` SET `visits`= visits + 1 WHERE username = '$username'";// adds one view everytime a user opens the page
	mysqli_query($connect, $sql);

	$sq = "SELECT `visits` FROM `users` WHERE username = '$username'";
	$visits = mysqli_fetch_row(mysqli_query($connect, $sq));//grabs the number of times the user has visited the page

	if($username == "Admin")
	{

		$helloa = "Greetings your Highness";
		$hello = "";
		$good = "";
	}
	elseif($username == "Gudmondson")
	{
		$good = "Are you goose goose?";
		$helloa = "";
		$hello = "";
	}
  	else{
  		$hello = "hello $username";
		$helloa = "";
		$good = "";
  	}

  	//profile picture
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Talk to me Goose</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; 
			background-color: #324D5C;
			color: white;
		}
		.pigeon{
			height:600px;
			width:1000px;
		}
		.goose{
			height: 150px;
			width: 300px;
		}
		.page-header{
			color: white;
		}
    </style>
</head>
<body>
    <div class="page-header">
		<h2><?php echo $helloa; ?></h2>
		<h2><?php echo $good; ?></h2>
		<h2><?php echo $hello; ?></h2>
    </div>
	
	

<p>you have visited this page <?php echo $visits[0]; ?> times</p>
	<a href="webupload2.php" class="btn btn-primary">upload</a>
	<a href="webedit.php" class="btn btn-primary">edit webpage</a>
	<hr>
	<a href="account.php" class="btn btn-primary">Account Information</a>
    <a href="logout.php" class="btn btn-primary">Sign Out</a>
    <br>
    <br>
	<img src="goose.jpg" class="goose">
	<img src="pigeon.gif" class="pigeon">
	
</body>
	
	
</html>