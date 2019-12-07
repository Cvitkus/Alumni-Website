<?php
	session_start();
	$_POST["name"] = "";
	include "credentials.php";

	$conn = mysqli_connect($host, $username, $password, $dbname);
	if(!$conn)
	{
		die('Could not connect.');
	}
		
?>


<!DOCTYPE html>


<html lang="en">
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
<!-- Container for header -->
<div class="container-fluid"> <!-- container-fluid is a full width container. it scales to the screen width -->
    <div class="row header"> <!-- each row can contain up to 12 columns. no matter what, all col must add up to 12 -->
      <div class="col-sm-1">
        <div class="dropdown">
          <button type="button" class="btn" data-toggle="dropdown">
            <img src='burger-menu.jpg' class='img-fluid'>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php"><h3>Home</h3></a>
	    <div class="dropdown-divider"></div>
	    <a class='dropdown-item' href='#'><h3>Whatever</h3></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><h3>Browse Submissions</h3></a>
          </div>
        </div>
    </div> <!-- img-fluid will scaled images to the size of their parent -->
      <div class="col-sm-3"><h1 class="img-fluid">Alumni</h1></div>
      <div class="col-sm-4"></div>
      </div>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
    <div class="row">
      <div class="col-sm-12"><h2>Update User Profile</h2></div>
    </div>
  </div>


	<form action="update.php" method="post">
		<div class="row"> <!-- row for name -->
			<div class="col-sm-2"><label>Name:</label></div>
			<div class="col-sm-2"><input name="name" value = "
				<?php
					$result = $conn->query("SELECT * FROM accounts WHERE user_id=".$_SESSION["userID"]);
					$row = $result->fetch_assoc();
					echo $row["name"];
				?> ">
			</div>
		</div>
		<div class="row"> <!-- row for email -->
			<div class="col-sm-2"><label>Email:</label></div>
			<div class="col-sm-2"><input name="email" value = "
				<?php
					$result = $conn->query("SELECT * FROM accounts WHERE user_id=".$_SESSION["userID"]);

					$row = $result->fetch_assoc();
					echo $row["email"];
				?> ">
			</div>
		</div>
		<div class="row"> <!-- row for grad_year -->
			<div class="col-sm-2"><label>Graduation Year:</label></div>
			<div class="col-sm-2"><input name="gradYear" value = "
				<?php
					$result = $conn->query("SELECT * FROM accounts WHERE user_id=".$_SESSION["userID"]);

					$row = $result->fetch_assoc();
					echo $row["grad_year"];
				?> ">
			</div>
		</div>
		<div class="row"> <!-- row for location -->
			<div class="col-sm-2"><label>Location:</label></div>
			<div class="col-sm-2"><input name="location" value = "<?php
					$result = $conn->query("SELECT * FROM accounts WHERE user_id=".$_SESSION["userID"]);

					$row = $result->fetch_assoc();
					echo $row["location"];
				?> ">
			</div>
		</div>
		<input type="submit" name="submit">
	</form>


</div>

</body>

</html>
