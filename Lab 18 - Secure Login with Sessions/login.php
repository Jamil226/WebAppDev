<?php 
include("libraries/database-helper.php");
// include("libraries/variables.php");
?>
<?php
if (isset($_POST['submit']))
    {
    $Username = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);
    $Query = "SELECT * FROM superadmin WHERE username = '$Username' AND securepassword = '$SecurePassword'";
	// echo $Query;
	// die;
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0)
    {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->id;
        $_SESSION['USER_NAME'] = $row->username;
        $_SESSION['FULL_NAME'] = $row->firstname . " ". $row->lastname;
		header('Location:index.php');
		exit();
        // echo "<script>window.location.href='index.php';</script>";
        // exit();
    }
   else
   {
     ?>
     <script>
       alert("Invalid Credentials")
   </script>
   <?php
}	
}
?>
<!--
************************************************************************************************
                        Government College Sahiwal Alumni Portal
                        Developer Name : Muhammad Jamil
                        Development Date   : 28-07-2022
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Login | LL Ride</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
		<link rel="stylesheet" href="assets/fonts/icomoon/style.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />
	</head>

	<body class="bg-one">
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form class="my-5" method="post">
						<div class="card p-md-4 p-sm-3">
							<div class="login-form">
								<a href="../index.php" class="mb-4 d-flex">
									<img src="assets/images/logo-llride.png" class="img-fluid " alt="Logo" style="height:100% ; width:150px;" />
								</a>
								<h3 class="mt-5 mb-4">Login</h3>
								<div class="mb-3">
									<label class="form-label">Your Email</label>
									<input type="text" class="form-control" name="email" placeholder="Enter your email" />
								</div>
								<div class="mb-3">
									<label class="form-label">Your Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter password" />
								</div>
								<div class="d-grid py-3 mt-3">
									<button type="submit" name="submit" class="btn btn-lg btn-dark">
										LOGIN
									</button>
								</div>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>