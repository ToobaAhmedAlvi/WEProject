<?php include('server.php') ?>



<?php
$con = mysqli_connect('tantschool-mysqldbserver.mysql.database.azure.com', 'tooba@tantschool-mysqldbserver');

mysqli_select_db($con, 'quiz');

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <!-- Required meta tags -->

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"

        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />



    <title>Python Quiz</title>

</head>



<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">

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

                        <a class="nav-link" href="courses.php">Courses</a>

                    </li>

                    <li class="nav-item active">

                        <a class="nav-link" href="./exercises.php">Practice Exercises</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="about.html">About Us</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="contactus.html">Contact Us</a>

                    </li>

                </ul>

                <?php  if (isset($_SESSION['username'])) : ?>

                    <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

                    <a href="exercises.php?logout='1'" class="btn btn-info transition-hover btn-lg ml-3">Logout</a>

                    <?php else: ?>

                    <form class="form-inline my-2 my-lg-0">

                        <a href="login.php" class="btn btn-primary transition-hover btn-lg ml-3">Sign In</a>

                        <a href="register.php" class="btn btn-success transition-hover btn-lg ml-3">Sign Up</a>

                        <button class="btn header-btn-collapse-nav active collapsed" data-toggle="collapse" data-target=".header-nav-main nav" aria-expanded="false"><i class="fas fa-bars"></i>

                        </button>

                    </form>

                <?php endif ?>

            </div>

        </nav>

        

        <br><br><br><br><br>

        

        <div class="container">



        </div>



<?php

    if(isset($_POST['submit'])){



        if(!empty($_POST['quizcheck'])){

            $count = count($_POST['quizcheck']);



            echo "Out of 5, you have selected " .$count. "options" ;

            

            $result = 0;

            $i = 1;



            $selected = $_POST['quizcheck'];

            print_r($selected);

        

            $q= "select * from questions";

            $query = mysqli_query($con, $q);



            while ($rows = mysqli_fetch_array($query)) {

                print_r($rows['ans_id']);

                

                $checked = $rows['ans_id'] == $selected[$i];



                if($checked){



                    $result++;

                }

                $i++;

            }

            echo "Your total score is " .$result;

            }

    }

?>

<?php

        $name = $_SESSION['username'];

        $finalresult = "insert into user(username, totalques, answerscorrect) values ('$name', '5', '$result')";

        $queryresult = mysqli_query($con, $finalresult);

        ?>

        

        </header>

        <br><br><br>        

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