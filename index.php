<?php include "config.php"; ?>
<?php include "functions.php"; ?>
<?php if (isset($_SESSION['login_status']) && $_SESSION['login_status']===true) {
	header('location:dashboard.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Note Book</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>


	<?php 

	if (isset($_POST['loginbtn'])) {
		$uemail = $_POST['loginemail'];
		$upass = md5($_POST['loginpassword']);

		$sql = "SELECT * FROM $TBL_USER WHERE user_email = '$uemail' AND user_password = '$upass'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {

		    $msg = "Login Successfull";
		    
		    $_SESSION['login_status'] = true; 
		    $_SESSION['username'] = $row['user_name'];
		    $_SESSION['userID'] = $row['ID'];

		    header( "refresh:1;url=dashboard.php" );

		  }
		} else {
		   $err = "Unknown Username and Password. Please try again";
		}


	}


	 ?>

	<section class="vh-100" style="background-color: #eee;">
	  <div class="container h-100">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-lg-12 col-xl-11">
	        <div class="card text-black" style="border-radius: 25px;">
	          <div class="card-body p-md-2">
	            <div class="row justify-content-center">
	              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

	                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

	                <form class="mx-1 mx-md-4" method="post" action="">
	                	<?php 
	                		if (isset($err)) {
	                			echo '
		                		<div class="alert alert-warning alert-dismissible fade show" role="alert">
							 	  '.$err.'
								  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
	                		}

	                		if (isset($msg)) {
	                			echo '
		                		<div class="alert alert-success alert-dismissible fade show" role="alert">
							 	  '.$msg.'
								  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
	                		}
	                	 ?>
	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="email" name="loginemail" id="form3Example3c" class="form-control" />
	                      <label class="form-label" for="form3Example3c">Your Email</label>
	                    </div>
	                  </div>

	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="password" name="loginpassword" id="form3Example4c" class="form-control" />
	                      <label class="form-label" for="form3Example4c">Password</label>
	                    </div>
	                  </div>


	                  <div class="d-flex justify-content-center justify-content-between mx-3 mb-3 mb-lg-4">
	                    <input type="submit" name="loginbtn" class="btn btn-primary btn-lg" value="Login">
	                    <a type="button" href="registration.php" class="btn btn-link btn-lg">Registration</a>
	                  </div>

	                </form>

	              </div>
	              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

	                <img src="assets/images/login-reg.webp"
	                  class="img-fluid" alt="Sample image">

	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/main.js"></script>

</body>
</html>