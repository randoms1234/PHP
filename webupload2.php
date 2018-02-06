<?php
// Initialize the session
session_start();
 
 ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/log.txt');
	error_reporting(E_ALL);
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

?>
<html>
<body>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<style  type="text/css">
body{
	background-color: #324D5C;
}
form{
	color: white;
}
</style>
<form enctype="multipart/form-data" method="post" action="webupload.php">
Upload this web page:<input  name="userfile" type="file"/><br/>
<input class="btn btn-primary" type="submit" value="send file"/>
</form>
</body>
</html>