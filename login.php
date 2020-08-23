<?php include('server.php') ?>

<!DOCTYPE html>

<html>

<head>

  <title>Login</title>

  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login </title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-image: linear-gradient(to top, rgba(190, 45, 219, 0.733), rgb(240, 66, 225));">
<a class="navbar-brand" href="index.php">TantSchool</a>

         

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>

                    </li>

                    <li class="nav-item active">

                        <a class="nav-link" href="courses.php">Courses</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="./exercises.php">Practice Exercises</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="about.php">About Us</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="contactus.php">Contact Us</a>

                    </li>

                </ul>

				<?php  if (isset($_SESSION['username'])) : ?>
        <a href="userprofile.php">
        <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></a>
        <a href="exercises.php?logout='1'" class="btn btn-info transition-hover btn-lg ml-3">Logout</a>
        <?php else: ?>

        <form class="form-inline my-2 my-lg-0">

          <!--<a href="login.php" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a>-->

          <a href="register.php" class="btn btn-success transition-hover btn-lg ml-3">Sign Up</a>

          

          </button>

        </form>

    <?php endif ?>

            </div>

		</nav>

		</header>

	

	<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

			<div class="wrap-login100">

				<form class="login100-form validate-form"method="post" action="login.php">

					<span class="login100-form-logo">

						<i class="zmdi zmdi-landscape"></i>

					</span>



					<span class="login100-form-title p-b-34 p-t-27">

						Log in

					</span>



					<div class="wrap-input100 validate-input" data-validate = "Enter username">

						<input class="input100" type="text" name="username" placeholder=" Enter Username">

						<span class="focus-input100" data-placeholder="&#xf207;"></span>

					</div>



					<div class="wrap-input100 validate-input" data-validate="Enter password">

						<input class="input100" type="password" name="password" placeholder="Enter Password">

						<span class="focus-input100" data-placeholder="&#xf191;"></span>

					</div>



					<div class="contact100-form-checkbox">

						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

						<label class="label-checkbox100" for="ckb1">

							Remember me

						</label>

					</div>



					<div class="container-login100-form-btn">

						<button class="login100-form-btn" href="quiz.php" type="submit" class="btn" name="login_user">

							Login

						</button>

					</div>



					<div class="text-center p-t-90">

						<a class="txt1" href="#">

							Forgot Password?

						</a>

                    </div>

                    <div class="text-center p-t-90">

                    <p>

  		Not yet a member? <a href="register.php">Sign up</a>

  	</p></div>

  	

  </form>

</body>

</html>    

	

			</div>

		</div>

	</div>

	



	<div id="dropDownSelect1"></div>

	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>

	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>



</body>

</html>





