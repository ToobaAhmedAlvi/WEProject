

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <title>TANT SCHOOL</title>
</head>
<style>
    marquee{
        background:green;
        color:white;
        letter-spacing:1px;
        word-spacing:2px;
    }
    </style>
<body>
 <marquee  class="navbar-brand">WELCOME TO TANTSCHOOL . POLISH YOUR PROGRAMMING SKILLS WITH INTERESTING VIDEOS AND QUIZZES</marquee>
      <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.php">TantSchool</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.html">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exercises.html">Practice Exercises</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.html">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="login.php" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a>
          <a href="registration.php" class="btn btn-success transition-hover btn-lg ml-3">Register</a>
          <button class="btn header-btn-collapse-nav active collapsed" data-toggle="collapse"
            data-target=".header-nav-main nav" aria-expanded="false">
            <i class="fas fa-bars"></i>
          </button>
        </form>
      </div>
    </nav>
    <br><br>
    <section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="200.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..."
              data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              Welcome to <span class="text-primary">TantSchool</span>. <br>
              Learn anything.
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
              TantSchool is an educational website for learning various technologies online from scratch.
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-left">
              <a href="courses.html" class="btn btn-primary shadow lift mr-1">
                Explore Courses <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
              </a>
              <!-- <a href="docs/index.html" class="btn btn-primary-soft lift">
                Documentation
              </a>-->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    <br><br><br>
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up">
            <div class="icon text-primary mb-3">
              <img src="1.png" width="50" height="50" viewBox="0 0 50 50">
            </div>
            <h3>
              Learn the latest skills
            </h3>
            <p class="text-muted mb-6 mb-md-0">
              TantSchool is built to make your learning easier. You can like programming languages like HTML, CSS,
              Python, and more.
            </p>
          </div>
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
            <div class="icon text-primary mb-3">
              <img src="2.png" width="50" height="50" viewBox="0 0 50 50">
            </div>
            <h3>
              Get ready for a career
            </h3>
            <p class="text-muted mb-6 mb-md-0">
              in high-demand fields like Web Development, Python Development and many more.
            </p>
          </div>
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon text-primary mb-3">
              <img src="3.png" width="50" height="50" viewBox="0 0 50 50">
            </div>
            <h3>
              Upskill your organization
            </h3>
            <p class="text-muted mb-6 mb-md-0">
              with our training and practicing programs
            </p>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
  </header>

  <div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>



