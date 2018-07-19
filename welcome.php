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
  $password="randoms....";
  $databasename="login";

  $connect=mysqli_connect($host,$username,$password);//connects to the database
  $db=mysqli_select_db($connect,$databasename);//selects the login database
 	$username = $_SESSION['username'];//gets the username from the session
	$sq = "SELECT `visits` FROM `users` WHERE username = '$username'";
	$visits = mysqli_fetch_row(mysqli_query($connect, $sq));//grabs the number of times the user has visited the page

	if($username == "Admin")
	{

		$helloa = "Greetings your Highness";
		$hello = "";
		$good = "";
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
	<link rel="stylesheet" type="text/css" href="home.css"/>
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
	
	

<p>you have logged in <?php echo $visits[0]; ?> times</p>
	<a href="uploadtest.php" class="btn btn-primary">upload to the server</a>
	<a href="files.php" class="btn btn-primary">Server Files</a>
	<hr>
	<a href="account.php" class="btn btn-primary">Account Information</a>
    <a href="logout.php" class="btn btn-primary">Sign Out</a>
    <br>
    <br>
    <a href="https://mail.protonmail.com/login" class="btn btn-primary">Protonmail</a>
 	<a href="https://www.youtube.com" class="btn btn-primary">Youtube</a>
	<a href="https://www.twitter.com" class="btn btn-primary">Twitter</a>
	<a href="https://www.reddit.com" class="btn btn-primary">Reddit</a>
	<br>
</div>
	
</body>
	
	
</html>