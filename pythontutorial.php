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
   <style type="text/css">
    iframe{
      width: 90%;
    }
    table{
      width: 90%;
    }
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
        <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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
      <a href="#intro">Python Introduction</a>
      <a href="#syntax">Python Syntax</a>
      <a href="#indent">Python Indentation</a>
      <a href="#variables">Python Variables</a>
      <a href="#comments">Python Comments</a>
      <a href="#data_types">Python Data Types</a>
      <a href="#lists">Python Lists</a>
      <a href="#tuples">Python Tuples</a>
      <a href="#dictionary">Python Dictionary</a>
      <a href="#ifelse">Python if...else</a>
      <a href="#forloop">Python For Loop</a>
      <a href="#whileloop">Python While Loop</a>
      <a href="#functions">Python Functions</a>
      
    </div>
</div>

<div class="container">
<div class="card">
  <div id="intro">
<h1>Python <span class="color_h1">Introduction</span></h1>

<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/hEgO047GxaQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h2>What is Python?</h2>
<p>Python is a popular programming language. It was created by Guido van Rossum, 
and released in 1991.</p>

<p>It is used for:</p>

<ul>
<li>web development (server-side), </li>
<li>software development, </li>
<li>mathematics,</li>
<li>system scripting.</li>
</ul>

<h3>What can Python do?</h3>
<ul>
<li>Python can be used on a server to create web applications.</li>
<li>Python can be used alongside software to create workflows.</li>
<li>Python can connect to database systems. It can also read and modify files.</li>
<li>Python can be used to handle big data and perform complex mathematics.</li>
<li>Python can be used for rapid prototyping, or for production-ready software development.</li>
</ul>

<h3>Why Python?</h3>
<ul>
<li>Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
<li>Python has a simple syntax similar to the English language.</li>
<li>Python has syntax that allows developers to write programs with fewer lines than some other programming languages.</li>
<li>Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li>
<li>Python can be treated in a procedural way, an object-orientated way or a functional way.</li>
</ul>

<h3>Good to know</h3>
<ul>
<li>The most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with anything other than security updates, is still quite popular.</li>
<li>In this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment, such as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger collections of Python files.</li>
</ul>

<h3>Python Syntax compared to other programming languages</h3>
<ul>
<li>Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li>
<li>Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
<li>Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li>
</ul>
<hr>
</div>

<div id="syntax">
<h1>Python <span class="color_h1">Syntax</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/DWgzHbglNIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
</div>

<div id="indent">
<h1>Python <span class="color_h1">Indentation</span></h1>
<hr>

<p>Indentation refers to the spaces at the beginning of a code line.</p>
<p>Where in other programming languages the indentation in code is for readability 
only, the indentation in Python is very important.</p>
<p>Python uses indentation to indicate a block of code.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">if</span> <span class="pythonnumbercolor" style="color:red">5</span> &gt; <span class="pythonnumbercolor" style="color:red">2</span>:<br>&nbsp;
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Five is greater than two!"</span>)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<p>Python will give you an error if you skip the indentation:</p>

<div class="w3-example w3-pale-red">
<h3>Example</h3>
  <p>Syntax Error:</p>
<div class="w3-code notranslate pythonHigh w3-border-red"><span class="pythoncolor" style="color:black">
<span class="pythonkeywordcolor" style="color:mediumblue">if</span> <span class="pythonnumbercolor" style="color:red">5</span> &gt; <span class="pythonnumbercolor" style="color:red">2</span>:<br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Five is greater than two!"</span>)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<p>The number of spaces is up to you as a programmer, but it has 
to be at least one.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">if</span> <span class="pythonnumbercolor" style="color:red">5</span> &gt; <span class="pythonnumbercolor" style="color:red">2</span>:<br>&nbsp;<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Five is greater than two!"</span>)&nbsp;<span class="pythonnumbercolor" style="color:red">
</span><br><span class="pythonkeywordcolor" style="color:mediumblue">if</span> <span class="pythonnumbercolor" style="color:red">5</span> &gt; <span class="pythonnumbercolor" style="color:red">2</span>:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Five is greater than two!"</span>)&nbsp;<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
</div>

<hr>

<div id="variables">
<h1>Python <span class="color_h1">Variables</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/TqPzwenhMj0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br>

<h2>Creating Variables</h2>
<p>Variables are containers for storing data values.</p>
<p>Unlike other programming languages, Python has no command for declaring a variable.</p>

<p>A variable is created the moment you first assign a value to it.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
x = <span class="pythonnumbercolor" style="color:red">5</span><br>
y = <span class="pythonstringcolor" style="color:brown">"John"</span><br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(x)<br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(y)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<p>Variables do not need to be declared with any particular type and can even change type after they have been set.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
x = <span class="pythonnumbercolor" style="color:red">4</span> <span class="commentcolor" style="color:green"># x is of type int<br></span>
x = <span class="pythonstringcolor" style="color:brown">"Sally"</span> <span class="commentcolor" style="color:green"># x is now of type str<br></span>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(x)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<p>String variables can be declared either by using single or double quotes:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
x = <span class="pythonstringcolor" style="color:brown">"John"</span><br><span class="commentcolor" style="color:green"># is the same as<br></span>x = <span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonstringcolor" style="color:brown">'John'</span><span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<hr>

<h2>Variable Names</h2>

A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for Python variables:

<ul>
<li>A variable name must start with a letter or the underscore character</li>
<li>A variable name cannot start with a number</li>
<li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
<li>Variable names are case-sensitive (age, Age and AGE are three different variables)</li>
</ul>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="commentcolor" style="color:green">#Legal variable names:<br></span>myvar = <span class="pythonstringcolor" style="color:brown">"John"</span><br>my_var = <span class="pythonstringcolor" style="color:brown">"John"</span><br>_my_var = <span class="pythonstringcolor" style="color:brown">"John"</span><br>myVar = <span class="pythonstringcolor" style="color:brown">"John"</span><br><span class="pythonnumbercolor" style="color:red">
</span>  MYVAR = <span class="pythonstringcolor" style="color:brown">"John"</span><br>myvar2 = <span class="pythonstringcolor" style="color:brown">"John"</span><br><br><span class="commentcolor" style="color:green">#Illegal variable names:<br></span>2myvar = <span class="pythonstringcolor" style="color:brown">"John"</span><br>my-var = <span class="pythonstringcolor" style="color:brown">"John"</span><br><span class="pythonnumbercolor" style="color:red">
</span>  my var = <span class="pythonstringcolor" style="color:brown">"John"</span> </span></div>
</div>

</div>

<hr>
<div id="comments">
<h1>Python <span class="color_h1">Comments</span></h1>
<hr>

<p>Python has commenting capability for the purpose of in-code documentation.</p>
<p>Comments start with a #, and Python will render the rest of the line as a comment:
</p><div class="w3-example">
<h3>Example</h3>
<p>Comments in Python:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
<span class="commentcolor" style="color:green">#This is a comment.<br></span>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Hello, World!"</span>)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
</div>

<div>
<hr>
<div id="data_types">
<h1>Python <span class="color_h1">Data Types</span></h1>
<hr>
<iframe width="90%"height="315" src="https://www.youtube.com/embed/gCCVsvgR2KU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br>

<h2>Built-in Data Types</h2>
<p>In programming, data type is an important concept.</p>
<p>Variables can store data of different types, and different types can do 
different things.</p>
<p>Python has the following data types built-in by default, in these categories:</p>
<table class="w3-table">
  <tbody><tr>
    <td style="width:160px;">Text Type:</td>
    <td><code class="w3-codespan">str</code></td>
  </tr>
  <tr>
    <td>Numeric Types:</td>
    <td><code class="w3-codespan">int</code>, <code class="w3-codespan">float</code>,
    <code class="w3-codespan">complex</code></td>
  </tr>
  <tr>
    <td>Sequence Types:</td>
    <td><code class="w3-codespan">list</code>, <code class="w3-codespan">tuple</code>, 
    <code class="w3-codespan">range</code></td>
  </tr>
  <tr>
    <td>Mapping Type:</td>
    <td><code class="w3-codespan">dict</code></td>
  </tr>
  <tr>
    <td>Set Types:</td>
    <td><code class="w3-codespan">set</code>, <code class="w3-codespan">frozenset</code></td>
  </tr>
  <tr>
    <td>Boolean Type:</td>
    <td><code class="w3-codespan">bool</code></td>
  </tr>
  <tr>
    <td>Binary Types:</td>
    <td><code class="w3-codespan">bytes</code>, <code class="w3-codespan">bytearray</code>, 
    <code class="w3-codespan">memoryview</code></td>
  </tr>
</tbody></table>

<hr>
<h2>Getting the Data Type</h2>

<p>You can get the data type of any object by using the <code class="w3-codespan">type()</code> function:</p>

<div class="w3-example">
<h3>Example</h3>
  <p>Print the data type of the variable x:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
x = <span class="pythonnumbercolor" style="color:red">5</span><br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonkeywordcolor" style="color:mediumblue">type</span>(x))<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

<hr>

<h2>Setting the Data Type</h2>

<p>In Python, the data type is set when you assign a value to a variable:</p>

<table id="dtref" class="w3-table-all notranslate">
<tbody><tr>
<th style="min-width:250px">Example</th>
<th>Data Type</th>
</tr>
<tr>
<td>x = "Hello World"</td>
<td>str</td>
</tr>
<tr>
<td>x = 20</td>
<td>int</td>
</tr>
<tr>
<td>x = 20.5</td>
<td>float</td>
</tr>
<tr>
<td>x = 1j</td>
<td>complex</td>
</tr>
<tr>
<td>x = ["apple", "banana", "cherry"]</td>
<td>list</td>
</tr>
  <tr>
<td>x = ("apple", "banana", "cherry")</td>
<td>tuple</td>
  </tr>
  <tr>
<td>x = range(6)</td>
<td>range</td>
  </tr>
  <tr>
<td>x = {"name" : "John", "age" : 36}</td>
<td>dict</td>
  </tr>
  <tr>
<td>x = {"apple", "banana", "cherry"}</td>
<td>set</td>
  </tr>
  <tr>
<td>x = frozenset({"apple", "banana", "cherry"})</td>
<td>frozenset</td>
  </tr>
  <tr>
<td>x = True</td>
<td>bool</td>
  </tr>
  <tr>
<td>x = b"Hello"</td>
<td>bytes</td>
  </tr>
  <tr>
<td>x = bytearray(5)</td>
<td>bytearray</td>
  </tr>
<tr>
<td>x = memoryview(bytes(5))</td>
<td>memoryview</td>
</tr>
</tbody></table>
</div>

<hr>
<div id="lists">
<h1>Python <span class="color_h1">Lists</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/Eaz5e6M8tL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>Lists</h2>
<p>A list is a collection which is ordered and changeable. In Python lists are written with square brackets.</p>
<div class="w3-example">
<h3>Example</h3>
<p>Create a List:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
thislist = [<span class="pythonstringcolor" style="color:brown">"apple"</span>, <span class="pythonstringcolor" style="color:brown">"banana"</span>, <span class="pythonstringcolor" style="color:brown">"cherry"</span>]<br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(thislist)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
<br>
<h2>Lists Methods</h2>
<p>Python has a set of built-in methods that you can use on lists.</p>
<table class="w3-table-all notranslate">
<tbody><tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr><td>append()</td><td>Adds an element at 
  the end of the list</td></tr>
<tr><td>clear()</td><td>Removes all the 
  elements from the list</td></tr>
<tr><td>copy()</td><td>Returns a copy of the 
  list</td></tr>
<tr><td>count()</td><td>Returns the number of 
  elements with the specified value</td></tr>
<tr><td>extend()</td><td>Add the elements of a 
  list (or any iterable), to the end of the current list</td></tr>
<tr><td>index()</td><td>Returns the index of 
  the first element with the specified value</td></tr>
<tr><td>insert()</td><td>Adds an element at 
  the specified position</td></tr>
<tr><td>pop()</td><td>Removes the element at the 
  specified position</td></tr>
<tr><td>remove()</td><td>Removes the  
  item with the specified value</td></tr>
<tr><td>reverse()</td><td>Reverses the order 
  of the list</td></tr>
<tr><td>sort()</td><td>Sorts the list</td></tr>
</tbody></table>
</div>

<div id="tuples">
<h1>Python <span class="color_h1">Tuples</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/Mf7eFtbVxFM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>Tuples</h2>
<p>A tuple is a collection which is ordered and <strong>unchangeable</strong>. In Python tuples are written with round brackets.</p>
<div class="w3-example">
<h3>Example</h3>
<p>Create a Tuple:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
thistuple = (<span class="pythonstringcolor" style="color:brown">"apple"</span>, <span class="pythonstringcolor" style="color:brown">"banana"</span>, <span class="pythonstringcolor" style="color:brown">"cherry"</span>)<br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(thistuple)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
<br>
<h2>Tuple Methods</h2>
<p>Python has two built-in methods that you can use on tuples.</p>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:20%">Method</th>
<th>Description</th>
</tr>
<tr><td>count()</td><td>Returns the number of times a specified value occurs in a tuple</td></tr>
<tr><td>index()</td><td>Searches the tuple for a specified value and returns the position of where it was found</td></tr>
</tbody></table>
</div>

<hr>
<div id="dictionary">
<h1>Python <span class="color_h1">Dictionary</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/2IsF7DEtVjg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>Dictionary</h2>
<p>A dictionary is a collection which is unordered, changeable and indexed. In Python dictionaries are written with curly brackets, and 
they have keys and values.</p>
<div class="w3-example">
<h3>Example</h3>
<p>Create and print a dictionary:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
thisdict =<span class="pythonnumbercolor" style="color:red">	</span>{<br><span class="pythonnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="pythonstringcolor" style="color:brown">"brand"</span>: <span class="pythonstringcolor" style="color:brown">"Ford"</span>,<br><span class="pythonnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="pythonstringcolor" style="color:brown">"model"</span>: <span class="pythonstringcolor" style="color:brown">"Mustang"</span>,<br><span class="pythonnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="pythonstringcolor" style="color:brown">"year"</span>: <span class="pythonnumbercolor" style="color:red">1964</span><br><span class="pythonnumbercolor" style="color:red">
</span>}<br>
<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(thisdict)<br><span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
<br>
<h2>Dictionary Methods</h2>
<p>Python has a set of built-in methods that you can use on dictionaries.</p>
<table class="w3-table-all notranslate">
<tbody><tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr><td>clear()</td><td>Removes all the elements from the dictionary</td></tr>
<tr><td>copy()</td><td>Returns a copy of the dictionary</td></tr>
<tr><td>fromkeys()</td><td>Returns a dictionary with the specified keys and value</td></tr>
<tr><td>get()</td><td>Returns the value of the specified key</td></tr>
<tr><td>items()</td><td>Returns a list containing a tuple for each key value pair</td></tr>
<tr><td>keys()</td><td>Returns a list containing the dictionary's keys</td></tr>
<tr><td>pop()</td><td>Removes the element with the specified key</td></tr>
<tr><td>popitem()</td><td>Removes the last 
  inserted key-value pair</td></tr>
<tr><td>etdefault()</td><td>Returns the value of the specified key. If the key does not exist: insert the key, with the specified value</td></tr>
<tr><td>update()</td><td>Updates the dictionary with the specified key-value pairs</td></tr>
<tr><td>values()</td><td>Returns a list of all the values in the dictionary</td></tr>
</tbody></table>
</div>

<hr>
<div id="ifelse">
<h1>Python <span class="color_h1">if...else</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/PqFKRqpHrjw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>if</h2>
<p>"if" means that if the condition is true run the code.</p>
<h2>elif</h2>
<p>The <span class="w3-codespan">elif</span> keyword is pythons way of saying "if the previous conditions were not true, then 
try this condition".</p>
<h2>else</h2>
<p>The <span class="w3-codespan">else</span> keyword catches anything which isn't caught by the preceding conditions.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
a = <span class="pythonnumbercolor" style="color:red">200</span><br>
b = <span class="pythonnumbercolor" style="color:red">33</span><br>
<span class="pythonkeywordcolor" style="color:mediumblue">if</span> b &gt; a:<br><span class="pythonnumbercolor" style="color:red">
	</span>&nbsp;
	<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"b is greater than a"</span>)<br>
<span class="pythonkeywordcolor" style="color:mediumblue">elif</span> a == b:<br><span class="pythonnumbercolor" style="color:red">
	</span>&nbsp;
	<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"a and b are equal"</span>)<br><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">else</span>:<br><span class="pythonnumbercolor" style="color:red">
	</span>&nbsp;
	<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"a is greater than b"</span>)<br><span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
</div>
<hr>
<div id="forloop">
<h1>Python <span class="color_h1">For Loop</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/0ZvaDa8eT5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>Python For Loops</h2>
<br>
<p>A for loop is used for iterating over a sequence (that is either a list, a tuple, a dictionary, a set, or a string).</p>
<br>
<p>This is less like the for keyword in other programming languages, and works more like an iterator method as found in other object-orientated programming languages.</p>
<br>
<p>With the for loop we can execute a set of statements, once for each item in a list, tuple, set etc.</p>

<div class="w3-example">
  <h3>Example</h3>
<p>Print each fruit in a fruit list:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  fruits = [<span class="pythonstringcolor" style="color:brown">"apple"</span>, <span class="pythonstringcolor" style="color:brown">"banana"</span>, <span class="pythonstringcolor" style="color:brown">"cherry"</span>]<br><span class="pythonkeywordcolor" style="color:mediumblue">for</span> <span class="pythonnumbercolor" style="color:red">
</span>  x <span class="pythonkeywordcolor" style="color:mediumblue">in</span> fruits:<br><span class="pythonnumbercolor" style="color:red">
	</span>&nbsp;
	<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(x)<span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>
</div>
<hr>
<div id="whileloop">
<h1>Python <span class="color_h1">While Loop</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/HZARImviDxg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<h2>The while Loop</h2>
<p>With the <span class="w3-codespan">while</span> loop we can execute a set of statements as long as a condition is true.</p>
<div class="w3-example">
<h3>Example</h3>
<p>Print i as long as i is less than 6:</p>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
i = <span class="pythonnumbercolor" style="color:red">1</span><br>
<span class="pythonkeywordcolor" style="color:mediumblue">while</span> i &lt; <span class="pythonnumbercolor" style="color:red">6</span>:<br><span class="pythonnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="pythonkeywordcolor" style="color:mediumblue">print</span>(i)<br><span class="pythonnumbercolor" style="color:red">
</span>&nbsp;&nbsp;i += <span class="pythonnumbercolor" style="color:red">1</span><br><span class="pythonnumbercolor" style="color:red">
</span> </span></div>
</div>

</div>

<hr>
<div id="functions">
<h1>Python <span class="color_h1">Functions</span></h1>
<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/BVfCWuca9nw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>

<p>A function is a block of code which only runs when it is called.</p>
<p>You can pass data, known as parameters, into a function.</p>
<p>A function can return data as a result.</p>

<hr>
<h2>Creating a Function</h2>

<p>In Python a function is defined using the <span class="w3-codespan">def</span> 
keyword:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">def</span> my_function():<br>&nbsp; <span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Hello from a function"</span>) </span></div>
</div>
<hr>
<h2>Calling a Function</h2>

<p>To call a function, use the function name followed by parenthesis:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">def</span> my_function():<br>&nbsp; <span class="pythonkeywordcolor" style="color:mediumblue">print</span>(<span class="pythonstringcolor" style="color:brown">"Hello from a function"</span>)<br><br><span class="pythonnumbercolor" style="color:red">
</span>  <strong>my_function()</strong> </span></div>
</div>

<hr>
<h2>Arguments</h2>

<p>Information can be passed into functions as arguments.</p>
<p>Arguments are specified after the function name, inside the parentheses.
You can add as many arguments as you want, just separate them with a comma.</p>
<p>
The following example has a function with one argument (fname).
When the function is called, we pass along a first name,
which is used inside the function to print the full name:
</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><span class="pythonnumbercolor" style="color:red">
</span>  <span class="pythonkeywordcolor" style="color:mediumblue">def</span> my_function(<strong>fname</strong>):<br>&nbsp; <span class="pythonkeywordcolor" style="color:mediumblue">print</span>(fname + <span class="pythonstringcolor" style="color:brown">" Refsnes"</span>)<br><br><span class="pythonnumbercolor" style="color:red">
</span>  my_function(<strong><span class="pythonstringcolor" style="color:brown">"Emil"</span></strong>)<br>my_function(<strong><span class="pythonstringcolor" style="color:brown">"Tobias"</span></strong>)<br>my_function(<strong><span class="pythonstringcolor" style="color:brown">"Linus"</span></strong>) </span></div>
</div>

<div class="w3-panel w3-note">
  <p><em>Arguments</em> are often shortened to <em>args</em> in Python documentations.</p>
</div>

</div>
</div>
</div>
</div>

    </header>

  <br><br><br>
  <footer class="border-top">
    <div class="container pt-10 pb-9">
      <div class="row">
        <div class="col-sm-5">
        <img alt="Vertex" src="school.png" class="mb-4" width="80">
          <p>
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
            <li><a class="m-list--link" style="color: purple" href="index.php">Home</a></li>
            <li><a class="m-list--link" style="color: purple" href="about.php">About Us</a></li>

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
            <a class="m-list--link"style="color: purple"  href="contactus.php"> Contact Us </a>
          </h3>
          <strong class="" style="color: purple" >Email</strong><br>
          <a class="m-link" style="color: purple" href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>

        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="container m-gab-1 border-top">

      <div class="row">
        <div class="col-md-12 text-center">
          <p><span class="fs-17">©</span> 2020 <span class="m-link">TantSchool</span>. All rights reserved.</p>
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