<?php include('server.php') ?>

<?php include('datainsertion.php') ?>



<html>



<head>



    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />



    <title>PHP Quiz </title>



    <link rel="stylesheet" href="phpquiz.css" type="text/css">



    <!-- <link rel="stylesheet" href="style1.css"> -->



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"

        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"

        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />



    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">



</head>



<?php



session_start(); 



    $username = "tooba@tantschool-mysqldbserver";
    
    $server="tantschool-mysqldbserver.mysql.database.azure.com";
    
    $password="Admin123";
    
    $dbname="quiz";
    
    $con =  new mysqli($servername, $username, $password, $dbname);







?>



<body>



    <div>

        <header>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary"

                style="background-image: linear-gradient(to top, rgba(190, 45, 219, 0.733), rgb(240, 66, 225));">



                <a class="navbar-brand" href="index.php">TantSchool</a>



                <button class="navbar-toggler" type="button" data-toggle="collapse"

                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"

                    aria-label="Toggle navigation">



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

                        <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

                    </a>

                    <a href="exercises.php?logout='1'" class="btn btn-info transition-hover btn-lg ml-3">Logout</a>

                    <?php else: ?>



                    <form class="form-inline my-2 my-lg-0">



                        <!-- <a href="login" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a> -->



                        <a href="register" class="btn btn-success transition-hover btn-lg ml-3">Sign Up</a>



                        <button class="btn header-btn-collapse-nav active collapsed" data-toggle="collapse"

                            data-target=".header-nav-main nav" aria-expanded="false">



                            <i class="fas fa-bars"></i>



                        </button>



                    </form>



                    <?php endif ?>



                </div>



            </nav>



    </div>



    <!-- <center style="margin-left:20%;"> -->





    <br><br><br><br><br>



    <div id="container">

        <?php 



$ses=0;															



            if (isset($_POST['click']) || isset($_GET['start'])) {



            $_SESSION['clicks'] += 1 ;



            $c = $_SESSION['clicks'];



            if(isset($_POST['userans'])) { $userselected = $_POST['userans'];



            



            $fetchqry2 = "UPDATE `PHPquiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 



            $result2 = mysqli_query($con,$fetchqry2);



            }

            } else {



                $_SESSION['clicks'] = 0;



            }



            



            //echo($_SESSION['clicks']);



            ?>



        <div class="bump"><br>

            <form>



                <center><img margin-top="2px" margin-bottom="2px" height="150px" width="300px" src="PHP.jpg">

<br>



                    <?php if($_SESSION['clicks']==0){ ?> <button class="btn btn-primary btn-lg" name="start"

                        style="background-color: rgba(205, 34, 248, 0.767);" float="left"><span>START

                            QUIZ</span></button> <?php } ?>

            </form>

            </center>

        </div>



        <form action="" method="post">



            <table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `PHPquiz` where id='$c'"; 



				$result=mysqli_query($con,$fetchqry);



				$num=mysqli_num_rows($result);



				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }



          ?>







                <tr>

                    <td>

                        <h3><br><?php echo @$row['que'];?></h3>

                    </td>

                </tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] <= 25){ ?>



                <tr>

                    <td><input required type="radio" name="userans"

                            value="<?php echo $row['option1'];?>">&nbsp;<?php echo $row['option1']; ?><br>



                <tr>

                    <td><input required type="radio" name="userans"

                            value="<?php echo $row['option2'];?>">&nbsp;<?php echo $row['option2'];?></td>

                </tr>



                <tr>

                    <td><input required type="radio" name="userans"

                            value="<?php echo $row['option3'];?>">&nbsp;<?php echo $row['option3']; ?></td>

                </tr>



                <tr>

                    <td><input required type="radio" name="userans"

                            value="<?php echo $row['option4'];?>">&nbsp;<?php echo $row['option4']; ?><br><br><br></td>

                </tr>



                <tr>

                    <td><button class="button3new" style="background-color: rgba(205, 34, 248, 0.767);"

                            name="click">Next</button></td>

                </tr> <?php }  



																	?>



                <form>



                    <?php if($_SESSION['clicks']>25){ 



	$qry3 = "SELECT `ans`, `userans` FROM `PHPquiz`;";



	$result3 = mysqli_query($con,$qry3);



	$storeArray = Array();



	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {



     if($row3['ans']==$row3['userans']){



         @$_SESSION['score'] += 1 ;



         $ses=@$_SESSION['score'];



	 }



}



if( $ses !=0)



{



    $no = @$_SESSION['score'];}



else



{



    $no = 0;



}



 ?>



                    <h2>Result</h2>



                    <span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']+1;  ?></span><br>



                    <span>Your Score:&nbsp<?php echo $no;   



 $name = $_SESSION['username']; ?></span>



                    <?php  php($name, $no);



} ?>















    </div>



    <!-- </center> -->

    </header>

    <br><br><br>

    <!-- echo $_SESSION['username']; -->



    <!-- python($name, $no); -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"

        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">

    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"

        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">

    </script>

</body>



</html>