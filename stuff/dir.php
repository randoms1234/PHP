<?php
$dir = "/var/www/html";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

echo $a[0];


?>