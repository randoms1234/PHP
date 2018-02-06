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
  $password="";
  $databasename="login";

  $connect=mysqli_connect($host,$username,$password);//connects to the database
  $db=mysqli_select_db($connect,$databasename);//selects the login database
  $username = $_SESSION['username'];
  $html = ".html";
  $folder = "./$username/";
  $name = $folder . $username . $html;
  unlink($name);




?>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<style>
  body{
    background-color: #324D5C;
    color: white;
  }

</style>
<body>
<p>The File <?php echo $name; ?> has been purged</p>
<a href="./welcome.php">Home</a>
</body>	