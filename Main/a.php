<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome JDBMS Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-40 p-r-40 p-t-178">
					<span class="login100-form-title">
						 <?php
    if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
    }
?>
                        <br>
                        Welcome Administrator!
					</span>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='insertcase.php'>
							Insert a New Case
						</button>
					</div>
                    <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='retrieve.php'>
							Retrieve Case Details
						</button>
					</div>
                    <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='update.php'>
							Update Case Information
						</button>
					</div>
                     <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='delcase.php'>
							Delete 'Completed' Cases
						</button>
					</div>
                     <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='addjudge.php'>
							Add a new Judge
						</button>
					</div>
                     <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='deljudge.php'>
							Delete a Judge
						</button>
					</div>
                     <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='addlawyer.php'>
							Add a New Lawyer
						</button>
					</div>
                     <br>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='dellawyer.php'>
							Delete a Lawyer
						</button>
					</div>
                    <br>
                     <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='redtjudges.php'>
							List of Retired Judges
						</button>
					</div>
                    <br>
                    
                     <div class="container-login100-form-btn">
						<button class="login100-form-btn" formAction='logout.php'>
							Logout
						</button>
					</div>
                    <br>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>