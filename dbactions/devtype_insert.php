<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	require_once ("dbconfig.php");

	$u_devtype = filter_var($_POST["device_type"], FILTER_SANITIZE_STRING);
  $u_isactive = 1;
	if (empty($u_devtype)){
		die("Please enter your name");
	}

	// if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
	// 	die("Please enter valid email address");
	// }
	// if (empty($u_text)){
	// 	die("Please enter text");
	// }
  //
	// $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
  //
	// if ($mysqli->connect_error) {
	// 	die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	// }

	$statement = $dbconnect->prepare("INSERT INTO itms_devtype (devtypename, isactive) VALUES(?, ?)");
	$statement->bind_param('ss', $u_devtype, $u_isactive);

	if($statement->execute()){
		header('Location: ../index.php?administration&general&saved');
    // echo "Success!";
	}else{
		print $dbconnect->error;
	}
}
?>
