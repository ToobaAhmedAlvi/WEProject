<?php include('server.php') ?>



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

    





<style>

* {

  box-sizing: border-box;

}





input[type=text], select, textarea {

  width: 100%;

  padding: 12px;

  border: 1px solid #ccc;

  border-radius: 4px;

  resize: vertical;

}



label {

  padding: 12px 12px 12px 0;

  display: inline-block;

  color: white;

}



input[type=submit] {

  background-color: white;

  color: #800080;

  

  border: none;

  border-radius: 4px;

  cursor: pointer;

  float: right;

  text-align: center;

  size: 150%;

}



input[type=submit]:hover {

  background-color: #DDA0DD;

}



.container {

  border-radius: 5px;

  background-color: white;

 

  padding: 20px;

}



.col-25 {

  float: left;

  width: 25%;

  margin-top: 6px;

}



.col-75 {

  float: left;

  width: 75%;

  margin-top: 6px;

}



/* Clear floats after the columns */

.row:after {

  content: "";

  display: table;

  clear: both;

}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */

@media screen and (max-width: 600px) {

  .col-25, .col-75, input[type=submit] {

    width: 100%;

    margin-top: 0;

  }

}

</style>

</head>

<body>



<h2 style="text-align: center; color: purple;">We'd love to hear from you</h2>

<br><br>





<div class="container" class="bg"  style="background-image: url(bg.jpeg); background-repeat: no-repeat; background-size: cover;">



  <form onsubmit="myFunction()">

      <div class="row">

      <div class="col-25">

        <label for="fname">First Name</label>

      </div>

      <div class="col-75">

        <input type="text" id="fname" name="firstname" required placeholder="Your name..">

      </div>

    </div>

    <div class="row">

      <div class="col-25">

        <label for="lname">Last Name</label>

      </div>

      <div class="col-75">

        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      </div>

    </div>

    



<div class="row">

      <div class="col-25">

        <label for="lname">Email</label>

      </div>

      <div class="col-75">

        <input type="email" id="email" name="email" required placeholder="example@gmail.com" style="height: 50px;   width: 100%;">

      </div>

    </div>





    <div class="row">

      <div class="col-25">

        <label for="message">Message</label>

      </div>

      <div class="col-75">

        <textarea id="message" name="message" required placeholder="Write something.." style="height:200px"></textarea>

      </div>

    </div>

    <div class="row">

      <input type="submit" value="Submit">

    </div>

  </form>

</div>

<script>

function myFunction() {

  alert("The response has submitted");

}

</script>



  

    





<br><br><br><br><br><br><br>

    <section class="py-8 py-md-11 border-bottom">

      <div class="container">

        <div class="row">

          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up">

            <div class="icon text-primary mb-3">

              <img src="1.png" width="100" height="100" alt="..">

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

              <img src="2.png" width="100" height="100" alt="..">

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

              <img src="3.png" width="100" height="100" alt="..">

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

            <li><a class="m-list--link" href="index.php"  style="color: purple">Home</a></li>

            <li><a class="m-list--link" href="about.php"  style="color: purple">About Us</a></li>



          </ul>

        </div>

        <div class="col-sm-2">

          <h3 class="h6 mb-3">

            Service

          </h3>

          <ul class="list-unstyled mb-0">

            <li><a class="m-list--link" style="color: purple" href="exercises.php">Features</a></li>

            <li><a class="m-list--link" style="color: purple" href="courses.php">Packages</a></li>

            <li><a class="m-list--link" style="color: purple" href="login.php">Sign in</a> </li>



          </ul>

        </div>

        <div class="col-sm-3">

          <h3 class="h6 mb-3">

            <a class="m-list--link" href="contactus.php" style="color: purple"> Contact Us </a>

          </h3>

          <strong class="">Email</strong><br>

          <a class="m-link"  href="mailto:tantschool.info@gmail.com" style="color: purple">tantschool.info@gmail.com</a>



        </div>

      </div>

    </div>



    <!-- Copyright -->

    <div class="container m-gab-1 border-top">



      <div class="row">

        <div class="col-md-12 text-center">

          <p><span class="fs-17">©</span> 2020 <span class="m-link" style="color: purple">TantSchool</span>. All rights reserved.</p>

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







