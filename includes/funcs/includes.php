<?php

function generateHead($breadcrum){
	echo "
	<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>$breadcrum | Frank 'N Stein and Son,LLC</title>
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
    <h1 class='brand'>Frank 'N Stein and Son</h1>
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
	if($scripts != ""){
	$includeScripts =  "<script src='includes/js/$scripts'></script>";
echo $includeScripts;
}
}

function footer($breadcrum, $scripts){
echo "</div><!--Main Body  -->
		<footer class='footer-basic-centered'>
			<p class='footer-company-motto'>Where we treat every student like our only student!</p>
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
	<script src='includes/js/jquery.cycle2.min.js'></script>
	<script src='includes/js/scripts.js'></script>";
	addScripts($scripts);
	echo "
  </body>
</html>";
}
function showQuote(){
$quote = array(
1 => "Outstanding teaching abilities. My math knowledge has only
        grown higher since she started tutoring me.",
2 => "Ever since I started learning with Dr. Stein, I feel like I'm, for
         the first time ever, actually understanding the material.",
3 => "I am impressed with Dr. Stein's innate ability to focus in on a
     student's strengths and weaknesses and develop a tutoring program
     tailored to meet that student's needs.",
4 =>  "Dr. Stein is a wonderful teacher. I feel that no matter how
         difficult the subject, she always makes sure I know it in
          the end. Thank you.",
5 => "Dr. Stein is by far the best tutor that I have had and
        without her, I probably wouldn’t have a chance at passing
        the algebra Regents.",
6 => "A wonderful tutor, dedicated and caring, who knows the material
        and teaches it wonderfully, from biology to algebra, geometry,
        or chemistry. Whatever it may be, Dr. Stein is the best by far!"
//7 => "Author7",
//8 => "Author8",
//9 => "Author9",
//10 => "Author10"
);
$randomQuote = rand(1,6);
echo $quote[$randomQuote];
}
function showTestimonials(){
$testimonials = array(
"Dr. Stein is a creative, caring teacher. She has successfully tutored a
number of our students. She works hard to understand each child's needs
and learning style - essential components for success" =>
"- Lea E. Goldstein Principal Derech HaTorah of Rochester",
"I am impressed with Dr. Stein's innate ability to focus in on a student's 
strengths and weaknesses and develop a tutoring program tailored to meet that student's needs." =>
"-Mary Stucki Resource Teacher Rochester City School District",
"Ever since I started learning with Dr. Stein, I feel like I'm, for the 
first time ever, actually understanding the material." =>
"-Ben H.",
"Outstanding teaching abilities. My math knowledge has only grown 
higher since she started tutoring me." =>
"-Shua R.",
"Dr. Stein is a wonderful teacher. I feel that no matter how difficult 
the subject, she always makes sure I know it in the end. Thank you." =>
"- Ben R.",
"I recently had the pleasure of working with Dr. Stein as my math tutor. 
As an adult learner with very specific needs and a tight time frame, 
I was looking for a teacher who could adapt to my learning style. 
After seeing a couple of different tutors, it was clear Dr. Stein was 
the right choice. I feel my work with her was the main reason 
I was able to complete my tasks so well."=>
"-Joseph Windheim",
"Dr. Stein, my tutor, has helped me through two maths, algebra and 
geometry, and now chemistry. She has been the best tutor I’ve ever had. 
I’m not very bright in mathematics, but with her help, I’ve passed 
all my Regents. Thanks."=>
"-M. Bernstein",
"Is there someone out there with a clear understanding of math and 
science? Is there someone out there with excellent teaching skills 
and a pleasant personality? The answer is yes. Dr. Stein is her name 
and tutoring is her game. Over the past year and a half, Dr. Stein 
has helped me get a clear understanding of math and science and has 
helped me do well on my Regents. I highly recommend her."=>
"-E. Menasse",
"Dr. Stein is by far the best tutor that I have had and without her, 
I probably wouldn’t have a chance at passing the algebra Regents."=>
"-Y. Dyman",
"A wonderful tutor, dedicated and caring, who knows the material and 
teaches it wonderfully, from biology to algebra, geometry, or 
chemistry. Whatever it may be, Dr. Stein is the best by far!"=>
"-M. Adler");
foreach($testimonials as $quote=>$author){
	echo "<li>
	$quote
		  <span>
		$author
		</span>
    </li>";
}
}

function fadeQuote(){
	echo "<div class='cycle-slideshow' 
    data-cycle-fx='fade' 
    data-cycle-timeout='20000'
    data-cycle-slides='h4'
    >
<h4>I am impressed with Dr. Stein's innate ability to focus in on a student's 
strengths and weaknesses and develop a tutoring program tailored to meet that student's needs.</h4> 
<h4>Ever since I started learning with Dr. Stein, I feel like I'm, for the 
first time ever, actually understanding the material.</h4> 
<h4>Outstanding teaching abilities. My math knowledge has only grown 
higher since she started tutoring me.</h4>
<h4>Dr. Stein is a wonderful teacher. I feel that no matter how difficult 
the subject, she always makes sure I know it in the end. Thank you.</h4> 
<h4>Dr. Stein, my tutor, has helped me through two maths, algebra and 
geometry, and now chemistry. She has been the best tutor I’ve ever had. 
I’m not very bright in mathematics, but with her help, I’ve passed 
all my Regents. Thanks.</h4>
<h4>Dr. Stein is by far the best tutor that I have had and without her, 
I probably wouldn’t have a chance at passing the algebra Regents.</h4>
<h4>A wonderful tutor, dedicated and caring, who knows the material and 
teaches it wonderfully, from biology to algebra, geometry, or 
chemistry. Whatever it may be, Dr. Stein is the best by far!</h4>
</div>";
}

?>