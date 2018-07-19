<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

$username = $_SESSION['username'];

  $folder = "./$username/";


	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$folder".$_FILES['userfile']['name'])){
		print "Received {$_FILES['userfile']['name']} - its size is {$_FILES['userfile']['size']}";
		$file = $_FILES['userfile']['name'];
		chmod($file, 0777);
	}else{
		print"Upload Failed!";
	}

?>
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
<body>
<br>
<a href="welcome.php" class="btn btn-primary">home</a>
</body>