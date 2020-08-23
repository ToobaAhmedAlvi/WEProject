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
    document.getElementById('menu').style.width = '300px';
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
      <a href="#intro">HTML Introduction</a>
      <a href="#element">HTML Element</a>
      <a href="#attributes">HTML Attributes</a>
      <a href="#headings">HTML Headings and Paragraphs</a>
      <a href="#styles">HTML Styles</a>
      <a href="#links">HTML Links</a>
      <a href="#images">HTML Images </a>
      <a href="#iframe">HTML Iframes</a>
      <a href="#lists">HTML Lists</a>
      <a href="#tables">HTML Tables</a>
      <a href="#blockinline">HTML Block and Inline Elements</a>
      
      
    </div>
</div>
<div class="container">
<div id="intro">
<h1>HTML <span class="color_h1">Introduction</span></h1>

<hr>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/bWPMSSsVdPk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h2>What is HTML?</h2>
<p>HTML is the standard markup language for Web pages.
This tutorial follows the latest HTML5 standard.
HTML is easy to learn - You will enjoy it!</p>

<p>It is used to:</p>

<ul>
<li>create Web pages, </li>
<li>describe the structure of a Web page, </li>
<li>tell the browser how to display the content.</li>
</ul>

<h3>What can HTML do?</h3>
<ul>
<li>Document creation on the internet is dominated by HTML.</li>
<li>HTML is heavily used to embed the hyperlink within the web pages.</li>
<li>At the elementary level in applications of HTML, queries can be set to utilize the images, which are responsive in nature.</li>
<li>HTML5 has its application cache mechanism which would define how the browser manages the offline situation.</li>

</ul>

<h3>HTML Elements</h3>
<ul>
<li>An HTML element is defined by a start tag, some content, and an end tag..</li>
<li>Some HTML elements have no content (like the <br> element). These elements are called empty elements. Empty elements do not have an end tag!.</li>
<li>HTML elements can be nested (this means that elements can contain other elements).All HTML documents consist of nested HTML elements
.</li>
</ul>
<hr>
</div>

<div id="element">
<h1>HTML <span class="color_h1">Element</span></h1>
<hr>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/XXrpsQqAlIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<hr>
</div>

<div id="attributes">
<h1>Html <span class="color_h1">Attributes</span></h1>
<hr>
<ul>
<li> All HTML elements can have attributes.</li>
<li> Attributes provide additional information about elements.</li>
<li> Attributes are always specified in the start tag.</li>
<li> Attributes usually come in name/value pairs like: name="value" </li>
</ul>

<div class="w3-example">
<h3>The href Attribute</h3>
<p>The <span style="color: red"><</span><span style="color: red">a</span><span style="color: red">></span> tag defines a hyperlink. The <span style="color: red">href</span> attribute specifies the URL of the page the link goes to:</p>
<img src="1-vert.jpg" width="90%" height="500">
<br>
<br>
<br>
<h3>The style Attribute </h3>
<p>The style attribute is used to add styles to an element, such as color, font, size, and more.</p>
<img src="3-vert.jpg" width="90%" height="500">






<hr>

<div id="headings">
<h1>Html <span class="color_h1">Headings and Paragraphs</span></h1>
<hr>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/yqcd-XkxZNM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<br>
<h2>HTML Headings</h2>
<p>HTML headings are defined with the <span style="color: red"><</span> <span style="color: red">h1</span> <span style="color: red">></span> to <span style="color: red"><</span><span style="color: red">h6</span>></span> tags. <br>
<span style="color: red"><</span><span style="color: red">h1</span><span style="color: red">></span> defines the most important heading.<span style="color: red"><</span><span style="color: red">h6</span><span style="color: red">></span> defines the least important heading.</p>
<br>
<h2>HTML Paragraphs</h2>
<p>The HTML <span style="color: red"><</span><span style="color: red">p</span><span style="color: red">></span> element defines a paragraph. <br>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</p>
<br>
<img src="5-vert.jpg" width="90%" height="700">

<hr>
<div id="styles">
<h1>Html <span class="color_h1">Styles</span></h1>
<hr>

<p>The HTML <span style="color: red">style</span> attribute is used to add styles to an element, such as color, font, size, and more.</p>
<ul>
  <li>Use the style attribute for styling HTML elements</li>
<li>Use background-color for background color</li>
<li>Use color for text colors</li>
<li>Use font-family for text fonts</li>
<li>Use font-size for text sizes</li>
<li>Use text-align for text alignment</li>
</ul>
<br>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/d7nWQQfexmw?list=PL5197F04B1F3EF3C1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<div>
<hr>
<div id="links">
<h1>Html <span class="color_h1">Links - Hyperlinks</span></h1>
<hr>
<p>HTML links are hyperlinks.
You can click on a link and jump to another document.
When you move the mouse over a link, the mouse arrow will turn into a little hand.
Note: A link does not have to be text. A link can be an image or any other HTML element!</p>
<br>
<h3>HTML Links - The target Attribute  </h3>
  <p>
  By default, the linked page will be displayed in the current browser window. To change this, you must specify another target for the link.<br>
The <span style="color: red">target</span> attribute specifies where to open the linked document.
<ul>The <span style="color: red">target</span> attribute can have one of the following values:

<li>  <span style="color: red">_self</span> - Default. Opens the document in the same window/tab as it was clicked</li>
<li><span style="color: red"> _blank </span>- Opens the document in a new window or tab</li>
<li><span style="color: red"> _parent </span>- Opens the document in the parent frame</li>
<li><span style="color: red">_top </span> - Opens the document in the full body of the window</li> 
</ul>
  </p>

<h2>External Links</h2>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/tMdICKxtkVA?list=PL5197F04B1F3EF3C1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br><br>


<hr>
<div id="images">
<h1>Html <span class="color_h1"> Images</span></h1>
<hr>
<p>
<h2>HTML Images Syntax</h2>
The HTML <span style="color: red"><</span><span style="color: red">img</span><span style="color: red">></span> tag is used to embed an image in a web page.
Images are not technically inserted into a web page; images are linked to web pages. The <span style="color: red"><</span><span style="color: red">img</span><span style="color: red">></span> tag creates a holding space for the referenced image.
The <span style="color: red"><</span><span style="color: red">img</span><span style="color: red">></span> tag is empty, it contains attributes only, and does not have a closing tag.
The <span style="color: red"><</span><span style="color: red">img</span><span style="color: red">></span> tag has two required attributes:

src - Specifies the path to the image
alt - Specifies an alternate text for the image
</p>
<iframe width="90%" height="480" src="https://www.youtube.com/embed/8A7XdS86XH4?list=PL5197F04B1F3EF3C1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<h2>Images</h2>
<p>Images can improve the design and the appearance of a web page..</p>

<hr>
<div id="iframe">
<h1>Html <span class="color_h1">Iframes</span></h1>
<hr>
<p>An HTML iframe is used to display a web page within a web page.</p>

<img src="99-vert.jpg" width="90%">
<br>
<ul>
<li>The HTML <span style="color: red"><</span><span style="color: red">iframe</span><span style="color: red">></span> tag specifies an inline frame </li>
<li>The <span style="color: red;">src</span> attribute defines the URL of the page to embed </li>
<li>Always include a <span style="color: red;">title</span> attribute (for screen readers) </li>
<li>The <span style="color: red;">height</span> and <span style="color: red;">width</span> attributes specifies the size of the iframe </li>
<li>Use <span style="color: red;">border:none</span>; to remove the border around the iframe </li>
</ul>


<hr>
<div id="lists">
<h1>Html <span class="color_h1">Lists</span></h1>
<hr>
<p>HTML lists allow web developers to group a set of related items in lists.</p>
<h2>Unordered HTML List</h2>
An unordered list starts with the <span style="color: red"><</span><span style="color: red">ul</span><span style="color: red">></span> tag. Each list item starts with the <span style="color: red"><</span><span style="color: red">li</span><span style="color: red">></span> tag.<br>
  The list items will be marked with bullets (small black circles) by default:
<h2>Ordered HTML List</h2>
An ordered list starts with the <span style="color: red"><</span><span style="color: red">ol</span><span style="color: red">></span> tag. Each list item starts with the <span style="color: red"><</span><span style="color: red">li</span><span style="color: red">></span> tag.<br>
  The list items will be marked with numbers by default:
  <h2>HTML Description Lists</h2>
  HTML also supports description lists.<br>
A description list is a list of terms, with a description of each term.<br>
The <span style="color: red"><</span><span style="color: red">dl</span><span style="color: red">></span> tag defines the description list, the <span style="color: red"><</span><span style="color: red">dt</span><span style="color: red">></span> tag defines the term (name), and the <span style="color: red"><</span><span style="color: red">dd</span><span style="color: red">></span> tag describes each term: <br><br>

<iframe width="90%" height="480" src="https://www.youtube.com/embed/rVbtLx3gv2Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<hr>
<div id="tables">
<h1>Html <span class="color_h1">Tables</span></h1>
<hr>

<iframe width="90%" height="480" src="https://www.youtube.com/embed/w2inJrRGC9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>HTML tables allow web developers to arrange data into rows and columns.</p>
<br>
<h2>Define an HTML Table</h2>
<li>The <span style="color: red"><</span><span style="color: red">table</span><span style="color: red">></span>
 <li>Each table row is defined with a <span style="color: red"><</span><span style="color: red">tr</span><span style="color: red">></span> tag. Each table header is defined with a <th> tag. Each table data/cell is defined with a <span style="color: red"><</span><span style="color: red">td</span><span style="color: red">></span> tag.
<li>By default, the text in <span style="color: red"><</span><span style="color: red">th</span><span style="color: red">></span> elements are bold and centered.
<li>By default, the text in <span style="color: red"><</span><span style="color: red">td</span><span style="color: red">></span> elements are regular and left-aligned

<hr>
<div id="blockinline">
<h1>Html <span class="color_h1">Block and Inline Elements</span></h1>
<hr>
<p>
  Every HTML element has a default display value, depending on what type of element it is.<br>
  There are two display values: block and inline.

  <h2>Block-level Elements</h2>
A block-level element always starts on a new line and takes up the full width available (stretches out to the left and right as far as it can).<br>
The <span style="color: red"><</span><span style="color: red">div</span><span style="color: red">></span> element is a block-level element.
<br>
The <span style="color: red"><</span><span style="color: red">div</span><span style="color: red">></span> element is often used as a container for other HTML elements.<br>
Here are the block-level elements in HTML:<br>
<img src="block.png" width="90%">
<br><br>
<h2>Inline Elements</h2>
An inline element does not start on a new line and it only takes up as much width as necessary.<br>
This is a  <span style="color: red"><</span><span style="color: red">span</span><span style="color: red">></span> element inside a paragraph.<br>
The <span style="color: red"><</span><span style="color: red">span</span><span style="color: red">></span> element is an inline container used to mark up a part of a text, or a part of a document.<br>
Here are the inline elements in HTML:<br>
<img src="inline.png" width="90%">
</p>


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
            <li><a class="m-list--link" style="color: purple"  href="index.php">Home</a></li>
            <li><a class="m-list--link" style="color: purple"  href="about.php">About Us</a></li>

          </ul>
        </div>
        <div class="col-sm-2">
          <h3 class="h6 mb-3">
            Service
          </h3>
          <ul class="list-unstyled mb-0">
            <li><a class="m-list--link" style="color: purple"  href="exercises.php">Features</a></li>
            <li><a class="m-list--link" style="color: purple"  href="courses.php">Packages</a></li>
            <li><a class="m-list--link" style="color: purple"  href="login.php">Sign in</a> </li>

          </ul>
        </div>
        <div class="col-sm-3">
          <h3 class="h6 mb-3">
            <a class="m-list--link" style="color: purple"  href="contactus.php"> Contact Us </a>
          </h3>
          <strong class="">Email</strong><br>
          <a class="m-link" style="color: purple"  href="mailto:tantschool.info@gmail.com">tantschool.info@gmail.com</a>

        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="container m-gab-1 border-top">

      <div class="row">
        <div class="col-md-12 text-center">
          <p><span class="fs-17">©</span> 2020 <span style="color: purple"  class="m-link">TantSchool</span>. All rights reserved.</p>
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
