<?php

function generateHead($breadcrum){
	echo "
	<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Frank 'N Stein and Son,LLC</title>
    <link href='includes/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='includes/css/ffs.css'/>
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
  </head>
  <body>
  <div class='fs-header'>
  <div class='container'>
  <div class='col-md-offset-1 col-md-2'>
	<img class='img-responsive pull-left' src='includes/img/logo.png'/>
	</div>
	<div class='col-md-6'>
    <h1>Frank 'N Stein and Son</h1>
    <h5>Professional Tutoring, Test Prep, and Learning</h5>
    <h3>(585)-451-9250</h3>
    <h3>Brighton, New York</h3>
	</div>
	<div class='col-md-3'></div>
</div>
</div>
    <nav class='navbar navbar-default container fs-nav'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button class='navbar-toggle collapsed' type='button' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    </div>
    <div class='collapse nav-navbar navbar-collapse' id='bs-example-navbar-collapse-1'>
     <ul class='nav nav-justified'>
            <li class='active'><a href='index.php'>Home</a></li>
             <li class='dropdown'>
          <a class='dropdown-toggle' role='button' aria-expanded='false' href='#' data-toggle='dropdown'>Services <span class='caret'></span></a>
          <ul class='dropdown-menu' role='menu'>
            <li><a href='services.php#middleschool'>Grades 6 -8 </a></li>
			<li><a href='services.php#highschool'>Grades 9 -12 </a></li>
			<li><a href='services.php#sat'>Standardized Tests</a></li>
			<li><a href='services.php#esl'>ESL/ESOL</a></li>
			<li><a href='services.php#essay'>Essay Assistance</a></li>
          </ul>
        </li>
            <li><a href='testimonials.php'>Testimonials</a></li>
            <li><a href='pricing.php'>Pricing</a></li>
            <li><a href='about.php'>About Us</a></li>
            <li><a href='contact.php'>Contact Us</a></li>
          </ul>
    </div>
  </div>
</nav>
<div class='jumbotron container'>
";
}
function addScripts($scripts){
	$includeScripts = "";
	$includeScripts +=  "<script src='includes/js/"+$scripts+"'></script>";
echo $includeScripts;
}

function footer($breadcrum, $scripts){
echo "</div><!--Main Body  -->
		<footer class='footer-basic-centered'>
			<p class='footer-company-motto'>Where every student is our only student!</p>
			<p class='footer-links'>
				<a href='index.php'>Home</a>
				·
				<a href='services.php'>Services</a>
				·
				<a href='testimonials.php'>Testimonials</a>
				·
				<a href='pricing.html'>Pricing</a>
				·
				<a href='about.php'>About</a>
				·
				<a href='contact.php'>Contact</a>
			</p>
			<p class='footer-company-name'>Frank 'N Stein and Son, LLC &copy; 2016</p>
		</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src='includes/js/jquery-1.12.1.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
    <script src='includes/js/bootstrap.min.js'></script>
	<script src='includes/js/scripts.js'></script>";
	addScripts($scripts);
	echo "
  </body>
</html>";
}


?>