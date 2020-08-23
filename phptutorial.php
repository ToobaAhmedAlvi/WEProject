<?php include('server.php') ?>



<!DOCTYPE html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <link rel="stylesheet" href="styles.css">

<script>

  function openSlideMenu(){

    document.getElementById('menu').style.width = '250px';

    document.getElementById('content').style.marginLeft = '250px';

  }

  function closeSlideMenu(){

    document.getElementById('menu').style.width = '0';

    document.getElementById('content').style.marginLeft = '0';

  }

</script>

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"

    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />



  <title>TANT SCHOOL</title>

  <style>

  

  </style>

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

          

          </button>

        </form>

    <?php endif ?>

      </div>

    </nav>

   

<div id="content">



    <span class="slide">

      <a href="#" onclick="openSlideMenu()">

        <i class="fas fa-bars"></i>

      </a>

    </span>



    <div id="menu" class="nav">

      <a href="#" class="close" onclick="closeSlideMenu()">

        <i class="fas fa-times"></i>

      </a>

      <h4 style="color: white;margin-left:33px;">PHP Tutorials</h4>

				<a class="nav-link" href="#intro">PHP Intro</a>

				<a class="nav-link" href="#syntax">PHP Syntax</a>

				<!-- <a class="nav-link" href="#comments">PHP Comments</a> -->

				<a class="nav-link" href="#variables">PHP Variables</a>

				<a class="nav-link" href="#echo">PHP Echo/Print</a>

				<a class="nav-link" href="#data">PHP Data Types</a>

				<a class="nav-link" href="#switch">PHP Switch</a>

        <a class="nav-link" href="#ifelse">PHP if...else...elseif</a>

				<a class="nav-link" href="#loop">PHP Loop</a>

				<a class="nav-link" href="#functions">PHP Function</a>

				<a class="nav-link" href="#arrays">PHP Arrays</a>

				<a class="nav-link" href="#superglobal">PHP Super globals</a>

				<a class="nav-link" href="#regex">PHP RegEx</a>

      

    </div>

</div>

<div class="container">

<div id="intro">

<h1>PHP: Hypertext Preprocessor <span class="color_h1">Introduction</span></h1>



<hr>

<iframe width="90%" height="315" src="https://youtube.com/embed/a_qREkJ78f4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br><br>

<h2>What You Should Already Know</h2>

<p>Before you continue you should have a basic understanding of the following:</p>

<ul>

<li>HTML</li>

<li>CSS</li>

<li>JavaScript</li>

</ul>

<p>If you want to study these subjects first, find the tutorials on our <a href="courses.php">Home page.</a></p>

<h2>What is PHP?</h2>

<ul>

<li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>

<li>PHP is a widely-used, open source scripting language</li>

<li>PHP scripts are executed on the server</li>

<li>PHP is free to download and use</li>

</ul>

<div style="width:100%;">

<br><br>

<div style="margin-left:2%;">

<strong><p>PHP is an amazing and popular language!</p></strong>



<p>It is powerful enough to be at the core of the

 biggest blogging system on the web (WordPress)!</p>

<p>It is deep enough to run the largest social network (Facebook)!</p>

<p>It is also easy enough to be a beginner's first server side language!</p>

<br><br>

</div>

</div>

<br>

<h2>What is PHP File?</h2>

<ul>

<li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>

<li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>

<li>PHP files have extension ".php"</li>

</ul>

<h3>What Can PHP Do?</h3>

<ul>

<li>PHP can generate dynamic page content</li>

<li>PHP can create, open, read, write, delete, and close files on the server</li>

<li>PHP can collect form data</li>

<li>PHP can send and receive cookies</li>

<li>PHP can add, delete, modify data in your database</li>

<li>PHP can be used to control user-access</li>

<li>PHP can encrypt data</li>

<li></li>

<li></li>

</ul>

<p>With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies.

 You can also output any text, such as XHTML and XML.</p>

<h3>Why PHP?</h3>

<ul>

<li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>

<li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>

<li>PHP supports a wide range of databases</li>

<li>PHP is easy to learn and runs efficiently on the server side</li>

</ul>



<h3>What's New In PHP 7</h3>

<ul>

<li>PHP 7 is much faster than the previous popular stable release (PHP 5.6)</li>

<li>PHP 7 has improved Error Handling</li>

<li>PHP 7 supports stricter Type Declarations for function arguments</li>

<li>PHP 7 supports new operators (like the spaceship operator: <=> )</li>

</ul>



<hr>

</div>



<div id="syntax">

<h1>PHP <span class="color_h1">Syntax</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/eLBDf7U4DfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<hr>

</div>



<div id="indent">

<h1>Basic PHP  <span class="color_h1">Syntax</span></h1>

<hr>

<p>A PHP script can be placed anywhere in the document.</p>

<p>A PHP script starts with &lt?php and ends with ?&gt</p>



<div style="border:1px solid black;width:100%">

<p>

<br>

&lt?php<br>

// PHP code goes here<br>

?&gt

</p>

</div>



<p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>

<p>Below, we have an example of a simple PHP file, with a PHP script that uses a

built-in PHP function "echo" to output the text "Hello World!" on a web page:</p>







<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first PHP page<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello World!"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>

    <br><br>

 </div>

 </div>

 <div>

</div>

<br>

<h3>PHP Case Sensitivity</h3>

<p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes,

 functions, and user-defined functions are not case-sensitive.</p>

<p>In the example below, all three echo statements below are equal and legal:</p>





<div class="w3-example">



<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>

    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">ECHO</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">EcHo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>

    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>

 <br><br>

 </div>

 </div>

</div>

<br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<strong><p>NOTE:</p></strong>



<p>However; all variable names are case-sensitive!</p>

<br>

</div>

</div>



<hr>



<div id="variables">

<h1>PHP <span class="color_h1">Variables</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/L2kwYV_paRE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <br><br>

<p>Variables are "containers" for storing information.</p>

<hr>

<h2>Creating (Declaring) PHP Variables</h2>

<p>In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>







                      <div class="w3-example">

                      <h3>Example</h3>

                      <div style="background-color:white;">

                      <br>

                      <div class="w3-code notranslate htmlHigh">

                      <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>

                      $txt = <span class="phpstringcolor" style="color:brown">"Hello world!"</span>;<br>

                      $x = <span class="phpnumbercolor" style="color:red">5</span>;<br>$y = <span class="phpnumbercolor" style="color:red">10.5</span>;<br>

                      <span class="phptagcolor" style="color:red">?&gt;</span></span>

                      <br><br>

                      </div>

                      </div>

                      </div>







<p>After the execution of the statements above, the variable $txt will 

hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.</p>





<strong><p>NOTE:</p></strong>

<li>When you assign a text value to a variable, put quotes around the value.</li>

<li>Unlike other programming languages, PHP has no command for declaring a variable. 

It is created the moment you first assign a value to it.</li>

<br>



<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<p>Think of variables as containers for storing data.</p>

<br>

</div>

</div>



<br>

<h3>PHP Variables</h3>

<p>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).<br>

Rules for PHP variables:</p>

<ul>

<li>A variable starts with the $ sign, followed by the name of the variable</li>

<li>A variable name must start with a letter or the underscore character</li>

<li>A variable name cannot start with a number</li>

<li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>

<li>Variable names are case-sensitive (age, Age and AGE are three different variables)</li>

</ul>

<br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<p>Remember that PHP variable names are case-sensitive!</p>

<br>

</div>

</div>

<br>

<h3>PHP Variables Scope</h3>

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

<li>local</li>

<li>global</li>

<li>static</li>

<br>

<h3>Global Scope</h3>

<br>

A variable declared <strong>outside</strong> a function has a GLOBAL SCOPE and can only be accessed outside a function:

<br>

<br>



<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

                      <br>

  <p>Variable with global scope: </p>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$x = <span class="phpnumbercolor" style="color:red">5</span>; <span class="commentcolor" style="color:green">// global scope<br></span><br><span class="phpkeywordcolor" style="color:mediumblue">function</span> myTest() {<br>&nbsp;&nbsp;<span class="commentcolor" style="color:green">// using x inside this function will generate an error<br></span>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;"</span>;<br>} <br>myTest();<br><br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span>

 <br><br>

                      </div>

 </div>

</div>

<br>

<h3>Local Scope</h3>

<br>

A variable declared <strong>within</strong> a function has a LOCAL SCOPE and can only be accessed outside a function:

<br>

<br>



<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

                      <br>

  <p>Variable with local scope: </p>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$x = <span class="phpnumbercolor" style="color:red">5</span>; <span class="commentcolor" style="color:green">// global scope<br></span><br><span class="phpkeywordcolor" style="color:mediumblue">function</span> myTest() {<br>&nbsp;&nbsp;<span class="commentcolor" style="color:green">// using x inside this function will generate an error<br></span>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;"</span>;<br>} <br>myTest();<br><br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span>

 <br><br>

                      </div>

 </div>

</div>



<br>

<h3>Static Keyword</h3>

<br>

Normally, when a function is completed/executed, all of its variables are deleted. 

However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

<br>

To do this, use the static keyword when you first declare the variable:

<br>

<br>



<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

                      <br>

                      <div class="w3-code htmlHigh notranslate">

<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpkeywordcolor" style="color:mediumblue">function</span> myTest()<span class="phpnumbercolor" style="color:red">

</span>{<br><span class="phpnumbercolor" style="color:red">

</span>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">static</span> $x = <span class="phpnumbercolor" style="color:red">0</span>;<br><span class="phpnumbercolor" style="color:red">

</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> $x;<br><span class="phpnumbercolor" style="color:red">

</span>  &nbsp; $x++;<br><span class="phpnumbercolor" style="color:red">

</span>}<br><br>

myTest();<br>

myTest();<br>

myTest();<br><span class="phptagcolor" style="color:red">?&gt;</span></span>

 

 <br><br>

                      </div>

 </div>

</div>









<hr>

<div id="echo">

<h1>PHP <span class="color_h1">Echo / Print Statement</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/V9c2M7c5xqU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <br><br>

<p>With PHP, there are two basic ways to get output: echo and print.

<br>

In this tutorial we use echo or print in almost every example. 

<br>So, this chapter contains a little more info about those two output statements.</p>





<h3>The PHP echo Statement</h3>

<p>The echo statement can be used with or without parentheses: echo or echo().

<br>The following example shows how to output text with the echo command (notice that the text can contain HTML markup):</p>



<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

                      <br>

                      <div class="w3-code htmlHigh notranslate">

<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"&lt;h2&gt;PHP is Fun!&lt;/h2&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello world!&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"I'm about to learn PHP!&lt;br&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"This "</span>, <span class="phpstringcolor" style="color:brown">"string "</span>, <span class="phpstringcolor" style="color:brown">"was "</span>, <span class="phpstringcolor" style="color:brown">"made "</span>, <span class="phpstringcolor" style="color:brown">"with multiple parameters."</span>;<br>

<span class="phptagcolor" style="color:red">?&gt;</span></span>

 

 

 <br><br>

                      </div>

 </div>

</div>

<br>

<h3>The PHP print Statement</h3>

<p>The print statement can be used with or without parentheses: print or ptint().

<br>The following example shows how to output text with the print command (notice that the text can contain HTML markup):</p>



<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">print</span> <span class="phpstringcolor" style="color:brown">"&lt;h2&gt;PHP is Fun!&lt;/h2&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">

</span> <span class="phpkeywordcolor" style="color:mediumblue">print</span> <span class="phpstringcolor" style="color:brown">"Hello world!&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">print</span> <span class="phpstringcolor" style="color:brown">"I'm about to learn PHP!"</span>;<br>

<span class="phptagcolor" style="color:red">?&gt;</span></span>

<br><br>

</div>

</div>

</div>



</div>



<div>

<hr>

<div id="data">

<h1>PHP <span class="color_h1">Data Types</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/oXX2SJKijig" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <br>



<h2>PHP Built-in Data Types</h2>

<p>Variables can store data of different types, and different data types can do different things.

<br>

PHP supports the following data types:</p>

<ul>

<li>String</li>

<li>Integer</li>

<li>Float</li>

<li>Boolean</li>

<li>Array</li>

<li>Object</li>

<li>Null</li>

<li>Resource</li>

</ul>



<h3>PHP String</h3>

<p>A string is a sequence of characters, like "Hello world!".

<br>

A string can be any text inside quotes. You can use single or double quotes:</p>

<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span> <br>$x = 

 <span class="phpstringcolor" style="color:brown">"Hello world!"</span>;<br>$y = <span class="phpstringcolor" 

 style="color:brown">'Hello world!'</span>;<br><br><span class="phpkeywordcolor" style="color:mediumblue">echo

 </span> $x;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" 

 style="color:brown">"&lt;br&gt;"</span>; <br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> 

 $y;<br><span class="phptagcolor" style="color:red">?&gt;</span></span> </div>

<br><br>

</div>

</div>

</div>



<br>

<h3>PHP Integer</h3>

<p>A string is a sequence of characters, like "Hello world!".

<br>

A string can be any text inside quotes. You can use single or double quotes:</p>

<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span> <br>$x = 

 <span class="phpstringcolor" style="color:brown">"Hello world!"</span>;<br>$y = <span class="phpstringcolor" 

 style="color:brown">'Hello world!'</span>;<br><br><span class="phpkeywordcolor" style="color:mediumblue">echo

 </span> $x;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" 

 style="color:brown">"&lt;br&gt;"</span>; <br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> 

 $y;<br><span class="phptagcolor" style="color:red">?&gt;</span></span> </div>

<br><br>

</div>

</div>

</div>



<br>

<h3>PHP Float</h3>

<p>A string is a sequence of characters, like "Hello world!".

<br>

A string can be any text inside quotes. You can use single or double quotes:</p>

<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span> <br>$x = 

 <span class="phpstringcolor" style="color:brown">"Hello world!"</span>;<br>$y = <span class="phpstringcolor" 

 style="color:brown">'Hello world!'</span>;<br><br><span class="phpkeywordcolor" style="color:mediumblue">echo

 </span> $x;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" 

 style="color:brown">"&lt;br&gt;"</span>; <br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> 

 $y;<br><span class="phptagcolor" style="color:red">?&gt;</span></span> </div>

<br><br>

</div>

</div>

</div>



<hr>

</div>



<hr>



<div id="ifelse">

<h1>PHP <span class="color_h1">if...else...elseif Statements</span></h1>

<hr>

<br>

<h2>PHP Conditional Statements</h2>

<p>Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

<br>

In PHP we have the following conditional statements:</p>

<ul>

<li>if statement - executes some code if one condition is true</li>

<li>if...else statement - executes some code if a condition is true and another code if that condition is false</li>

<li>if...elseif...else statement - executes different codes for more than two conditions</li>

<li>switch statement - selects one of many blocks of code to be executed</li>

</ul>

<br>

<h2>PHP - The if Statement</h2>

<br>

<h4>Syntax</h4>

<br>

<div style="border:1px solid black;width:100%">

<p>

<br>

if (condition) {<br>

  code to be executed if condition is true;<br>

}

</p>

</div>

<br>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/D5U0764ynQU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<h2>PHP - The if...else Statement</h2>

The if...else statement executes some code if a condition is true and another code if that condition is false.<br>

<br>

<h4>Syntax</h4>

<br>

<div style="border:1px solid black;width:100%">

<p>

<br>

if (condition) { <br>

code to be executed if condition is true;<br>

} else {<br>

  code to be executed if condition is false;<br>

}

</p>

</div>

<br>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/YD-4ZNtqJ2E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<h2>PHP - The if...elseif...else Statement</h2>

The if...elseif...else statement executes different codes for more than two conditions.<br>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

if (condition) { <br>

  code to be executed if this condition is true; <br>

} elseif (condition) {<br>

  code to be executed if first condition is false and this condition is true;<br>

} else {<br>

  code to be executed if all conditions are false;<br>

}

</p>

</div>

<br>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/ATSS8uKXRt8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<hr>

<div id="switch">

<h1>PHP <span class="color_h1">Switch Statement</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/3KARgG9t62w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br><br>

The switch statement is used to perform different actions based on different conditions.

<br><br>

<h2>The PHP switch Statement</h2>

<p>Use the switch statement to select one of many blocks of code to be executed.</p>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

switch (n) {<br>

  case label1:<br>

    code to be executed if n=label1;<br>

    break;<br>

  case label2:<br>

    code to be executed if n=label2;<br>

    break;<br>

  case label3:<br>

    code to be executed if n=label3;<br>

    break;<br>

    ...<br>

  default:<br>

    code to be executed if n is different from all labels;<br>

}<br>

</p>

</div>

<br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<p><strong>This is how it works: First we have a single expression n (most often a variable), that is evaluated once. 

The value of the expression is then compared with the values for each case in the structure. 

If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. 

The default statement is used if no match is found.</strong></p>

<br>

</div>

</div>

</div>

<hr>







<div id="loop">

<h1>PHP <span class="color_h1">Loop</span></h1>

<hr>

<br>

In the following chapters you will learn how to repeat code by using loops in PHP.

<br><br>

<h2>PHP Loops</h2>

<br>

<p>Often when you write code, you want the same block of code to run over and over again a certain number of times. 

So, instead of adding several almost equal code-lines in a script, we can use loops.

<br>

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

<br>

In PHP, we have the following loop types:</p>

<br>

<h2>PHP While Loop</h2>

<p>The while loop executes a block of code as long as the specified condition is true.

<br>

<div class="w3-example">

<h3>Example</h3>

<div style="background-color:white;">

<br>

<div class="w3-code htmlHigh notranslate">

 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span> <br>$x = <span class="phpnumbercolor" style="color:red">1</span>; <br><br><span class="phpkeywordcolor" style="color:mediumblue">while</span>($x &lt;= <span class="phpnumbercolor" style="color:red">5</span>) {<br>&nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"The number is: $x &lt;br&gt;"</span>;<br>&nbsp;&nbsp;$x++;<br>} <br><span class="phptagcolor" style="color:red">?&gt;</span></span>

<br><br>

</div>

</div>

</div>



<br>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/jO4nyx1rJLU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<h2>PHP For Loop</h2>

<p>The for loop executes a block of code as long as the specified condition is true.

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

for (init counter; test counter; increment counter) { <br>

  code to be executed for each iteration;<br>

}<br>

</p>

</div>

<br>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/y4BayRnGmTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>



<hr>

<div id="functions">

<h1>PHP <span class="color_h1">Functions</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/hDMg-NCGLfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<p>The real power of PHP comes from its functions.

<br>

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.</p>



<hr>

<h2>PHP built-in Functions</h2>

<p>PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

<br>

Please check out our PHP reference for a complete overview of the PHP built-in functions.</p>



<h2>Create a User Defined Function in PHP</h2>

<p>A user-defined function declaration starts with the word function:</p>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

function functionName() {<br>

  code to be executed;<br>

}<br>

</p>

</div>

<br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<p><strong>A function name must start with a letter or an underscore. Function names are NOT case-sensitive.</strong></p>

<br>

</div>

</div>

<br>

<h2>PHP Function Arguments</h2>

<p>Information can be passed to functions through arguments. An argument is just like a variable.

<br>

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

<br>

The following example has a function with one argument ($fname). 

When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, 

which outputs several different first names, but an equal last name:</p>

</div>

<br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<p><strong>The strict declaration forces things to be used in the intended way.</strong></p>

<br>

</div>

</div>

<br>



<hr>

<div id="arrays">

<h1>PHP <span class="color_h1">Arrays</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/SLqF77h6HLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<p>An array stores multiple values in one single variable:</p>

<hr>

<h2>What is an Array?</h2>

<p>An array is a special variable, which can hold more than one value at a time.

<br>

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:</p>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

$cars1 = "Volvo"; <br>

$cars2 = "BMW"; <br>

$cars3 = "Toyota";<br>

}<br>

</p>

</div>

<br>

<p>However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

<br>

The solution is to create an array!

<br>

An array can hold many values under a single name, and you can access the values by referring to an index number.</p>

<h2>Create an Array in PHP</h2>

<p>In PHP, the array() function is used to create an array:</p>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

array();

<br>

</p>

</div>

<br>

<p>In PHP, there are three types of arrays:</p>

<ul>

<li>Indexed arrays - Arrays with a numeric index</li>

<li>Associative arrays - Arrays with named keys</li>

<li>Multidimensional arrays - Arrays containing one or more arrays</li>

</ul>

</div>







<hr>

<div id="superglobal">

<h1>PHP <span class="color_h1">Superglobals</span></h1>

<hr>

<iframe width="90%" height="315" src="https://www.youtube.com/embed/fTs3deU7n10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<p>Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.</p>

<hr>

<h2>PHP Global Variables - Superglobals</h2>

<p>Some predefined variables in PHP are "superglobals", which means that they are always accessible, 

regardless of scope - and you can access them from any function, class or file without having to do anything special.

<br>The PHP superglobal variables are:</p>

<ul>

<li>$GLOBALS</li>

<li>$_SERVER</li>

<li>$_REQUEST</li>

<li>$_GET</li>

<li>$_POST</li>

<li>$_SESSION</li>

<li>$_COOKIE</li>

<li>$_FILES</li>

<li>$_ENV</li>

</ul>

<br>

</div>





<hr>

<div id="regex">

<h1>PHP <span class="color_h1">Regular Expressions</span></h1>

<hr>

<iframe width="90%"height="315" src="https://www.youtube.com/embed/SLqF77h6HLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>

<br>

<hr>

<h2>What is a Regular Expression?</h2>

<p>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.

<br>

A regular expression can be a single character, or a more complicated pattern.

<br>

Regular expressions can be used to perform all types of text search and text replace operations.</p>

<br>

In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

$exp = "/w3schools/i";

<br>

</p>

</div>

<br>

<p><strong>In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

<br>

The delimiter can be any character that is not a letter, number, backslash or space. 

The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.</strong></p>

<p>However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

<br>

The solution is to create an array!

<br>

An array can hold many values under a single name, and you can access the values by referring to an index number.</p>

<h2>Create an Array in PHP</h2>

<p>In PHP, the array() function is used to create an array:</p>

<br>

<h4>Syntax</h4>

<div style="border:1px solid black;width:100%">

<p>

<br>

array();

<br>

</p>

</div>

<br>

<h2>Regular Expression Functions</h2>

<p>PHP provides a variety of functions that allow you to use regular expressions. 

The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones:</p>

<ul>

<li>preg_match() - Returns 1 if the pattern was found in the string and 0 if not</li>

<li>preg_match_all()	 - Returns the number of times the pattern was found in the string, which may also be 0</li>

<li>preg_replace() - Returns a new string where matched patterns have been replaced with another string</li>

</ul>

</div>

<br><br>

<div style="width:100%;">

<br>

<div style="margin-left:2%;">

<h5><strong>Done With Learning PHP ? <a href="phpquiz.php">Click here</a> to attempt PHP Quiz Now </strong></h5>

<br>

</div>

</div>

<br><br><br>



    </header>



  <br><br><br>

  <footer class="border-top">

    <div class="container pt-10 pb-9">

      <div class="row">

        <div class="col-sm-5">

     

          <p>
          <img alt="Vertex" src="school.png" class="mb-4" width="80">
            <span class="m-link-muted">TantSchool</span> provides the best possible online <br> learning experience.



          </p>

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

            <li><a class="m-list--link" style="color: purple"  href="index">Home</a></li>

            <li><a class="m-list--link" style="color: purple"  href="about-us">About Us</a></li>



          </ul>

        </div>

        <div class="col-sm-2">

          <h3 class="h6 mb-3">

            Service

          </h3>

          <ul class="list-unstyled mb-0">

            <li><a class="m-list--link" style="color: purple" href="services">Features</a></li>

            <li><a class="m-list--link"  style="color: purple" href="packages">Packages</a></li>

            <li><a class="m-list--link"style="color: purple"  href="login">Sign in</a> </li>



          </ul>

        </div>

        <div class="col-sm-3">

          <h3 class="h6 mb-3">

            <a class="m-list--link" style="color: purple"  href="contact-us"> Contact Us </a>

          </h3>

          <strong class="">Email</strong><br>

          <a class="m-link"style="color: purple"  href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>



        </div>

      </div>

    </div>



    <!-- Copyright -->

    <div class="container m-gab-1 border-top">



      <div class="row">

        <div class="col-md-12 text-center">

          <p><span class="fs-17">©</span> 2020 <span class="m-link" style="color: purple" >TantSchool</span>. All rights reserved.</p>

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