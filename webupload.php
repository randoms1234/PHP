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
$username = $_SESSION['username'];
$html = ".html"; 
$folder = "./$username/";
$name = $folder . $username . $html;
echo $name;
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$name")){
		$a = "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']} bytes";
	}else{
		print"Upload Failed!";
	}

?>
<body>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<style  type="text/css">
body{
	background-color: #324D5C;
}
p{
	color: white;
}
</style>
<br>
<p><?php echo $a?></p>
<a href="webedit.php" class="btn btn-primary">Edit HTML</a>
</body>