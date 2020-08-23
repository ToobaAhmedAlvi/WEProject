<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="styles.css" type="text/css">
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
      <a href="#intro">CSS Introduction</a>
      <a href="#syntax">CSS Syntax</a>
      <a href="#select">CSS Selectors</a>
      <a href="#howto">CSS How To</a>
      <a href="#comments">CSS Comments</a>
      <a href="#color">CSS Colors</a>
      <a href="#bg">CSS BackGrounds</a>
      <a href="#margin">CSS Margins</a>
      <a href="#border">CSS Borders</a>
      <a href="#padding">CSS Padding</a>
      <a href="#box">CSS Box Model</a>
      <a href="#font">CSS Fonts</a>
      <a href="#table">CSS Tables</a>
      <a href="#list">CSS Lists</a>
      
    </div>
</div>
<div class="container">
  <div class="card">
<div id="intro">
<h1>CSS  <span class="color_h1">Introduction</span></h1>

<hr>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/qKoajPPWpmo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h2>What is CSS?</h2>


<ul>
<li>CSS stands for Cascading Style Sheets</li>

 
<li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
<li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
<li>External stylesheets are stored in CSS files</li>
</ul>

<h3>Why Use CSS?</h3>
<p>CSS is used to define styles for your web pages, including the design
, layout and variations in display for different devices and screen sizes.</p>


<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
<span class="pythonnumbercolor" style="color:red">body</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">lightblue;</span><br>}<br>
 <span class="pythonnumbercolor" style="color:red">h1</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">white;</span><br>
<span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>
 }<br><span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">font-family:</span>
 <span class="pythonstringcolor" style="color:brown">verdana;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">font-size:</span>
 <span class="pythonstringcolor" style="color:brown">20px;</span><br>}
</div>
</div>

<br><hr>
<h3 id="syntax">CSS Syntax</h3>
<hr>
<p>A CSS rule-set consists of a selector and a declaration block:<p>
<img src="selector.gif" width="90%">
<p>The selector points to the HTML element you want to style.</p>
<p>The declaration block contains one or more declarations separated by semicolons.</p>
<p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
<p>Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.</p>

<div class="w3-example">
<h3>Example</h3>
<p>In this example all <p> elements will be center-aligned, with a red text color:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>
</div><h5>Example Explained</h5>

<li>p is a selector in CSS (it points to the HTML element you want to style with p tag.</li>
<li>color is a property, and red is the property value</li>
<li>text-align is a property, and center is the property value</li>
<br><hr>
<h3 id="select">CSS Selectors</h3>
<hr>
<p>CSS selectors are used to "find" (or select) the HTML elements you want to style.</p>
<br>
<p>We can divide CSS selectors into five categories:<p>
<ul>
<li>Simple selectors (select elements based on name, id, class)</li>
<li>Combinator selectors (select elements based on a specific relationship between them)</li>
<li>Pseudo-class selectors (select elements based on a certain state)</li>
<li>Pseudo-elements selectors (select and style a part of an element)</li>
<li>Attribute selectors (select elements based on an attribute or attribute value)</li>
<li>This page will explain the most basic CSS selectors.</li>
</ul>
<h3>The CSS element Selector</h3>
<p>The element selector selects HTML elements based on the element name.</p>
<div class="w3-example">
<h3>Example</h3>
<p>Here, all <p> elements on the page will be center-aligned, with a red text color: </p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>

<h3>The CSS id Selector</h3>
<p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
<p>The id of an element is unique within a page, so the id selector is used to select one unique element!</p>
<p>To select an element with a specific id, write a hash (#) character, followed by the id of the element.</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/ZuuEdXXzG7I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-example">
<h3>Example</h3>
<p>The CSS rule below will be applied to the HTML element with id="para1":</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">&#35;paral</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>

<p>Note: An id name cannot start with a number!</p>

<h3>The CSS class Selector</h3>
<p>The class selector selects HTML elements with a specific class attribute.</p>
<p>To select elements with a specific class, write a period (.) character, followed by the class name.</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/u4dLB9NP3IA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-example">
<h3>Example</h3>
<p>In this example all HTML elements with class="center" will be red and center-aligned:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">.center</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">green;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>
</div>
<p>HTML elements can also refer to more than one class.</p>
<p>NOTE: A class name cannot start with a number!</p>

<h3>The CSS Universal Selector</h3>
<p>The universal selector (*) selects all HTML elements on the page.</p>
<div class="w3-example">
<h3>Example</h3>
<p>The CSS rule below will affect every HTML element on the page:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">*</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>
</div>

<h3>The CSS Grouping Selector</h3>
<p>The grouping selector selects all the HTML elements with the same style definitions.</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/JT0gyzbpD2U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-example">
<h3>Example</h3>
<p>Look at the following CSS code (the h1, h2, and p elements have the same style definitions):</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">h1</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
 <span class="pythonnumbercolor" style="color:red">h2</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">green;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>
</div>
<p>It will be better to group the selectors, to minimize the code.</p>

<p>To group selectors, separate each selector with a comma.</p>
<div class="w3-example">
<h3>Example</h3>
<p>In this example we have grouped the selectors from the code above:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">h1,h2,p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">green;</span><br>
 <span class="pythonkeywordcolor" style="color:mediumblue">text-align:</span>
 <span class="pythonstringcolor" style="color:brown">center;</span><br>}
</div>
</div>
<br><hr>
<h3 id="howto">How To Add CSS?</h3>
<hr>
<p>When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.</p>
<h3>Three Ways to Insert CSS</h3>
<p>There are three ways of inserting a style sheet:</p>
<ul>
<li>External CSS</li>
<li>Internal CSS</li>
<li>Inline CSS</li>
<li>External CSS</li>
</ul>
<h3>External CSS</h3>
<p>With an external style sheet, you can change the look of an entire website by changing just one file!</p>

<p>Each HTML page must include a reference to the external style sheet file inside the <link> element, inside the head section.</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/QT_lIti-8Zk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-example">
<h3>Example</h3>
<p>External styles are defined within the <link> element, inside the <head> section of an HTML page:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><
<span  class="pythonstringcolor" style="color:brown">head</span>><br><
<span  class="pythonstringcolor" style="color:brown">link</span>
 <span class="pythonnumbercolor" style="color:red">rel</span>=
 <span class="pythonkeywordcolor" style="color:mediumblue">"stylesheet"</span>
 <span class="pythonnumbercolor" style="color:red">type</span>=
 <span class="pythonkeywordcolor" style="color:mediumblue">"text/css"</span>
 <span class="pythonnumbercolor" style="color:red">href</span>=
 <span class="pythonkeywordcolor" style="color:mediumblue">"mystyle.css"</span>><br>
 <span class="pythoncolor" style="color:black"><
<span  class="pythonstringcolor" style="color:brown">/head</span>><br><
<span  class="pythonstringcolor" style="color:brown">body</span>><br><
<span  class="pythonstringcolor" style="color:brown">h1</span>>This is a heading < /
<span  class="pythonstringcolor" style="color:brown">h1</span>><br><
<span  class="pythonstringcolor" style="color:brown">p</span>>This is a paragraph.< /
<span  class="pythonstringcolor" style="color:brown">p</span>><br><
/<span><span  class="pythonstringcolor" style="color:brown">body</span>><br><<span>/
<span  class="pythonstringcolor" style="color:brown">html</span>><br>
</p></span>

</div>
</div>
<h5>Making Speparate file "mystyle.css"</h5>
<p>An external style sheet can be written in any text editor, and must be saved with a .css extension.</p>

<p>The external .css file should not contain any HTML tags.</p>

<p>Here is how the "mystyle.css" file looks like:</p>

<div class="w3-example">
<h3>Example</h3>

<div class="w3-code notranslate pythonHigh">
<span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">body</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">lightblue;</span>{<br>
 <span class="pythonnumbercolor" style="color:red">h1</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">navy;</span><br>} 
 <span class="pythonkeywordcolor" style="color:mediumblue">margin-left:</span>
 <span class="pythonstringcolor" style="color:brown">20px;</span><br>
</div>
</div>

<p>Note: Do not add a space between the property value and the unit (such as margin-left: 20 px;). The correct way is: <strong>margin-left: 20px;</strong></p>
<h3>Internal CSS</h3>
<p>An internal style sheet may be used if one single HTML page has a unique style.</p>
<p>The internal style is defined inside the <b>style</b> element, inside the head section.</p>

<div class="w3-example">
<h3>Example</h3>
<p>Internal styles are defined within the style element, inside the head section of an HTML page:</p>
<div class="w3-code notranslate pythonHigh">
<span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">body</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">linen;</span>{<br>
 <span class="pythonnumbercolor" style="color:red">h1</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">color:</span>
 <span class="pythonstringcolor" style="color:brown">maroon;</span><br>} 
 <span class="pythonkeywordcolor" style="color:mediumblue">margin-left:</span>
 <span class="pythonstringcolor" style="color:brown">40px;</span><br><
 <span  class="pythonstringcolor" style="color:brown">h1</span>>This is a heading < /
<span  class="pythonstringcolor" style="color:brown">h1</span>><br><
<span  class="pythonstringcolor" style="color:brown">p</span>>This is a paragraph.< /
<span  class="pythonstringcolor" style="color:brown">p</span>><br>

</div>
</div>

<h3>Inline CSS</h3>
<p>An inline style may be used to apply a unique style for a single element.</p>
<p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/bHxGUfgbrY8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-example">
<h3>Example</h3>
<p>Inline styles are defined within the "style" attribute of the relevant element:</p>

<div class="w3-code notranslate pythonHigh"><span class="pythoncolor" style="color:black"><
<span  class="pythonstringcolor" style="color:brown">body</span>><br><
<span  class="pythonstringcolor" style="color:brown">h1</span>
<span class="pythonnumbercolor" style="color:red">style</span>=
<span class="pythonkeywordcolor" style="color:mediumblue">"color:blue;text-align:center;"</span>This is a heading < /
<span  class="pythonstringcolor" style="color:brown">h1</span>><br><
<span  class="pythonstringcolor" style="color:brown">p</span>
<span class="pythonnumbercolor" style="color:red">style</span>=
<span class="pythonkeywordcolor" style="color:mediumblue">"color:red;"</span>>This is a paragraph.< /
<span  class="pythonstringcolor" style="color:brown">p</span>><br><
/<span><span  class="pythonstringcolor" style="color:brown">body</span>><br>
</p></span>

</div>
</div>

Example
Inline styles are defined within the "style" attribute of the relevant element:

<!DOCTYPE html>
<html>
<body>

<h1 style="color:blue;text-align:center;">This is a heading</h1>
<p style="color:red;">This is a paragraph.</p>

</body>
</html>
Tip: An inline style loses many of the advantages of a style sheet (by mixing content with presentation). Use this method sparingly.

<h3>Cascading Order</h3>
<h5>What style will be used when there is more than one style specified for an HTML element?</h5>
<p>All the styles in a page will "cascade" into a new "virtual" style sheet by the following rules, where number one has the highest priority:</p>
<ul>
<li>Inline style (inside an HTML element)</li>
<li>External and internal style sheets (in the head section)</li>
<li>Browser default</li>
</ul>
<p>
<p>So, an inline style has the highest priority, and will override external and internal styles and browser defaults.</p>
<br>
<hr>
<h3 id="comment">CSS Comments</h3>
<hr>
<p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p>
<p>Comments are ignored by browsers.</p>

<p>A CSS comment is placed inside the <b>style</b> element, and starts with <b>/* and ends with */:</b>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate pythonHigh">
<span class="pythoncolor" style="color:black">
<p>/* this ia a single line comment */</p>
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>}
<div class="w3-example">
<h3>Example</h3>
<p>You can add comments wherever you want in the code:</p>
<div class="w3-code notranslate pythonHigh">
<span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>} <span> /* Set text color to red */</span><br>
 <br>


<div class="w3-example">
<p>Comments can also span multiple lines: </p>
<h3>Example</h3>
<p>/* This is<br>
a multi-line<br>
comment */</p>
<div class="w3-code notranslate pythonHigh">
<span class="pythoncolor" style="color:black">
 <span class="pythonnumbercolor" style="color:red">p</span> {<br>
 <span class="pythonkeywordcolor" style="color:mediumblue">background-color:</span>
 <span class="pythonstringcolor" style="color:brown">red;</span><br>}<br>
 <hr>
<h3 id="color">CSS Colors</h3>
<hr>
<p>Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.</p>

<h5>CSS Color Names</h5>
<p>In CSS, a color can be specified by using a color name:</p>

Tomato
Orange
DodgerBlue
MediumSeaGreen
Gray
SlateBlue
Violet
LightGray

<p>CSS/HTML support 140 standard color names.

<h5>CSS Background Color</h5>
<p>You can set the background color for HTML elements:</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/UO0ZPL8yMpU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<p>Hello World


Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.

Example
<h1 style="background-color:DodgerBlue;">Hello World</h1>
<p style="background-color:Tomato;">Lorem ipsum...</p>

<h5>CSS Text Color</h5>
<p>You can set the color of text:</p>

Hello World
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.

Example
<h1 style="color:Tomato;">Hello World</h1>
<p style="color:DodgerBlue;">Lorem ipsum...</p>
<p style="color:MediumSeaGreen;">Ut wisi enim...</p>
<h5>CSS Border Color</h5>
<p>You can set the color of borders:</p>

Hello World
Hello World
Hello World
Example
<h1 style="border:2px solid Tomato;">Hello World</h1>
<h1 style="border:2px solid DodgerBlue;">Hello World</h1>
<h1 style="border:2px solid Violet;">Hello World</h1>
<h5>CSS Color Values</h5>
<p>In CSS, colors can also be specified using RGB values, HEX values, HSL values, RGBA values, and HSLA values:</p>

Same as color name "Tomato":

rgb(255, 99, 71)
#ff6347
hsl(9, 100%, 64%)
Same as color name "Tomato", but 50% transparent:

rgba(255, 99, 71, 0.5)
hsla(9, 100%, 64%, 0.5)
Example
<h1 style="background-color:rgb(255, 99, 71);">...</h1>
<h1 style="background-color:#ff6347;">...</h1>
<h1 style="background-color:hsl(9, 100%, 64%);">...</h1>

<h1 style="background-color:rgba(255, 99, 71, 0.5);">...</h1>
<h1 style="background-color:hsla(9, 100%, 64%, 0.5);">...</h1>

<h3 id="bg"> CSS Backgrounds</h3>

<p>The CSS background properties are used to define the background effects for elements.</p>

<p>In these chapters, you will learn about the following CSS background properties:</p>
<ul>
<li>background-color</li>
<li>background-image</li>
<li>background-repeat</li>
<li>background-attachment</li>
<li>background-position</li>
<li>CSS background-color</li>
</ul>
<p>The background-color property specifies the background color of an element.</p>

Example
The background color of a page is set like this:

body {
  background-color: lightblue;
}
<p>With CSS, a color is most often specified by:</p>

a valid color name - like "red"
a HEX value - like "#ff0000"
an RGB value - like "rgb(255,0,0)"
Look at CSS Color Values for a complete list of possible color values.

<h5>Other Elements</h5>
<p>You can set the background color for any HTML elements:</p>

Example
Here, the < h1>, < p>, and < div> elements will have different background colors: 

h1 {
  background-color: green;
}

div {
  background-color: lightblue;
}

p {
  background-color: yellow;
}
<h5>Opacity / Transparency</h5>
<p>The opacity property specifies the opacity/transparency of an element. It can take a value from 0.0 - 1.0. The lower value, the more transparent:</p>
<iframe width="90%" height="315" src="https://www.youtube.com/embed/KPfak1k4Mgo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
opacity 1

opacity 0.6

opacity 0.3

opacity 0.1

Example
div {
  background-color: green;
  opacity: 0.3;
}
<br>
<hr>
<h3 id="border">CSS Borders</h3>
<hr>
<h5>CSS Border Properties</h5>
<p>The CSS border properties allow you to specify the style, width, and color of an element's border.</p>
<iframe height="315" src="https://www.youtube.com/embed/7J1fGcLggc4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h5>CSS Border Style</h5>
<p>The border-style property specifies what kind of border to display.</p>

<p>The following values are allowed:</p>
<ul>
<li>dotted - Defines a dotted border</li>
<li>dashed - Defines a dashed border</li>
<li>solid - Defines a solid border</li>
<li>double - Defines a double border</li>
<li>groove - Defines a 3D grooved border. The effect depends on the border-color value</li>
<li>ridge - Defines a 3D ridged border. The effect depends on the border-color value</li>
<li>inset - Defines a 3D inset border. The effect depends on the border-color value</li>
<li>outset - Defines a 3D outset border. The effect depends on the border-color value</li>
<li>none - Defines no border</li>
<li>hidden - Defines a hidden border</li>
<ul><br><br>
<p>The border-style property can have from one to four values (for the top border, right border, bottom border, and the left border).</p><br>
<iframe height="315" src="https://www.youtube.com/embed/7J1fGcLggc4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h4>Example</h4>
<h5>Demonstration of the different border styles:</h5>

<p>p.dotted {border-style: dotted;}</p>
<p>p.dashed {border-style: dashed;}</p>
<p>p.solid {border-style: solid;}</p>
<p>p.double {border-style: double;}</p>
<p>p.groove {border-style: groove;}</p>
<p>p.ridge {border-style: ridge;}</p>
<p>p.inset {border-style: inset;}</p>
<p>p.outset {border-style: outset;}</p>
<p>p.none {border-style: none;}</p>
<p>p.hidden {border-style: hidden;}</p>
<p>p.mix {border-style: dotted dashed solid double;}</p>
<h5>Result:</h5>

<p>A dotted border.</p>

<p>A dashed border.</p>

<p>A solid border.</p>

<p>A double border.</p>

<p>A groove border. The effect depends on the border-color value.</p>

<p>A ridge border. The effect depends on the border-color value.</p>

<p>An inset border. The effect depends on the border-color value.</p>

<p>An outset border. The effect depends on the border-color value.</p>

<p>No border.</p>

<p>A hidden border.</p>

<p>A mixed border.</p>
<br>
<hr>
<h3 id="margin">CSS Margins</h3>
<hr>
<p>The CSS margin properties are used to create space around elements, outside of any defined borders.</p>

<p>With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element 
top, right, bottom, and left).</p>

<h5>Margin - Individual Sides</h5>
<p>CSS has properties for specifying the margin for each side of an element:</p>
<ul>
<li>margin-top</li>
<li>margin-right</li>
<li>margin-bottom</li>
<li>margin-left</li>
</ul>
<p>All the margin properties can have the following values:</p>
<ul>
<li>auto - the browser calculates the margin</li>
<li>length - specifies a margin in px, pt, cm, etc.</li>
<li>% - specifies a margin in % of the width of the containing element</li>
<li>inherit - specifies that the margin should be inherited from the parent element</li>

</ul>
Example
Set different margins for all four sides of a <p> element:

p {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}

<br>
<hr>
<h3 id="padding">CSS Padding</h3>
<hr>
<p>The CSS padding properties are used to generate space around an element's content, inside of any defined borders.</p>
<p>With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element 
(top, right, bottom, and left).</p>

<h5>Padding - Individual Sides</h5>
<p>CSS has properties for specifying the padding for each side of an element:</p>
<ul>
<li>padding-top</li>
<li>padding-right</li>
<li>padding-bottom</li>
<li>padding-left</li>
</ul>
<p>All the padding properties can have the following values:</p>

<li>length - specifies a padding in px, pt, cm, etc.</li>
<li>% - specifies a padding in % of the width of the containing element</li>
<li>inherit - specifies that the padding should be inherited from the parent element</li>
<li>Note: Negative values are not allowed.</li>

Example
Set different padding for all four sides of a <div> element:  

div {
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  <br>
  <hr>
  <h3 id="box">The CSS Box Model</h3>
  <hr>
<p>All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.</p>

<p>The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model:</p>
<iframe height="315" src="https://www.youtube.com/embed/3n9UbOvMZ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>Explanation of the different parts:</p>
<li>Content - The content of the box, where text and images appear</li>
<li>Padding - Clears an area around the content. The padding is transparent</li>
<li>Border - A border that goes around the padding and content</li>
<li>Margin - Clears an area outside the border. The margin is transparent</li>
</ul>
<p>The box model allows us to add a border around elements, and to define space between elements.</p>

Example
Demonstration of the box model:

div {
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
<p>The CSS font properties define the font family, boldness, size, and the style of a text.<p>

<li>Difference Between Serif and Sans-serif Fonts</li>
<li>Serif vs. Sans-serif</li>
<br>
<h5>CSS Font Families</h5>
<p>
In CSS, there are two types of font family names:</p>
<li>generic family - a group of font families with a similar look (like "Serif" or "Monospace")</li>
<li>font family - a specific font family (like "Times New Roman" or "Arial")</li>

<h5>Font Family</h5>
<p>The font family of a text is set with the font-family property.</p>
<p>The font-family property should hold several font names as a "fallback" system. If the browser does not support the first font, it tries the next font, and so on.</p>
<p>Start with the font you want, and end with a generic family, to let the browser pick a similar font in the generic family, if no other fonts are available.</p>
<iframe height="315" src="https://www.youtube.com/embed/bWDtPnNkutw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<strong>More than one font family is specified in a comma-separated list:</strong>

Example
Specify the font for three paragraphs:

.serif {
  font-family: "Times New Roman", Times, serif;
}

.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}

.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
Example
Specify the "Impact" font for a paragraph:

p.impact {
  font-family: Impact, Charcoal, sans-serif;
}
<h5>Font Style</h5>
<p>The font-style property is mostly used to specify italic text.</p>

<p>This property has three values:</p>

<li>normal - The text is shown normally</li>
<li>italic - The text is shown in italics</li>
<li>oblique - The text is "leaning" (oblique is very similar to italic, but less supported)</li>
Example
p.normal {
  font-style: normal;
}

p.italic {
  font-style: italic;
}

p.oblique {
  font-style: oblique;
}
<h5>Font Weight</h5>
<p>The font-weight property specifies the weight of a font:</p>
<iframe height="315" src="https://www.youtube.com/embed/DFgXjen2JS0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
Example
p.normal {
  font-weight: normal;
}

p.thick {
  font-weight: bold;
}
<h5>Font Size</h5>
<p>The font-size property sets the size of the text.</p>
<p>Being able to manage the text size is important in web design. However, you should not use font size adjustments to make paragraphs look like headings, or headings look like paragraphs.</p>
<p>Always use the proper HTML tags, like<b> < h1> - < h6> </b> for headings and <p> for paragraphs.</p>

<p>The font-size value can be an absolute, or relative size.</p>
<hr>
<h6> Absolute size </h6>
<ul>
<li>Sets the text to a specified size</li>
<li>Does not allow a user to change the text size in all browsers (bad for accessibility reasons)</li>
<li>Absolute size is useful when the physical size of the output is known</li>
</ul>
<hr>
<h6>Relative size:</h6>
<ul>
<li>Sets the size relative to surrounding elements</li>
<li>Allows a user to change the text size in browsers</li>
</ul>
<p>Note: If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).</p>

<li>Set Font Size With Pixels</li>
<li>Setting the text size with pixels gives you full control over the text size:</li>
<ul>
Example
h1 {
  font-size: 40px;
}

h2 {
  font-size: 30px;
}
<br>
<hr>
<h3 id= "table">Table Borders</h3>
<hr>
<p>To specify table borders in CSS, use the border property.</p>

<p>The example below specifies a black border for <strong> table , th, and td </strong> elements:</p>


Example
table, th, td {
  border: 1px solid black;
}
<p>Notice that the table in the example above has double borders. This is because both the table and the <th> and <td> elements have separate borders.</p>

<h5>Collapse Table Borders</h5>
<p>The border-collapse property sets whether the table borders should be collapsed into a single border:</p>


Example
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
<br>
<hr>
<h3 id="list">CSS Lists</h3>
<hr>
<h6>Unordered Lists:</h6>
<ul>
<li>Coffee</li>
<li>Tea</li>
<li>Coca Cola</li>
<li>Coffee</li>
<li>Tea</li>
<li>Coca Cola</li>
</ul>

<h6>Ordered Lists:</h6>
<ol>
<li>Coffee</li>
<li>Tea</li>
<li>Coca Cola</li>
<li>Coffee</li>
<li>Tea</li>
<li>Coca Cola</li>
</ol>
<h5>HTML Lists and CSS List Properties</h5>
<p>In HTML, there are two main types of lists:</p>
<ol>
<li>unordered lists (< ul >) - the list items are marked with bullets</li>
<li>ordered lists (< ol >) - the list items are marked with numbers or letters</li>
</ol>
<p>The CSS list properties allow you to:</p>
<ul>
<li>Set different list item markers for ordered lists</li>
<li>Set different list item markers for unordered lists</li>
<li>Set an image as the list item marker</li>
<li>Add background colors to lists and list items</li>
</ul>
<h5>Different List Item Markers</h5>
<p>The list-style-type property specifies the type of list item marker.</p>

<p>The following example shows some of the available list item markers:</p>

Example
ul.a {
  list-style-type: circle;
}

ul.b {
  list-style-type: square;
}

ol.c {
  list-style-type: upper-roman;
}

ol.d {
  list-style-type: lower-alpha;
}
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
            <li><a class="m-list--link" style="color: purple" href="exercises.php">Features</a></li>
            <li><a class="m-list--link" style="color: purple" href="courses.php">Packages</a></li>
            <li><a class="m-list--link" style="color: purple" href="login.php">Sign in</a> </li>

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