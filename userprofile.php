<?php include('server.php') ?>

<?php include('datainsertion.php') ?>

<!DOCTYPE html>

<html>

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />



  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"

    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />



  <title>USER PROFILE</title>

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

          <li class="nav-item active">

            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="courses.php">Courses</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="exercises.php">Practice Exercises</a>

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

          <a href="login.php" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a>

          <a href="register.php" class="btn btn-success transition-hover btn-lg ml-3">Sign Up</a>

          <button class="btn header-btn-collapse-nav active collapsed" data-toggle="collapse"

            data-target=".header-nav-main nav" aria-expanded="false">

          </button>

        </form>

    <?php endif ?>

      </div>

    </nav>

    <br><br>

    <div class="container">

    	<div class="card">

  <div class="card-body">

<?php

 

$username = "tooba@tantschool-mysqldbserver";

$server="tantschool-mysqldbserver.mysql.database.azure.com";

$password="Admin123";

$dbname="quiz";

$con =  new mysqli($server, $username, $password, $dbname);



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

 

$name = $_SESSION['username'];

echo "<b>Hi  </b>". "<b>".$name."</b>";

echo "<br><br>";



$sql = "SELECT subjects, totalmarks, score  FROM userprofile  WHERE  username = '$name'";



$result = $conn->query($sql) or die($conn->error);



  while($row = $result->fetch_assoc()) {

    echo "<b>Subject: </b>" . $row["subjects"]. " -<b> Total Marks: </b>" . $row["totalmarks"]. " -<b> Score: </b>" . $row["score"];

    echo "<br><br>";

  }



$conn->close();

?>

</div>

</div>

</div>

</header>



  <br><br><br>

  <footer class="border-top">

  <div class="container pt-10 pb-9">

      <div class="row">

        <div class="col-sm-5">

         <img alt="TantSchool" src="school.png" class="mb-4" width="80">

        <p vertical-align="middle">TantSchool provides the best possible online learning experience.</p>

         

          <div class="social">

            <a class="social-facebook m-0" href="https://www.facebook.com/medlyncs"><i

                class="fab fa-facebook-f"></i></a>

            <a class="social-instagram m-0" href="https://www.instagram.com/medlyncs"><i

                class="fab fa-instagram"></i></a>

          </div>

        </div>

        <div class="col-sm-2">

          <h3 class="h6 mb-3">

            Quick Links

          </h3>

          <ul class="list-unstyled mb-0 text-white-50">

            <li><a class="m-list--link" style="color: purple" href="index.php">Home</a></li>

            <li><a class="m-list--link" style="color: purple" href="aboutus.php">About Us</a></li>



          </ul>

        </div>

        <div class="col-sm-2">

          <h3 class="h6 mb-3">

            Service

          </h3>

          <ul class="list-unstyled mb-0">

            <li><a class="m-list--link" style="color: purple" href="courses.php">Features</a></li>

            <li><a class="m-list--link" style="color: purple" href="exercises.php">Packages</a></li>

            <li><a class="m-list--link" style="color: purple" href="login.php">Sign in</a> </li>



          </ul>

        </div>

        <div class="col-sm-3">

          <h3 class="h6 mb-3">

            <a class="m-list--link" style="color: purple" href="contactus.php"> Contact Us </a>

          </h3>

          <strong class="" style="color: purple">Email</strong><br>

          <a class="m-link" style="color: purple" href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>



        </div>

      </div>

    </div>



    <!-- Copyright -->

    <div class="container m-gab-1 border-top">



      <div class="row">

        <div class="col-md-12 text-center">

          <p><span class="fs-17">©</span> 2020 <span style="color: purple" class="m-link">TantSchool</span>. All rights reserved.</p>

        </div>

      </div>

    </div>

    <!-- End Copyright -->

  </footer>

		

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







