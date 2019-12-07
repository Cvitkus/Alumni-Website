<head>
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
  <link rel="stylesheet" type="text/css" href="../css/SuccessfulAccount.css">
  <!-- Website Page Title -->
  <title> Account Created </title>
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
            <a class="dropdown-item" href="http://35.245.253.27/Home.php"><h3>Home</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
            <!-- Dropdown Item - Faculty Page -->
	    <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.php"><h3>Faculty Page</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Student Research Project -->
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
<?php
	//A new session is started
	session_start();
	//If there is an active session ID
	if (isset($_SESSION['userID'])) {
		//Display logout button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/Logout.php"><h4>Logout</h4></a>';
	} else {
		//Display login button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>';
	}
?>
      </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
	<div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
		<div class="row">
			<!-- Account Created Header -->
			<div class="col-sm-12"><center><h1>Account Created</h1></center></div>
		</div>

		<div class="row">
			<!-- Email Verification Message -->
			<div class="col-sm-12"><p><center>Congratulation! You have successfully created an account.</center></p></div>
		</div>
			



</body>

</html>
