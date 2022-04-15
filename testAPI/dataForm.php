<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Shift</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Add info</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action='add.php'>
                        <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <input class="input--style-6" type="date" name="date" placeholder="date">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Start time</div>
                            <div class="value">
                                <input class="input--style-6" type="time" name="s_time" placeholder="time">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">End time</div>
                            <div class="value">
                                <input class="input--style-6" type="time" name="e_time" placeholder="time">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Job</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="job_name" placeholder="job">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="company" placeholder="company">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pay rate/hr</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="pay_rate" placeholder="pay_rate">
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="street, road, house/apartment no.">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="password" name="password" placeholder="password">
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="form-row">
                            <div class="name">Notes</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Notes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
							<button class="btn btn--radius-2 btn--blue-2" type="submit">Submit info</button>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->


    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->