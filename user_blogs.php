<?php

session_start();
if($_SESSION["logged"] != true)
{
	header('Location: http://eyadalabadla.com/Kblog/index.php');
}else
{
	$email = $_SESSION["user"];
	require "db/connection.php";
	$query = "select title,LEFT(content, 50),id from Blogs where user_email='$email';";

	if($result = mysqli_query($con,$query))
	{
		mysqli_close();
	}else
	{
		mysqli_close();
    //$logged = false;
	}
}

include 'view_blogs.php';

?>