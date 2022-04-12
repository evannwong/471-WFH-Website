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

if ( !isset($_POST['txtName'], $_POST['txtPassword']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// get the post records

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, fldPassword FROM tbl_login WHERE fldUsername = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['txtName']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $fldPassword);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if ($_POST['txtPassword'] === $fldPassword) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['txtName'];
			$_SESSION['id'] = $id;
			//echo 'Welcome ' . $_SESSION['name'] . '!';
			header('Location: userdash.php');
		} else {
			// Incorrect password
			echo 'Incorrect password!';
		}
	} else {
		// Incorrect username
		echo 'Incorrect username!';
	}

	$stmt->close();
}
?>
