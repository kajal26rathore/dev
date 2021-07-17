 <?php
 
 include_once('db.php');
 
 if(isset($_GET['view']))
{
 $SQL = $con->query("SELECT * FROM postjob WHERE id=".$_GET['view']);
 $getROW = mysqli_fetch_array($SQL);
 // print_r ($getROW); 
  
  
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
						<li><a href="posted.php">Find Job</a></li>
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
	  <center> <h1>detail of posted job</h1>
	  <form method="POST" action="">
         <hr class="divider hr-md-left-0 bg-darkers">
  </center><br><br>
            <div class="range range-xs-left">
              <div class="coll-sm-6">
                <div class="range">
                  <div class="col-sm-6 text-md-left">
        <div class="range">
        <div class="col-sm-">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Your Email</label>
        <input type="text" class="form-control" style="width:500px; height:33px;"  name="email" placeholder=" email id" value="<?php echo $getROW['email'];  ?>" readonly ="readonly"required/>
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Location</label>
                <input type="text" class="form-control" style="width:500px; height:33px;"  name="location" placeholder=" location" value="<?php echo $getROW['location'];  ?>" readonly ="readonly"required/>
		
		<span class="form-validation"></span>
                          </div>
                        </div>
          <div class="cell-lg-12 offset-top-20">
         <div class="form-group">
      <label for="contacts-email" class="form-label form-label-outside rd-input-label">Job Category</label>
           <input type="text" class="form-control" style="width:500px; height:33px;" name="category" 
		   placeholder=" category" value="<?php  echo $getROW['category'];  ?>" readonly ="readonly"required/>
		
                     <span class="form-validation"></span>
                          </div>
                        </div>
      <div class="cell-lg-12 offset-top-30 offset-md-top-20">
           <!--<div class="col-sm-6 offset-top-20">-->
          <div class="form-group">
       <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Minimum Salary</label>
       <input type="text" class="form-control" style="width:500px; height:33px;" name="rate" 
		   placeholder=" minimum salary" value="<?php echo $getROW['rate'];  ?>" readonly ="readonly"required/>
		            <span class="form-validation"></span>
                          </div>
                        
                        </div>
						<div class="cell-lg-12 offset-top-30 offset-md-top-20">
       <div class="form-group">
       <label for="contact-me-message" class="form-label form-label-outside rd-input-label">
	Maximum Salary  </label>
         <input type="text" class="form-control" style="width:500px; height:33px;" name="salary" 
		   placeholder=" maximum salary" value="<?php echo $getROW['salary'];  ?>" readonly ="readonly"required/>
			<span class="form-validation"></span>
                          </div>
                        </div>
						<br>
                      </div>
                  </div>
				 
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0 inset-lg-left-80">
	 <div class="range">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Job Title</label>
        <input type="text" class="form-control" style="width:500px; height:33px;" name="title" 
		   placeholder=" job title" value="<?php  echo $getROW['title'];  ?>" readonly ="readonly"required/>
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="col-sm-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Job Type</label>
                <select class="form-control select2-hidden-accessible" id="post-job-type" name="type" style="width:500px;" placeholder=" job type" value="<?php  echo $getROW['type'];?>" readonly ="readonly"required/>
	
                          <option>Full Time</option>
                          <option>Part Time</option>
                        </select>
                          </div>
                        </div>
          <div class="col-sm-6 offset-top-20">
         <div class="form-group">
      <label for="contacts-tag" class="form-label form-label-outside rd-input-label">Job Tag</label>
         <input type="text" class="form-control" style="width:500px; height:33px;" name="tag" 
		   placeholder=" job tag" value="<?php echo $getROW['tag'];  ?>" readonly ="readonly"required/>
		           <span class="form-validation"></span>
                          </div>
                        </div>
      
	
 <div class="col-sm-6 offset-top-20">
       <div class="form-group">
         <label for="contact-me-message" class="form-label form-label-outside rd-input-label">
			Hours per day </label>
         <input type="text" class="form-control" style="width:500px; height:33px;" name="hours" 
		   placeholder=" total hours" value="<?php echo $getROW['hours'];  ?>" readonly ="readonly"required/>
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
         <input type="text" class="form-control" style="width:500px; height:33px;" name="company" 
		   placeholder=" company name" value="<?php echo $getROW['company'];  ?>" readonly ="readonly"required/>
							<span class="form-validation"></span>
                          </div>
                        </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
          <label for="contacts-last-name" class="form-label form-label-outside rd-input-label">Tagline</label>
                <input type="text" class="form-control" style="width:500px; height:33px;" name="tagline" 
		   placeholder=" tagline" value="<?php  echo $getROW['tagline'];  ?>" readonly ="readonly"required/>
		<span class="form-validation"></span>
                          </div>
                        </div>
          <button type="submit" class="btn2 btn-2 btn2-1b" name="submit" style="width:150px">Apply job</button><br><br>
                      </div>
     
                  </div>
				 
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0 inset-lg-left-80">
	 <div class="range">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="contacts-first-name" class="form-label form-label-outside rd-input-label">
                  Website</label>
         <input type="text" class="form-control" style="width:500px; height:33px;" name="website" 
		   placeholder=" website" value="<?php echo $getROW['website'];  ?>" readonly ="readonly"required/>
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
				<li><a href="register.php">Join Now</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.html">Features</a></li>
				<li><a href="terms.html">Terms of use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="postjob.php">Post a Job</a></li>
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
      