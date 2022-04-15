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
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title></title>
	</head>

	<body>
		<form id="form1">
		<div id="dvContainer">
			<!-- This content needs to be printed. -->
            <!-- QUERY: retrive all users -->
			<?php
				$id = $_POST['idPOSTMAN'];
				if (!isset($id))
				{
					$id=$_SESSION['id'];
				}
				$query = "SELECT * FROM `tbl_login`";
				$result = $con->query($query);
			  ?>
			  <div class="row">
				<div class="col-md-12 grid-margin stretch-card">
				  <div class="card">
					<div class="card-body">
					  <p class="card-title">Advanced Table</p>
					  <div class="row">
						<div class="col-12">
						  <div class="table-responsive">
							<table id="example" class="display expandable-table" style="width:100%">
							  <thead>
								<tr>
								  <th>UserID</th>
								  <th>Username</th>
								  <th>Email</th>
								  <th></th>
								</tr>
								<?php while($row = $result->fetch_assoc()):?>
								<tr>
								  <td><?php echo $row['id']?></td>
								  <td><?php echo $row['fldUsername']?></td>
								  <td><?php echo $row['fldEmail']?></td>
								</tr>
								<?php endwhile;?>
							  </thead>
						  </table>
						  </div>
						</div>
					  </div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<input type="button" value="Print Table" id="btnPrint" onClick="window.print()"/>
		</form>
	</body>
</html>