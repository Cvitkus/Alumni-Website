<?php

	session_start();


	if(isset($_POST['submit']))
	{
		$email = $_POST["email"];
		$pass = $_POST["pass"];



		include "credentials.php";

		$conn = mysqli_connect($host, $username, $password, $dbname);
		
		if(!$conn)
		{
			die("Could not connect");
		}	

		$result = $conn->query("SELECT * FROM accounts WHERE email='" . $email . "'");

		if($result->num_rows == 0)
		{
			echo "Login failed<br>";
			if($row["email"] != $email)
				echo "Email not found.";
			else if($loginRow["password"] != $pass)
				echo "Incorrect Password";

			header("refresh:2;url=login.php");
		}

		$row = $result->fetch_assoc();
		$loginResult = $conn->query("SELECT * FROM login WHERE user_id=" . $row["user_id"]);
		$loginRow = $loginResult->fetch_assoc();

		if($row["email"] == $email and $loginRow["password"] == $pass)
		{
			echo "Welcome " . $row["name"];

			$_SESSION["userID"] = $row["user_id"];
			$_SESSION["firstname"] = $row["name"];

			header("refresh:3;url=index.php");
		}
		else
		{
			echo "<br>Login failed<br>";
			if($row["email"] != $email)
				echo "Email not found.";
			else if($loginRow["password"] != $pass)
				echo "Incorrect Password";

			header("refresh:2;url=login.php");
		}
	}
	else
		echo "How'd you get here?!";
	
?>
