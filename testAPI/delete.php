<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'shardarq_471p';
$DATABASE_PASS = 'password';
$DATABASE_NAME = 'shardarq_db_connect';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['shift_id'])) {
	// Could not get the data that should have been sent.
	exit('Please fill all fields!');
}

$userid=$_SESSION['id'];
$shiftid=$_POST['shift_id'];

mysqli_query($con,"DELETE from user WHERE userid='$userid' AND id='$shiftid'");
header('Location: userdash.php');
?>