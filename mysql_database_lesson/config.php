<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "school";
//$conn = mysqli_connect()
$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
 echo "connection succeeful";
}else{
 echo "error";
}