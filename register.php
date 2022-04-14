<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'shardarq_471p';
$DATABASE_PASS = 'password';
$DATABASE_NAME = 'shardarq_db_connect';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['u_name'],$_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['address'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill all fields!');
}

$username=$_POST['u_name'];
$password=$_POST['password'];
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['email'];
$address=$_POST['address'];

mysqli_query($con,"insert into `tbl_login` (id,fldUsername,fldPassword, fldFirstName, fldLastName, fldEmail, fldAddress) values ('','$username','$password','$fname','$lname','$email','$address')");
header('Location: cpscproj.html');
?>
