<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

	<title>Exercises</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
          <li class="nav-item">
            <a class="nav-link" href="./courses.php">Courses</a>
          </li>
          <li class="nav-item active">
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
        <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <a href="exercises.php?logout='1'" class="btn btn-info transition-hover btn-lg ml-3">Logout</a>
    <?php endif ?>
      </div>
    </nav>
    </header>
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
    <!--<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="exercises.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>-->
</div>
<br><br><br>
<div class="container">
    <h3 class="text-center">You can test your skills with Tantschool's Quizzes.</h3><br><br>
    <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title">HyperText MarkupLanguage (HTML)</h4><br>
        <p class="card-text">Test your HTML skills to become an expert in it.</p><br>
        <a href="htmlquiz.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-info transition-hover btn-lg ml-3">HTML Quiz</a>
      </div><br><hr><br>
      <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title">Cascading Style Sheets (CSS)</h4><br>
        <p class="card-text">Test your CSS skills to become an expert in it.</p><br>
        <a href="cssquiz.php" style="background-color: rgba(205, 34, 248, 0.767);"class="btn btn-info transition-hover btn-lg ml-3">CSS Quiz</a>
      </div><br><hr><br>
      <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title">Python Programming Language</h4><br>
        <p class="card-text">Test your python skills to become an expert in it.</p><br>
        <a href="pythonquiz.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-info transition-hover btn-lg ml-3">Python Quiz</a>
      </div><br><hr><br>
      <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title">Hypertext Processor Language (PHP)</h4><br>
        <p class="card-text">Test your PHP skills to become an expert in it.</p><br>
        <a href="phpquiz.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-info transition-hover btn-lg ml-3">PHP Quiz</a>
      </div>
</div>
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