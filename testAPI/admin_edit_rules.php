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
	exit('ADMIN: Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['descr'],$_POST['perm'], $_POST["rule_id"]) ) {
	// Could not get the data that should have been sent.
	exit('ADMIN: Please fill all fields!');
}

$userid=$_SESSION['id'];
$rule_id = $_POST["rule_id"];
$Description = $_POST["descr"];
$Permission = $_POST["perm"];

mysqli_query($con,"UPDATE `rules` SET `Description`='$Description',`Permission`='$Permission' WHERE `id`='$rule_id'");
header('Location: admindash.php');
?>
