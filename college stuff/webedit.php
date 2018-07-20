<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

  $username = $_SESSION['username'];
  $html = ".html"; 
  $name = $username . $html;
  $folder = "./$username/";
  $name2 = $folder . $username . $html;
  if(file_exists($username)){
  }
  else{
  	 if(file_exists($name)){
  	}
  	else{
    	$file = fopen("./$username/$username.html",'a+');
  	}
  	}
if (isset($_POST['text'])) {
  file_put_contents($name2, $_POST['text']);
}
  $text = file_get_contents($name2);
  
?>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<style>
  body{
    background-color: #324D5C;
  }
  #textboxid{
    height:500px;
    width: 1000px;
  }

</style>
<body>
<form action="webedit.php" method="post">
<textarea id="textboxid" name="text"><?php echo htmlspecialchars($text)?></textarea>
<input class="btn btn-primary" type="submit" />
</form>
<a href="welcome.php" class="btn btn-primary">home</a>
<a href="delpage.php" class="btn btn-danger">Delete the webpage</a>
<br>
<br>
<a href="<?php echo $name2 ?>" class="btn btn-primary">View the webpage</a>
</body>

  