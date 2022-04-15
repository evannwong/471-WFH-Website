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

if ( !isset($_POST['date'],$_POST['s_time'], $_POST['e_time'], $_POST['job_name'], $_POST['company'], $_POST['pay_rate']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill all fields!');
}

$userid=$_SESSION['id'];
$date=$_POST['date'];
$start=$_POST['s_time'];
$end=$_POST['e_time'];
$job=$_POST['job_name'];
$company=$_POST['company'];
$pay=$_POST['pay_rate'];

$dateTimeObject1 = date_create($start); 
$dateTimeObject2 = date_create($end);
$difference = date_diff($dateTimeObject1, $dateTimeObject2); 

$hours=$difference->h;
$earned=$hours * $pay;

mysqli_query($con,"insert into `user` (Date, Start, End, id, userid, Job, Company, Pay_rate, Hours_worked, Amount_earned) values ('$date','$start','$end', '', '$userid', '$job','$company','$pay','$hours', '$earned')");
header('Location: userdash.php');
?>