<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'itms_demo';

$dbconnect = new mysqli($servername, $username, $password, $dbname);

if ($dbconnect->connect_error) {
  die('Error : ('. $dbconnect->connect_errno .') '. $dbconnect->connect_error);
  // die("Connection failed: " . $dbconnect->connect_error);
}
//echo "Connected successfully";
?>
