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



    <title>Courses</title>

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

          <a href="login.php" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a>

          <a href="register.php" class="btn btn-success transition-hover btn-lg ml-3">Sign Up</a>

          <button class="btn header-btn-collapse-nav active collapsed" data-toggle="collapse"

            data-target=".header-nav-main nav" aria-expanded="false">

            <i class="fas fa-bars"></i>

          </button>

        </form>

    <?php endif ?>

            </div>

        </nav>

        <br><br><br>





        <br><br>

        <div class="container">

            <section class="py-8 py-md-11">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-md-5">

                        <div class="card text-center" style="width: 100%; height: 25rem;">

                            <div class="card-body" style="background-image:url(coursesb.png);">

                                <h2 class="card-title" style="text-align: center;">HTML</h2>

                                <hr>

                                <br><br>

                                <h3 class="card-text">HyperText Markup Language</h3>

                                <p class="card-text">The language for building web pages.</p>

                                <br><br>

                                <a href="htmltutorial.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-primary">Learn HTML</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-6 img-skewed img-skewed-right">



                        <!-- Code -->

                        <div class="card rounded-lg bg-black mb-6 mb-md-0 img-skewed-item screenshot">

                            <div class="card-header border-white-10">



                                <!-- Controls -->

                                <div class="d-flex">

                                    <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>

                                    <span class="bg-warning rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                    <span class="bg-success rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                </div>



                            </div>

                            <div class="card-body">

                                <div class="w3-col l6" style="padding:3%">

                                    <div class="w3-hide-small w3-light-grey w3-card-2" style="padding:16px;">

                                        <h3>HTML Example:</h3>

                                        <div class="w3-code htmlHigh notranslate w3-border-green">

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>!DOCTYPE<span

                                                    class="attributecolor" style="color:red">

                                                    html</span><span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>html<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>title<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>HTML

                                            Tutorial<span class="tagnamecolor" style="color:brown"><span

                                                    class="tagcolor" style="color:mediumblue">&lt;</span>/title<span

                                                    class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>body<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>h1<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>This is a

                                            heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>/h1<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>p<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>This is a

                                            paragraph.<span class="tagnamecolor" style="color:brown"><span

                                                    class="tagcolor" style="color:mediumblue">&lt;</span>/p<span

                                                    class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>/body<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>/html<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> <!-- / .row -->

            </section>

        </div> <!-- / .container -->

        <br><br>

        <div class="container">

            <section class="py-8 py-md-11">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-md-6 img-skewed img-skewed-right">



                        <!-- Code -->

                        <div class="card rounded-lg bg-black mb-6 mb-md-0 img-skewed-item screenshot">

                            <div class="card-header border-white-10">



                                <!-- Controls -->

                                <div class="d-flex">

                                    <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>

                                    <span class="bg-warning rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                    <span class="bg-success rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                </div>



                            </div>

                            <div class="card-body">

                                <div class="w3-col l6" style="padding:3%">

                                    <div class="w3-hide-small w3-light-grey w3-card-2" style="padding:16px;">

                                        <h3>CSS Example:</h3>

                                        <div class="w3-code cssHigh notranslate w3-card-2 w3-border-green"><span

                                                class="cssselectorcolor" style="color:brown">

                                                body <span class="cssdelimitercolor" style="color:black">{</span><span

                                                    class="csspropertycolor" style="color:red"><br>

                                                    &nbsp; background-color<span class="csspropertyvaluecolor"

                                                        style="color:mediumblue"><span class="cssdelimitercolor"

                                                            style="color:black">:</span> lightblue<span

                                                            class="cssdelimitercolor"

                                                            style="color:black">;</span></span><br></span><span

                                                    class="cssdelimitercolor" style="color:black">}</span><br><br>

                                                h1 <span class="cssdelimitercolor" style="color:black">{</span><span

                                                    class="csspropertycolor" style="color:red"><br>

                                                    &nbsp; color<span class="csspropertyvaluecolor"

                                                        style="color:mediumblue"><span class="cssdelimitercolor"

                                                            style="color:black">:</span> white<span

                                                            class="cssdelimitercolor"

                                                            style="color:black">;</span></span><br>

                                                    &nbsp; text-align<span class="csspropertyvaluecolor"

                                                        style="color:mediumblue"><span class="cssdelimitercolor"

                                                            style="color:black">:</span> center<span

                                                            class="cssdelimitercolor"

                                                            style="color:black">;</span></span><br></span><span

                                                    class="cssdelimitercolor" style="color:black">}</span><br><br>

                                                p <span class="cssdelimitercolor" style="color:black">{</span><span

                                                    class="csspropertycolor" style="color:red"><br>

                                                    &nbsp; font-family<span class="csspropertyvaluecolor"

                                                        style="color:mediumblue"><span class="cssdelimitercolor"

                                                            style="color:black">:</span> verdana<span

                                                            class="cssdelimitercolor"

                                                            style="color:black">;</span></span><br>

                                                    &nbsp; font-size<span class="csspropertyvaluecolor"

                                                        style="color:mediumblue"><span class="cssdelimitercolor"

                                                            style="color:black">:</span> 20px<span

                                                            class="cssdelimitercolor"

                                                            style="color:black">;</span></span><br></span><span

                                                    class="cssdelimitercolor" style="color:black">}</span>

                                            </span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-5">

                        <div class="card text-center" style="width: 100%; height: 25rem;">

                            <div class="card-body" style="background-image:url(coursesb.png);">

                                <h2 class="card-title" style="text-align: center;">CSS</h2>

                                <hr>

                                <br><br>

                                <h3 class="card-text">Cascading Style Sheets</h3>

                                <p class="card-text">The language for styling web pages.</p>

                                <br><br>

                                <a href="csstutorial.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-primary">Learn CSS</a>

                            </div>

                        </div>

                    </div>

                </div> <!-- / .row -->

            </section>

        </div> <!-- / .container -->

        <br><br>

        <div class="container">

            <section class="py-8 py-md-11">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-md-5">

                        <div class="card text-center" style="width: 100%; height: 25rem;">

                            <div class="card-body" style="background-image:url(coursesb.png);">

                                <h2 class="card-title" style="text-align: center;">Python</h2>

                                <hr>

                                <br><br>

                                <h3 class="card-text">Python Programming Language</h3>

                                <p class="card-text">The language for Artificial Intelligence and Machine Learning.</p>

                                <br><br>

                                <a href="pythontutorial.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-primary">Learn Python</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-6 img-skewed img-skewed-right">



                        <!-- Code -->

                        <div class="card rounded-lg bg-black mb-6 mb-md-0 img-skewed-item screenshot">

                            <div class="card-header border-white-10">



                                <!-- Controls -->

                                <div class="d-flex">

                                    <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>

                                    <span class="bg-warning rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                    <span class="bg-success rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                </div>



                            </div>

                            <div class="card-body">

                                <div class="w3-col l6" style="padding:3%">

                                    <div class="w3-hide-small w3-light-grey w3-card-2" style="padding:16px;">

                                        <h3>Python Example:</h3>

                                        <div class="w3-code htmlHigh notranslate w3-border-green">

                                            <span class="tagnamecolor" style="color:brown"><span>def add (a, b)</span><br>

                                            <span class="tagnamecolor" style="color:black"><span>return a+b</span><br>

                                            <br><br>

                                            <span class="tagnamecolor" style="color:black"><span>a = 5</span><br>

                                            <span class="tagnamecolor" style="color:black"><span>b = 7</span><br>

                                            <br>

                                            <span class="tagnamecolor" style="color:brown"><span>sum = add(a,b)</span><br>

                                            <span class="tagnamecolor" style="color:black"><span>print(sum)</span><br>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> <!-- / .row -->

            </section>

        </div> <!-- / .container -->

        <br><br>

        <div class="container">

            <section class="py-8 py-md-11">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-md-6 img-skewed img-skewed-right">



                        <!-- Code -->

                        <div class="card rounded-lg bg-black mb-6 mb-md-0 img-skewed-item screenshot">

                            <div class="card-header border-white-10">



                                <!-- Controls -->

                                <div class="d-flex">

                                    <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>

                                    <span class="bg-warning rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                    <span class="bg-success rounded-circle ml-1"

                                        style="width: 10px; height: 10px;"></span>

                                </div>



                            </div>

                            <div class="card-body">

                                <div class="w3-col l6" style="padding:3%">

                                    <div class="w3-hide-small w3-light-grey w3-card-2" style="padding:16px;">

                                    <h3>PHP Example:</h3>

                                        <div class="w3-code htmlHigh notranslate w3-border-green">

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>!DOCTYPE<span

                                                    class="attributecolor" style="color:red">

                                                    html</span><span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>html<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>title<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>PHP

                                            Tutorial<span class="tagnamecolor" style="color:brown"><span

                                                    class="tagcolor" style="color:mediumblue">&lt;</span>/title<span

                                                    class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>body<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>?php<span class="tagcolor"

                                                    style="color:mediumblue"></span></span>   echo "Hello World" ;<span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue"></span> ?<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>/body<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span><br>

                                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor"

                                                    style="color:mediumblue">&lt;</span>/html<span class="tagcolor"

                                                    style="color:mediumblue">&gt;</span></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-5">

                        <div class="card text-center" style="width: 100%; height: 25rem;">

                            <div class="card-body" style="background-image:url(coursesb.png);">

                                <h2 class="card-title" style="text-align: center;">PHP</h2>

                                <hr>

                                <br><br>

                                <h3 class="card-text">Hypertext Preprocessor</h3>

                                <p class="card-text">The language for server side scripting.</p>

                                <br><br>

                                <a href="phptutorial.php" style="background-color: rgba(205, 34, 248, 0.767);" class="btn btn-primary">Learn PHP</a>

                            </div>

                        </div>

                    </div>

                </div> <!-- / .row -->

            </section>

        </div> <!-- / .container -->

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

                        <li><a class="m-list--link" style="color: purple"  href="index.php">Home</a></li>

                        <li><a class="m-list--link" style="color: purple"  href="about.php">About Us</a></li>



                    </ul>

                </div>

                <div class="col-sm-2">

                    <h3 class="h6 mb-3">

                        Service

                    </h3>

                    <ul class="list-unstyled mb-0">

                        <li><a class="m-list--link" style="color: purple"  href="courses.php">Features</a></li>

                        <li><a class="m-list--link" style="color: purple"  href="exercises.php">Packages</a></li>

                        <li><a class="m-list--link" style="color: purple"   href="login.php">Sign in</a> </li>



                    </ul>

                </div>

                <div class="col-sm-3">

                    <h3 class="h6 mb-3">

                        <a class="m-list--link" style="color: purple"  href="contactus.php"> Contact Us </a>

                    </h3>

                    <strong class="" style="color: purple" >Email</strong><br>

                    <a class="m-link" style="color: purple"  href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>



                </div>

            </div>

        </div>



        <!-- Copyright -->

        <div class="container m-gab-1 border-top">



            <div class="row">

                <div class="col-md-12 text-center">

                    <p><span class="fs-17">©</span> 2020 <span style="color: purple"  class="m-link">TantSchool</span>. All rights reserved.

                    </p>

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