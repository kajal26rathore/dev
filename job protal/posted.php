
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

   }
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Location :: w3layouts</title>
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
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
   
	align:center;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
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
</div>	
<div class="container">
    <div class="single">  
	 <div class="col-md-8 single_right">
	      <div class="but_list">
	       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<form action="postjob" method="POST">
			<center><h2>posted job description</h2></center>
			<ul id="myTab" class="nav nav-tabs" role="tablist">
		<table>
  <tr>
    <th>email</th>
    <th>Company</th>
    <th>location</th>
    <th>job_category</th>
	<th>maximum_salary</th>
	<th>Description</th>
  </tr>
   <?php
 $sqli= $con->query("SELECT * FROM postjob ");
 
  while($row=$sqli->fetch_array() )
  {
?>	
   <tr>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['company']; ?></td>
	<td><?php echo $row['location']; ?></td>
	<td><?php echo $row['category']; ?></td>
	<td><?php echo $row['salary']; ?></td>
	<td><a href="view.php?view=<?php echo $row['id'];?>">view</a></td>
    </tr>
    <?php
}
?>
</table>
          </form>

		  </div>
		
	  </div>
     </div>
    </div>
   </div>
  <!--<div class="clearfix"> </div>-->
 
<br><br>
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