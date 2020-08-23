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



    <div class="container" style="background-color:rgba(228, 181, 238, 0.822);width:100%;padding:2%;text-align:center;">



        <div class="row justify-content-md-center">



            <div class="mbr-white col-md-10" >



                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">About Us</h3>



                <h5 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-5">



                TANtSchool is an educational website for learning web technologies online. 



                Content includes tutorials and references relating to HTML, CSS, Python and PHP.

                <br>

                TANTSchool is named after its developers namely:

                <ul style="list-style: none;">

                <li><strong>T</strong>OOBA</li>

                <li><strong>A</strong>YESHA</li>

                <li><strong>N</strong>AMIRA</li>

                <li><strong>T</strong>OOBA</li>

                </ul>

                </h5>



            </div>



        </div>



    </div>



    <br><br>



    <section class="mbr-section article content1 cid-r7cw9uSKOn" id="content1-d" >







     







    <div class="container" style="text-align:left;">



        <div class="media-container-row">



            <div class="mbr-text col-12 col-md-12" styel="font-size:small;">



            <h1 class="mb-3 mbr-fonts-style display-5">Course Plan</h1>



            </div>



        </div>



    </div>



</section>



    <section class="mbr-section article content12 cid-r7cx92Ejvt" id="content6-f">



    <div class="container" style="text-align:left;">



        <div class="media-container-row">



            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style pt-5">



                <div class="mb-5">



                    <h3 class="mb-3 mbr-fonts-style display-5">01. Lectures</h3>



                    <p class="mbr-fonts-style display-7">We'll teach you about HTML, CSS, Python, and PHP with enough contents with their accurate syntax. Also, we'll learn more about their functionalities and will review many code examples.</p>



                </div>



                <div class="mb-5">



                    <h3 class="mb-3 mbr-fonts-style display-5">02. Video Lectures</h3>



                    <p class="mbr-fonts-style display-7">Our video lectures will also be available to you so that if their had been any confusion in Static learning than they could watch the videos to clear their concepts.</p>



                </div>



                <div class="mb-5">



                    <h3 class="mb-3 mbr-fonts-style display-5">03. Final Quiz</h3>



                    <p class="mbr-fonts-style display-7">If you think that you had learn a particular language very well then you could be able to check your programming skills through our free of cost quiz given at the end of every language.</p>



                </div>



            </div>



        </div>



    </div>



</section>



<br><br><br>



<section class="features11 cid-r7iylV3OqF mbr-parallax-background" id="features11-k" style="z-index: 0; background-image: none; position: relative;">







    







    <div class="mbr-overlay" style="opacity: 0.5;">



    </div>







    <div class="container" style="background-color:rgba(228, 181, 238, 0.822);width:100%;padding:2%;">



        <div class="text-content">



            <div class="media-container-row ">



                <div class="col-md-12 mb-4">



                    <h3 class="mb-4 mbr-fonts-style mbr-section-title display-2">Get enroll for 0 PKR!</h3>



                    



                    <h2 class="mb-4 mbr-fonts-style display-7">You'll get all the additional materials of Quizzes after getting enroll for free. </h2>



                    <div class="mbr-section-btn"><a class="btn btn-md btn-bgr btn-warning display-4" href="login.php">Enroll</a></div>



                </div>



            </div>



        </div>



    </div>



</div></section>



<br><br><br><br><br><br><br>



    <section class="py-8 py-md-11 border-bottom">



      <div class="container">



        <div class="row">



          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up">



            <div class="icon text-primary mb-3">



              <img src="1.png" alt=" img" width="100" height="100" viewBox="0 0 50 50">



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



              <img src="2.png" alt=" img" width="100" height="100" viewBox="0 0 50 50">



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



              <img src="3.png" width="100" height="100" viewBox="0 0 50 50">



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



  <br><br><br><br><br><br>

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



            <li><a class="m-list--link" style="color: purple"href="index.php">Home</a></li>



            <li><a class="m-list--link" style="color: purple"href="about.php">About Us</a></li>







          </ul>



        </div>



        <div class="col-sm-2">



          <h3 class="h6 mb-3">



            Service



          </h3>



          <ul class="list-unstyled mb-0">



            <li><a class="m-list--link" style="color: purple" href="exercises.php">Features</a></li>



            <li><a class="m-list--link" style="color: purple" href="courses.php">Packages</a></li>



            <li><a class="m-list--link" style="color: purple"href="login.php">Sign in</a> </li>







          </ul>



        </div>



        <div class="col-sm-3">



          <h3 class="h6 mb-3">



            <a class="m-list--link"style="color: purple" href="contactus.php"> Contact Us </a>



          </h3>



          <strong class="" style="color: purple">Email</strong><br>



          <a class="m-link"style="color: purple" href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>







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















