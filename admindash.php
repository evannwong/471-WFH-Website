<?php 
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'shardarq_471p';
$DATABASE_PASS = 'password';
$DATABASE_NAME = 'shardarq_db_connect';
$connect = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
?>


<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- <template used from -->
    <!-- https://github.com/BootstrapDash/skydash-free-bootstrap-admin-template/tree/main/template -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="file:///F:/patrick/dbproj/images/favicon.png">
</head>
<body>
  <div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <!-- check h3 -->
                  <h3 class="font-weight-bold">Welcome Admin <?php echo $_SESSION['name']?></h3> 
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! </h6>
                   <!-- You have <span class="text-primary">1 shift submitted</span></h6> -->
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <!-- DONE: php use calendar date getter STATUS: LOOKS GOOD -->
                     <!-- <i class="mdi mdi-calendar"></i> Today (31 March 2022) -->
                     <i class="mdi mdi-calendar"></i> Today <? echo date('m/d/Y h:i:s a', time()); ?>
                    </button>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="https://bsscommerce.com/blog/wp-content/uploads/2021/04/0223_637219445004061799.jpeg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>-25<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Calgary</h4>
                        <h6 class="font-weight-normal">Canada</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <!-- check href dataForm.php -->
                    <a href="https://shardarquraishi.com/dbproj/admin_add_rulesform.html">
                    <div class="card-body">
                      
                      <p class="fs-30 mb-2">Add rule</p>
                      
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <!-- check href editForm-->
                    <a href="https://shardarquraishi.com/dbproj/admin_edit_rulesform.html"> 
                    <div class="card-body">
                      
                      <p class="fs-30 mb-2">Edit rule</p>
                      
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <!-- check href deleteform-->
                    <a href="https://shardarquraishi.com/dbproj/admin_delete_rulesform.html">
                    <div class="card-body">
                      
                      <p class="fs-30 mb-2">Delete rule</p>
                      
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <a href="https://shardarquraishi.com/dbproj/admin_retrieve.php">
                      <div class="card-body">
                        
                        <p class="fs-30 mb-2">Rules retrieve</p>
                        
                      </div>
                    </a>
                  </div>
                </div>
              </div>


              <div class = "row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                </div>
              </div>


              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <!-- check href editForm-->
                    <a href="https://shardarquraishi.com/dbproj/admin_removeUserForm.html"> 
                    <div class="card-body">
                      
                      <p class="fs-30 mb-2">Remove user</p>
                      
                    </div>
                    </a>
                  </div>
                </div>


                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <a href="https://shardarquraishi.com/dbproj/admin_retrieveUsers.php">
                      <div class="card-body">
                        
                        <p class="fs-30 mb-2">Users retrieve</p>
                        
                      </div>
                    </a>
                  </div>
                </div>
              </div>


            </div>
          </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Users</p>
                            <!-- PERFORM QUERY to get total number of users: count the rows in user_login table -->
                              <!-- <h1 class="text-primary">1</h1> -->
                              <?php
                                $query = "SELECT * FROM `tbl_login`";
                                $result = $connect->query($query);
                                $numOfUsers = mysqli_num_rows($result);
                              ?> 
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Number of users: <?php echo $numOfUsers ?></h3>
                              <!-- <p class="mb-2 mb-xl-0">NUMBER OF WORKING SHIFTS = ? FROM ? TO ?</p> -->
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								
							</div>
            </div>
          </div>

          <!-- check what i should fetch from result! it should be the rules -->
          <!-- I think every admin can access to see all rules -->
          <!-- QUERY: retrieve all rules -->
          <?php
          $id=$_SESSION['id'];
          $query = "SELECT * FROM `rules`";
          $result = $connect->query($query);
          ?>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Rules Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Rules num</th>
                              <th>description</th>
                              <th>permission/priviledge</th>
                            </tr>
              <!-- check if this correct -->
              <!-- QUERY: retrive and display every rule -->
              <?php while($row = $result->fetch_assoc()):?>
							<tr>
							  <td><?php echo $row['id']?></td>
							  <td><?php echo $row['Description']?></td>
							  <td><?php echo $row['Permission']?></td>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->





</body></html>