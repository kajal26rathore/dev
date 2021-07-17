
<?php 
    $firstname = "";
	$email = "";
	$errors = "";
 
include_once('db.php');
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
	 //echo"$firstname"; die();
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
      $country = $_POST['country'];
     $dob = $_POST['dob'];
       $experience= $_POST['experience'];
      $education= $_POST['education'];
       $subject= $_POST['subject'];
 $password= $_POST['password'];	
$confirm_pwd= $_POST['confirm_pwd'];	

  if (empty($firstname)){
	  array_push($error, "first name is required");
  }
  if (empty($email)) {
	  array_push($error, "email is required");
  }
  if (empty($password)){
	  array_push($error, "password is required");
  }
  if ($password != $confirm_pwd) {
	  array_push($error, "the two password do not match");
  }
if (count($error) == 0){
	$password = md5($confirm_pwd);
   mysqli_query($con,"INSERT INTO registration (firstname, lastname, mobile, gender, email, country, dob, experience,education,subject,password,confirm_pwd) 
   VALUES ('$firstname','$lastname','$mobile','$gender','$email','$country','$dob','$experience','$education','$subject','$password','$confirm_pwd')");
  mysqli_query($db,$sql);
  $_SESSION['firstname'] = $firstname;
  $_SESSION['success'] = "you are now logged in";
  header('location: index.php');
} 
   }
   
   if (isset($POST['login'])){
	    $firstname = $_POST['firstname'];
        $password= $_POST['password'];	


  if (empty($firstname)){
	  array_push($error, "first name is required");
  }
  if (empty($password)) {
	  array_push($error, "password is required");
  }
  if (count($rrors) == 0){
	  $password = md5($password); 
	  $query ="SELECT * FROM registration WHERE firstname='$firstname' AND password='$password'";
	  $result = mysqli_query($db,$query);
	  if (mysqli_num_rows($result) == 1) {
		  //log user
		  $_SESSION['firstname'] = $firstname;
  $_SESSION['success'] = "you are now logged in";
  header('location: index.php');
	  }else{
		  array_push($errors,"the username password combination")
		  header('location: login.php');
	  }
		  
  }
   }
   //logout
   if (isset($_GET['logout'])){
	   session_destroy();
	   unset($_SESSION['firstname']);
	   header('location: login.php');
   }
 
?>