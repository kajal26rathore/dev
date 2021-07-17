<?php
include_once 'crued.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add vendor</title>
<link rel="stylesheet" href="Style.css" type="text/css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:#ecf0f5;">
<div class="wrapper">
<nav class="navbar"style="background-color:lightslategray">
  <div class="container-fluid">
    <div class="navbar-header">
	    <a href="{{ url('/') }}" class="logo">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img src="img/vendor.png" alt="user_image" width="38%" class="img-circle" /></span>
                </a>			
    </div>
	 <h1 style="font-style: italic;color:white;font-size:47px">Edit Vendor </h1>	
  </div>
</nav>
<div class="container"style="background-color:white">
<center>
<form method="post" enctype="multipart/form-data" >
<table>
	<div class="form-group">
      <label for="lastName">Name:</label>
	     <input type="text" class="form-control" style="width:500px; height:33px;"  
		 name="name" placeholder=" Name" value="<?php if(isset($_GET['edit'])) echo $getROW['name'];  ?>" readonly ="readonly"required/>
	</div>
    <div class="form-group">
	   <label for="lastName">Age:</label>
          <input type="text" name="age" class="form-control" style="width:500px; height:33px;" placeholder="age" value="<?php if(isset($_GET['edit'])) echo $getROW['age'];  ?>" required/>
    </div>
     <div class="form-group">  
              <label for="lastName">E-mail:</label>  
             <input type="text" placeholder="e-mail" class="form-control" style="width:500px; height:33px;"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" value="<?php if(isset($_GET['edit'])) echo $getROW['email'];  ?>" required>
        </div>
<div class="form-group">	
<label for="category" >category:
	<select class="form-control" style="width:500px; height:33px;"  name="category[]" id="agama" value="<?php if(isset($_GET['edit'])) echo $getROW['category'];  ?>" required/>
    <option value="">select your choice </option>
    <option value="Samsung">Samsung</option>
    <option value="Dell">Dell</option>
    <option value="HP">HP</option>
    <option value="Lenevo">Lenevo</option>
    <option value="ascer">Ascer</option>
</select></label>
            </div>
			<div class="form-group">
                <label for="lastName">Number:</label>
               <input type="text" class="form-control" style="width:500px; height:33px;"  pattern="[0-9]+([\.][0-9]+)?" placeholder="number" name="number" value="<?php if(isset($_GET['edit'])) echo $getROW['number'];  ?>" required/>
             </div>
               <div class="form-group">
                <label for="lastName">Address:</label>			   
               <input type="text" class="form-control" style="width:500px; height:33px;"  placeholder="address" name="address" value="<?php if(isset($_GET['edit'])) echo $getROW['address'];  ?>" required/>
             </div>
			<div class="form-group">
               <label for="lastName">Pincode:</label>
                <input type="text" class="form-control" style="width:500px; height:33px;" pattern="[0-9]+([\.][0-9]+)?" placeholder="pincode" name="pincode" value="<?php if(isset($_GET['edit'])) echo $getROW['pincode'];  ?>" required/>
            </div>
                <div class="form-group">
				<label for="lastName">City:</label>
                <input type="text" class="form-control" style="width:500px; height:33px;"  placeholder="city" name="city" value="<?php if(isset($_GET['edit'])) echo $getROW['city'];  ?>" required/>
           </div>
                <div class="form-group">
				<label for="lastName">State:</label>
                <input type="text" class="form-control" style="width:500px; height:33px;"  placeholder="state" name="state" value="<?php if(isset($_GET['edit'])) echo $getROW['state'];  ?>" required/>
           </div>
		   <div class="form-group">
                  <label for="profile">Profile:</label>
                  <input type="file" name="imageUpload" id="imageUpload" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['profile'];  ?>" style="width:500px; height:33px;" />
                  <img src="img/<?php echo $getROW['profile'];?>" height='100px' width='200px'>
		   </div>  

	  
            
   <?php
    if(isset($_GET['edit']))
      {
        ?>
      <button type="submit" class="btn btn-success"  name="update">update</button>&nbsp;
	   <button type="cancel" class="btn btn-default"  onClick="document.location.href='view.php';" name="cancel">cancel</button>
     <?php
     }
   else
   {
     ?>
      <button type="submit" name="save">save</button>
     <?php
   }
   ?>

</table>
</form>
</center>
<footer class="main-footer pull-right" style=" background: #fff; padding: 15px; color: #444;">
                <strong>Copyright &copy; <a target="_blank" href="index.php">Vendor</a>.</strong> All rights
                reserved.
				</footer>
</div>

			</div>
</body>

</html>