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

$userid=$_SESSION['id'];


// IDEA: loop through all rows from `mantainance` table
// then get the user_id
// then decrease the counter_expiry value
// then check if the counter value is <=0

// if yes: delete all user data from users
// if no: do nothing

// decrement counters
mysqli_query($con,"UPDATE `mantainance` SET `counterExpiry`=`counterExpiry`-1");


// $adminid=$_SESSION['id'];
$adminid = $_POST['idPOSTMAN'];
				if (!isset($adminid))
				{
					$adminid=$_SESSION['id'];
				}
// get accounts that need to be deleted
$queryMantainance = "SELECT * FROM `mantainance` WHERE `counterExpiry`<=0";
$resultMantainance = $con->query($queryMantainance);

// start removing accunts that need to be deleted
while($row = $resultMantainance->fetch_assoc()):
    $deleteid  = $row['useridNotDeleted'];
    mysqli_query($con,"DELETE FROM `user` WHERE `userid` = '$deleteid'");
endwhile;



// remove deleted user accounts
mysqli_query($con,"DELETE FROM `mantainance` WHERE `counterExpiry` <= 0");
// return to admindash
header('Location: admindash.php');
?>
