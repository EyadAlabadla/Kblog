<?php

require("connection.php");

if($con)
{
	
	$fname = $_POST["fName"];
	$lname = $_POST["lName"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$DOB = $_POST["birthday"];
	
	$query = "insert into User(email, password, firstName, lastName, DOB) values('$email','$password','$fname','$lname','$DOB');";
	if(strlen($_POST["password"]) >= 6 && mysqli_query($con,$query))
	{
		mysqli_close();
		session_start();
    $_SESSION["user"] = $email;
    $_SESSION["logged"] = true;
    header('Location: http://eyadalabadla.com/Kblog/profile.php');
	}else
	{
		mysqli_close();
		header('Location: http://eyadalabadla.com/Kblog/index.php?status=registerError');
	}
	
}


?>