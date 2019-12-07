<?php
include 'ConfigTemplate.php';
session_start();

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$unhashed = $_POST['pwd'];
$password = crypt($unhashed, "SECURE");
$dateofbirth = $_POST['DOB'];
//Insert statement for creating an account
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
}
if($captcha){
	$secretKey = "6LcenMYUAAAAAO1kp_Y3uVq-6-RI7PFkibavb0_l";
	$ip = $_SERVER['REMOTE_ADDR'];
	// post request to server
	$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
	$response = file_get_contents($url);
	$responseKeys = json_decode($response,true);
	// should return JSON with success as true
	if($responseKeys["success"]) {
		$insertStatement = "INSERT INTO Users (email,password,fname,lname,accessLevel,dateOfBirth) VALUES (\"" . $email . "\",\"" . $password . "\",\"" . $firstname . "\",\"" . $lastname . "\",\"" . "0" . "\",\"" . $dateofbirth . "\")";
	//echo $insertStatement;
		//MySQL insert statement query
		if (mysqli_query($con,$insertStatement)) {
			header("Location: SuccessfulAccountTemplate.php");
		}
	}
}

//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
  	<meta charset="utf-8">
  	<!-- Bootstrap 4; Sets initial zoom level and sets the width to the screen width of the viewing device -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<!-- Imports Google Font Open-Sans -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  	<!-- General Stylesheet Link -->
  	<link rel="stylesheet" type="text/css" href="../css/.css">
  	<!-- Website Page Title-->  
  	<title> Create New Account </title>
</head>

<body>

<!-- Container for header -->
<div class="container-fluid"> <!-- container-fluid is a full width container. it scales to the screen width -->
    	<div class="row">
    	<div class="topnav">
        	<div class="span-12">
                	<a href="#home"><img src="inc/home.png" width="15" height = "15"><br>Home</a>
                        <a href="#t3"><img src="inc/wrench.png" width="15" height = "15"><br>Tools, Tips, and Tricks</a>
                        <a href="#intern"><img src="inc/briefcase.png" width="15" height = "15"><br>Internships</a>
                        <a href="#ctf"><img src="inc/flag.png" width="15" height = "15"><br>Capture the Flag</a>
                        <a href="#alumni"><img src="inc/persons.png" width="15" height = "15"><br>Alumni</a>
                        <a href="http://35.245.253.27/Home.php"><img src="inc/books.png" width="15" height = "15"><br>Research</a>
    		</div>
    	</div>
	</div>

    <div class="row header"> <!-- each row can contain up to 12 columns. no matter what, all col must add up to 12 -->
      <div class="col-sm-1">
	<!-- Dropdown Button -->
	<div class="dropdown">
	  <button type="button" class="btn" data-toggle="dropdown">
	    <img src='../inc/burger-menu.jpg' class='img-fluid'>
	  </button>
	  <!-- Dropdown Menu -->
	  <div class="dropdown-menu">
	    <!-- Dropdown Item - Home -->
	    <a class="dropdown-item" href="http://35.245.253.27//Home.php"><h3>Home</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Faculty Page -->
	    <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.php"><h3>Faculty Page</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Student Research Projects -->
	    <a class="dropdown-item" href="http://35.245.253.27/BrowseSubmission.php"><h3>Browse Submissions</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Account Information -->
	    <a class="dropdown-item" href="http://35.245.253.27/AccountInformation.php"><h3>Account</h3></a>
	  </div>
	</div>
      </div>

      <!-- Faculty & Student Research Header -->
      <div class="col-sm-6"><h1>Faculty & Student Research</h1></div>
      <div class="col-sm-3"></div>
      <!-- Login Button -->
      <div class="col-sm-1">
	<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>
      </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
    <div class="row">
      <!-- Create Account Header -->
      <div class="col-sm-11"><center><h1>Create an Account</h1></center></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-5"></div>
    </div>
    <div class="row">
      <!-- Create Account Form -->
      <form action=".php" method="POST">
	<div class="form-group">
          <!-- First Name Label -->
	  <div class="col-sm-11"><label for="fname"><h4>First Name</h4></label></div>
	  <div class="col-sm-11"><input type="text" placeholder="John" class="form-control" name="fname"></div>
	</div>
	<div class="form-group">
	  <!-- Last Name Label -->
	  <div class="col-sm-11"><label for="lname"><h4>Last Name</h4></label></div>
	  <div class="col-sm-11"><input type="text" placeholder="Doe" class="form-control" name="lname"></div>
	</div>
	<div class="form-group">
	  <!-- Email Label -->
	  <div class="col-sm-11"><label for="email"><h4>Email Address</h4></label></div>
	  <div class="col-sm-11"><input type="email" placeholder="johndoe@mail.com" class="form-control" name="email"></div>
	</div>
	<div class="form-group">
          <!-- Email Confirmation Label -->
	  <div class="col-sm-11"><label for="emailCon"><h4>Confirm Email Address</h4></label></div>
	  <div class="col-sm-11"><input type="emailCon" placeholder="johndoe@mail.com" class="form-control" name="emailCon"></div>
	</div>
	<div class="form-group">
	  <!-- Password Label -->
	  <div class="col-sm-11"><label for="pwd"><h4>Password</h4></label></div>
	  <div class="col-sm-11"><input type="password" placeholder="********" class="form-control" name="pwd"></div>
	</div>
	<div class="form-group">
	  <!-- Password Confirmation Label -->
	  <div class="col-sm-11"><label for="passCon"><h4>Confirm Password</h4></label></div>
	  <div class="col-sm-11"><input type="password" placeholder="********" class="form-control" name="passCon"></div>
	</div>
	<div class="form-group">
	  <!-- Date of Birth Label -->
	  <div class="col-sm-11"><label for="DOB"><h4>Date of Birth</h4></label></div>
	  <div class="col-sm-11"><input type="date" class="form-control" name="DOB"></div>
	</div>
	<div class="col-sm-11">
</div>
</div>
	<!--CAPTCHA Form-->
	<div class="g-recaptcha" data-sitekey="6LcenMYUAAAAAAl5xPI3D4_7rsSfL8SIqpWHdhMB"></div>
	<div class="col-sm-11">
	<!-- Submit Button -->
	<div class="col-sm-11"><button type="submit" class="btn btn-submit">Submit</button></div>
      </form>
    </div>
    </div>

  </div>
</div>



</body>
</html>
