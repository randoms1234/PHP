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
$files = $_POST['file'];
$file = $folder . $files;

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
print($file);
?>