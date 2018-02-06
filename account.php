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
$time = mysqli_fetch_row(mysqli_query($connect, "SELECT `lastvisit` FROM `users` WHERE username = '$username'"));
$first = mysqli_fetch_row(mysqli_query($connect, "SELECT `created_at` FROM `users` WHERE username = '$username'"));
$folder = "./$username/";
$userimage = "$username" . ".jpg";
$image = $folder . $userimage;
if(file_exists($image)){

}
else{
	$image = "";
}

?>
<html>
<head>
	<title>Account Information</title>
</head>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; 
			background-color: #324D5C;
			color: white;
		}
    </style>
<body>

<p>Account Name: <?php echo $_SESSION['username'];?></p>
<p>Joined us: <?php echo $first[0];?></p>
<p>Last Logged in : <?php echo $time[0];?></p>
<a href="welcome.php" class="btn btn-primary">Home</a>
<a href="delete.php" class="btn btn-danger">Delete Account</a>
<br>
<form enctype="multipart/form-data" method="post" action="profupload.php">
Send this file:<input name="userfile" type="file"/><br/>
<input type="submit" value="Upload Profile picture"/>
</form>
<img src="<?php echo $image ?>">
</body>
</html>