<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Note Book</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>

	<section class="vh-100" style="background-color: #eee;">
	  <div class="container h-100">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-lg-12 col-xl-11">
	        <div class="card text-black" style="border-radius: 25px;">
	          <div class="card-body p-md-2">
	            <div class="row justify-content-center">
	              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

	                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

	                <form class="mx-1 mx-md-4">

	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="text" name="regName" id="form3Example1c" class="form-control" />
	                      <label class="form-label" for="form3Example1c">Your Name</label>
	                    </div>
	                  </div>

	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="email" name="regEmail" id="form3Example3c" class="form-control" />
	                      <label class="form-label" for="form3Example3c">Your Email</label>
	                    </div>
	                  </div>

	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="password" name="regPass" id="form3Example4c" class="form-control" />
	                      <label class="form-label" for="form3Example4c">Password</label>
	                    </div>
	                  </div>

	                  <div class="d-flex flex-row align-items-center mb-2">
	                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
	                    <div class="form-outline flex-fill mb-0">
	                      <input type="password" name="regConfirmPass" id="form3Example4cd" class="form-control" />
	                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
	                    </div>
	                  </div>

	                  <div class="form-check d-flex justify-content-center mb-5">
	                    <input class="form-check-input me-2" type="checkbox" name="regAgree" value="" id="form2Example3c" />
	                    <label class="form-check-label" for="form2Example3">
	                      I agree all statements in <a href="#!">Terms of service</a>
	                    </label>
	                  </div>

	                  <div class="d-flex justify-content-between mx-4 mb-3 mb-lg-4">
	                    <button type="button" name="regbtn" class="btn btn-primary btn-lg">Register</button>
	                    <a type="button" href="index.php" class="btn btn-link btn-lg">Login</a>
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