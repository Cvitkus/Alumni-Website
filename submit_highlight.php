
<?php
	session_start();

	
	include "credentials.php";

	$conn = mysqli_connect($host, $username, $password, $dbname);
	if(!$conn)
	{
		die('Could not connect.');
	}
		
?>


<!DOCTYPE html>
<html>
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
  <link rel="stylesheet" type="text/css" href="BootstrapTemplate.css">
</head>
<body>
<!-- Navbar-->



	
<!-- Container for header -->
<div class="container-fluid"> <!-- container-fluid is a full width container. it scales to the screen width -->
    <div class="row header"> <!-- each row can contain up to 12 columns. no matter what, all col must add up to 12 -->
      <div class="col-sm-1">


<div class="dropdown"> <!-- hamburger menu -->
          <button type="button" class="btn" data-toggle="dropdown">
            <img src='images/burger-menu.jpg' class='img-fluid'>
          </button>
          <div class="dropdown-menu">  
            <a class="dropdown-item" href="index.php"><h3>Home</h3></a>
		<?php
			if(isset($_SESSION["userID"]))
			{
				echo "<div class='dropdown-divider'></div>";
				echo "<a class='dropdown-item' href='user_profile.php'><h3>Profile</h3></a>";
				echo "<div class='dropdown-divider'></div>";
				echo "<a class='dropdown-item' href='submit_highlight.php'><h3>Submit highlight</h3></a>";
				$result = $conn->query("SELECT * FROM admin WHERE user_id=".$_SESSION["userID"]);
				if($result->num_rows!=0)
				{
					echo "<div class='dropdown-divider'></div>";
					echo "<a class='dropdown-item' href='admin.php'><h3>Admin</h3></a>";
				}
			}
				
		?>     
	    <div class="dropdown-divider"></div> 
		<?php
			if(isset($_SESSION["userID"]))
			{
				echo "<a class='dropdown-item' href='loggout.php'><h3>Logout</h3></a>";
			}
			else
				echo "<a class='dropdown-item' href='login.php'><h3>Login</h3></a>";
		?>

    	    </div>
        </div> 
   </div> <!-- img-fluid will scaled images to the size of their parent -->
      <div class="col-sm-3"><h1 class="img-fluid">Alumni</h1></div>
      <div class="col-sm-4"></div>
	<?php
		if(isset($_SESSION["userID"]))
		{
			echo "<div class='col-sm-4'><h3>Hello, " . $_SESSION["firstname"] . "</h3></div>";
		}

	?>
      </div>
</div>
<!-- Test for topnav bar -->
	<div class="topnav">
		<a href ="http://35.199.20.205"><img src="images/home.png" width="15" height="15"><br>Home</a>
		<a href ="http://35.199.20.205/index.php"><img src="images/wrench.png" width="15" height="15"><br>Tools, Tips and Tricks</a>
		<a href ="http://34.74.193.71/html/internship_home.php"><img src="images/briefcase.png" width="15" height="15"><br>Internships</a>
		<a href ="http://35.226.71.244/index.php"><img src="images/flag.png" width="15" height="15"><br>Capture the Flag</a>
		<a href ="http://35.245.253.27/Home.php"><img src="images/books.png" width="15" height="15"><br>Research</a>	
		<a href ="index.php"><img src="images/persons.png" width="15" height="15"><br>Alumni</a>	
		</div>

	</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
    <div class="row">
      <h1>Submit Highlight</h1>
    </div>
  </div>


	<form action="upload_result.php" method="post" enctype="multipart/form-data"><br>
		<div class="row">
			<div class="col-sm-6">
				<textarea name="description" rows="10" cols="50" placeholder="Please enter your description"></textarea>
			</div>
			<div class="col-sm-6">
				<label>A good highlight should inform others of interesting projects you may have worked on recently.</label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				Select image to upload:
			</div>
			<div class="col-sm-3">
				<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			<div class="col-sm-6"></div>
			<hr>
		</div>
		<div class="row">
			<div class="col-sm-1">
				<input type="submit" value="Submit" name="submit">
			</div>
			<div class="col-sm-11"></div>
		</div>
	</form>



</div>


</body>
</html>
