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

if ( !isset($_POST['txtName'], $_POST['txtPassword']) ) {
	// Could not get the data that should have been sent.
	exit('ADMIN: Please fill both the username and password fields!');
}

// get the post records

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, fldPassword FROM admin_login WHERE fldUsername = ?')) {
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
			$_SESSION['status'] = 'Password Incorrect';
			// TODO: check if proper header
			header('Location: admindash.php');
		} else {
			// Incorrect password
			$_SESSION['status'] = 'Username Incorrect';
			header('Location: cpscproj.html');
		}
	} else {
		// Incorrect username
		header('Location: cpscproj.html');
	}

	$stmt->close();
}
?>
