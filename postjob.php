 <?php 
 
include_once('db.php');
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
	 //echo"$email"; die();
    $location = $_POST['location'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $rate = $_POST['rate'];
    $salary = $_POST['salary'];
       $title= $_POST['title'];
      $type= $_POST['type'];
       $tag= $_POST['tag'];
 $hours= $_POST['hours'];
$company= $_POST['company'];
       $tagline= $_POST['tagline'];
 $website= $_POST['website']; 
	  
   mysqli_query($con,"INSERT INTO postjob (email, location, category, description, rate, salary, title, type, tag, hours, company, tagline, website) 
   VALUES ('$email','$location','$category','$description','$rate','$salary','$title','$type','$tag','$hours','$company','$tagline','$website')");

      header('location: posted.php');
   }
 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript">
 addEventListener("load", function()
 { setTimeout(hideURLbar, 0); },
 false); function hideURLbar()
 { window.scrollTo(0,1); } </script>
 
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
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
		        </li>

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
</div>	<br><br>
<div class="container">
    <div class="shell">
	  <center> <h1>Post a job in minutes</h1>
	  <form method="POST" action="">
         <hr class="divider hr-md-left-0 bg-darkers">
   <p class="offset-lg-top-50">Have an account? If you don’t have an account you can
   create one below by entering your email<br>
   address/username. Your account details will be confirmed via email.</p></center><br><br>
            <div class="range range-xs-left">
              <div class="coll-sm-6">
                <div class="range">
                  <div class="col-sm-6 text-md-left">
        <div class="range">
        <div class="col-sm-">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Your Email</label>
        <input id="contacts-first-name" type="text" name="email" data-constraints="@Required @email"
			class="form-control form-control-has-validation form-control-last-child">
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Location</label>
               <input id="contacts-last-name" type="text" name="location" data-constraints="@Required" 
		class="form-control form-control-has-validation form-control-last-child">
		<span class="form-validation"></span>
                          </div>
                        </div>
          <div class="cell-lg-12 offset-top-20">
         <div class="form-group">
      <label for="contacts-email" class="form-label form-label-outside rd-input-label">Job Category</label>
          <input id="contacts-email" type="text" name="category" data-constraints="@Required" 
		class="form-control form-control-has-validation form-control-last-child">
                     <span class="form-validation"></span>
                          </div>
                        </div>
      <div class="cell-lg-12 offset-top-30 offset-md-top-20">
          <div class="form-group">
       <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Description</label>
        <textarea class="form-control form-control-has-validation form-control-last-child" id="contact-me-message" 
		name="description" data-constraints="Required" style="height: 179px;">
		</textarea><span class="form-validation"></span>
                          </div>
                        </div><br>
	
 
                      </div>
    
                    
                  </div>
				 
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0 inset-lg-left-80">
	 <div class="range">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Job Title</label>
        <input id="contacts-first-name" type="text" name="title" data-constraints="@Required"
			class="form-control form-control-has-validation form-control-last-child">
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="col-sm-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Job Type</label>
                <select class="form-control select2-hidden-accessible" id="post-job-type" name="type" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                          <option>Full Time</option>
                          <option>Part Time</option>
                        </select>
                          </div>
                        </div>
          <div class="col-sm-6 offset-top-20">
         <div class="form-group">
      <label for="contacts-tag" class="form-label form-label-outside rd-input-label">Job Tag</label>
          <input id="contacts-tag" type="tag" name="tag" data-constraints="@Required @tag" 
		class="form-control form-control-has-validation form-control-last-child">
                     <span class="form-validation"></span>
                          </div>
                        </div>
      <div class="col-sm-6 offset-top-20">
          <div class="form-group">
       <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Minimum Salary</label>
        <input id="contacts-rate" type="rate" name="rate" data-constraints="@Required @rate" 
		class="form-control form-control-has-validation form-control-last-child">
                     <span class="form-validation"></span>
                          </div>
                        </div>
	<div class="col-sm-6 offset-top-20">
       <div class="form-group">
       <label for="contact-me-message" class="form-label form-label-outside rd-input-label">
	Maximum Salary  </label>
         <input id="contacts-salary" type="salary" name="salary" data-constraints="@Required @salary"
  class="form-control form-control-has-validation form-control-last-child">
		<span class="form-validation"></span>
                          </div>
                        </div>
 <div class="col-sm-6 offset-top-20">
       <div class="form-group">
         <label for="contact-me-message" class="form-label form-label-outside rd-input-label">
			Hours per day </label>
       <input id="contacts-hours" type="hours" name="hours" data-constraints="@Required @hours" 
			class="form-control form-control-has-validation form-control-last-child">
				<span class="form-validation"></span>
                          </div>
                        </div>
  
                      </div>
                  </div>
                </div>
              </div>

            </div>
			
          </div>
		  
</div>

<div class="container">
    <div class="shell">
	   <h2>Company Detail</h2>
         <hr class="divider hr-md-left-0 bg-darkers">
   
            <div class="range range-xs-left">
              <div class="coll-sm-6">
                <div class="range">
                  <div class="col-sm-6 text-md-left">
				 
        <div class="range">
        <div class="col-sm-">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Company Name</label>
        <input id="contacts-first-name" type="text" name="company" data-constraints="@Required"
			class="form-control form-control-has-validation form-control-last-child">
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Tagline</label>
               <input id="contacts-last-name" type="text" name="tagline" data-constraints="@Required" 
		class="form-control form-control-has-validation form-control-last-child">
		<span class="form-validation"></span>
                          </div>
                        </div>
          <button type="submit" class="btn2 btn-2 btn2-1b" name="submit" style="width:150px">Post a Job</button><br><br>
                      </div>
     
                  </div>
				 
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0 inset-lg-left-80">
	 <div class="range">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Website</label>
        <input id="contacts-first-name" type="text" name="website" data-constraints="@Required"
			class="form-control form-control-has-validation form-control-last-child">
							<span class="form-validation"></span>
                          </div>
                        </div>
           
         
                      </div>
                  </div>
				 
				  </form>
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