<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$gradYear = $_POST["gradYear"];
		$location = $_POST["location"];
		$userID = $_SESSION["userID"];		

		include "credentials.php";

		$conn = mysqli_connect($host, $username, $password, $dbname);

		$result = $conn->query("UPDATE accounts 
			SET name='" . $name . "', email='" . $email . "', grad_year=" . $gradYear . ", location='" . $location . "' 
			WHERE user_id=". $userID);
		if(!$result)
			echo("error: " . $conn->error);
	header("refresh:3;url=user_profile.php");
	}
?>
	
