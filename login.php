<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','shardarq_db_connect');

// get the post records

$txtName = $_POST['txtName'];
//$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];


// database insert SQL code
$sql = "INSERT INTO `tbl_login` (`Id`, `fldUsername`, `fldPassword`) VALUES ('0', '$txtName', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Username inserted";
}
}
else
{
	echo "Password inserted";
	
}
?>
