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

if (!isset($_POST["user_id"]) ) {
	// Could not get the data that should have been sent.
	exit('<h1>ADMIN: Please fill all fields!</h1>');
}

// $userid=$_SESSION['id']; // admin id: not the user

$user_id = $_POST["user_id"];
// get matching emai_user: only first row, since there is only one unique user_id (so there is only one row)
$user_tuple = (mysqli_query($con, "SELECT * FROM `tbl_login` WHERE `id` = '$user_id'"))->fetch_assoc();

mysqli_query($con,"DELETE FROM `tbl_login` WHERE `id`='$user_id'");
// do not delete data of USER from `user` table:
// mysqli_query($con,"DELETE FROM `user` WHERE `userid`='$user_id'");
// Admin can do mantainance manually 

// insert the removedUserid to the table mantainance, so later admin can manually remove all user data from mantainance section
// set the counterExpiry to 2, so the first mantaince application will not delete any user data from users table
// if admin perform mantainance like every 30 days then user has at least 30 days to recover its data
if (mysqli_affected_rows($con) > 0)
{
    // only add if the user has been removed from the login
    // this avoids junk stuff if input is wrong
    if ($user_tuple){
        $email_user = $user_tuple['fldEmail'];
        // mysqli_query($con,"INSERT INTO `mantainance` (`useridNotDeleted`, `counterExpiry`) VALUES ('$user_id', '2')");
        mysqli_query($con,"INSERT INTO `mantainance` (`useridNotDeleted`, `counterExpiry`, `fldEmail`) VALUES ('$user_id', '2', '$email_user')");
    }
    else
    {
        // THIS SHOULD never happen
        exit('<h1>ADMIN: could not fetch e-mail user!</h1>');
    }
    // echo "<h1>SUCCESSFUL removal of user. </h1>";
    // echo "<h1>Its information will be deleted after the next 2 mantainances. </h1>";

}
else
{
    exit('<h1>ADMIN: invalid userid to remove!</h1>');
}

header('Location: admindash.php');
// header('<script> setTimeout(function() { window.location = "index.php"; }, 2000); </script>; Location: admindash.php');
// do not sleep but rather let the client side browser know to wait a bit before refreshing
// header( "Refresh:2; Location: admindash.php");

?>
