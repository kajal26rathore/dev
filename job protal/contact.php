
<?php 
 
include_once('db.php');
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
	 //echo"$firstname"; die();
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
      $message = $_POST['message'];
    	   
	  
   mysqli_query($con,"INSERT INTO contact (firstname, lastname, email, message) 
   VALUES ('$firstname','$lastname','$email','$message')");

   }
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
		
	        <ul class="nav navbar-nav">
			 <li><a href="index.php">Home</a></li>
			<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret">
				  </b></a>
		             <ul class="dropdown-menu">
			            
			            <li><a href="postjob.php">Post a Job</a></li>
						<li><a href="posted.php">Find job</a></li>
			            <li><a href="jobs.html">Other Detail</a></li>
		             </ul>
		        </li>
			 <li><a href="services.html">Services</a></li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret">
				  </b></a>
		             <ul class="dropdown-menu">
			            <li><a href="location.html">Recruiter location</a></li>
			            <li><a href="features.html">Features</a></li>
			            <li><a href="following.html">Followers</a></li>
		             </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
		            <ul class="dropdown-menu">
					<li><a href="manager.html">Project Managers</a></li>
			            <li><a href="about.html">About us</a></li>
			            <li><a href="contact.php">Contact us</a></li>
			            <li><a href="terms.html">Terms</a></li>
		            </ul>
		        
		        <li><a href="resume.html">Upload Resume</a></li>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>
	<div class="text-extra-big text-bold veil reveal-md-block" style="margin-top:100px">
	Build Your Future</div></h1>
           </div>
		</div>
   </div> 
</div><br><br>
<div class="container">
<main class="page-content">
        <!-- Get In Touch-->
        <section class="section-top-98 section-sm-top-110">
          <div class="shell">
            <div class="range range-xs-left">
              <div class="coll-sm-6">
                <div class="range">
                  <div class="col-sm-8 text-md-left">
				  
                    <h1>Contact Us</h1>
                    <hr class="divider hr-md-left-0 bg-darkers">
                    <p class="offset-lg-top-50">You can contact us any way that is convenient for you.
					We are available 24/7 via fax, email or telephone. You can also use a quick contact form located on this page to ask a question about our services and current offers. 
					We would be happy to answer your questions or offer any help.</p><br><br>
                    <!-- RD Mailform-->
                    
                      <div class="range">
					  <form action="" method="POST">
                        <div class="">
						
                          <div class="form-group">
                            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">First Name</label>
                            <input id="contacts-first-name" type="text" name="firstname" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                          </div>
                        </div>
                        <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                          <div class="form-group">
                            <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Last Name</label>
                            <input id="contacts-last-name" type="text" name="lastname" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                          </div>
                        </div>
                        <div class="cell-lg-12 offset-top-20">
                          <div class="form-group">
                            <label for="contacts-email" class="form-label form-label-outside rd-input-label">E-mail</label>
                            <input id="contacts-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                          </div>
                        </div>
                        <div class="cell-lg-12 offset-top-20">
                          <div class="form-group">
                            <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Message</label>
                            <textarea id="contact-me-message" name="message" data-constraints="@Required" style="height: 160px;" class="form-control form-control-has-validation form-control-last-child"></textarea><span class="form-validation"></span>
                          </div>
                        </div>
						<button type="submit" class="btn2 btn-2 btn2-1b" name="submit" style="width:100px">Send</button><br><br>
						</form>
                      </div>
                      <div class="range range-xs-center range-lg-left offset-top-30">
                        <div class="cell-xs-5 cell-sm-4">
                          <div class="inset-left-50 inset-right-50 inset-xs-left-0 inset-xs-right-0 inset-lg-right-50">
						   
                            
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0 inset-lg-left-80">
                    <div>
                      <h3>Social</h3>
                    </div>
                    <div class="offset-top-14 text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <ul class="list-inline list-inline-xs text-darker list-inline-primary">
                        <li class="h5 offset-top-0"><a href="#" class="text-dark fa fa-facebook"></a></li>
                        <li class="h5 offset-top-0"><a href="#" class="text-dark fa fa-twitter"></a></li>
                        <li class="h5 offset-top-0"><a href="#" class="text-dark fa fa-google-plus"></a></li>
                        <li class="h5 offset-top-0"><a href="#" class="text-dark fa fa-youtube"></a></li>
                      </ul>
                    </div><br>
                    <div class="offset-top-41 offset-lg-top-66">
                      <h3>Phone</h3>
                    </div>
                    <div class="offset-top-14 text-subline offset-top-10"></div>
                    <address class="contact-info offset-top-20">
					<span class="icon icon-xs fa fa-phone text-middle text-primary">
					</span><a href="callto:#" class="text-middle">1-800-1234-567</a></address><br>
                    <div class="offset-top-66">
                      <h3>Address</h3>
                    </div>
                    <div class="offset-top-14 text-subline offset-top-10"></div>
         <address class="unit unit-top unit-horizontal unit-spacing-xxs contact-info offset-top-20">
                     
		<span class="icon icon-xs fa fa-map-marker text-middle text-primary inset-right-10">
		    </span> 
               <a href="#">4578 Marmora St, San Francisco D04 89GR</a>
                    </address><br>
                    <div class="offset-top-50">
                      <h3 class="text-darker">Open Hours</h3>
                    </div>
                    <div class="text-subline offset-top-14"></div>
                    <div class="p unit unit-top unit-spacing-xs unit-horizontal offset-top-24">
                      <span class="icon icon-xxs fa fa-clock-o text-primary"></span>
                     
                        <address>
                          <div><span class="text-bold">Monday–Friday:</span> 9:00am–6:00pm</div>
                          <div><span class="text-bold">Saturday:</span> 10:00am–4:00pm</div>
                          <div><span class="text-bold">Sunday:</span> 10:00am–1:00pm</div>
                        </address>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  </div>
   
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Sign In</a></li>
				<li><a href="login.php">Join Now</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.html">Features</a></li>
				<li><a href="terms.html">Terms of use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="jobs.html">Post a Job</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Twitter Widget</h4>
			<div class="footer-list">
			  <ul>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Seeking</h4>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Sign up for our newsletter</h4>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
			<form>
				<input type="text" class="form-control" placeholder="Enter your email">
				<button type="button" class="btn red">Subscribe now!</button>
		    </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</body>
</html>			