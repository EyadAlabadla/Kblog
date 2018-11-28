<?php

require("connection.php");

if($con)
{
	session_start();
	$fname = $_POST["fName"];
	$lname = $_POST["lName"];
	$DOB = $_POST["birthday"];
	$gender = $_POST["gender"];
	$email = $_SESSION['user'];
	
	$query = "update User set firstName='$fname', lastName='$lname', DOB='$DOB', gender='$gender' where email='$email';";
	if(mysqli_query($con,$query))
	{
		mysqli_close();
    header('Location: http://eyadalabadla.com/Kblog/profile.php');
	}else
	{
		mysqli_close();
		header('Location: http://eyadalabadla.com/Kblog/profile.php?status=registerEditing');
	}
	
}


?>