<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost";
$username = "ritambanerjee27@gmail.com";
$password = "CorvoAttano@1";
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
