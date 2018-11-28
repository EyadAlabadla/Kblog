<?php

session_start();

require "db/connection.php";
$x = $_GET["id"];
$query = "select title,content,user_email from Blogs where id=$x;";

if($result = mysqli_query($con,$query))
{
	$array = mysqli_fetch_array($result);
	mysqli_close();
}else
{
	mysqli_close();
//$logged = false;
}


?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>K Blog - View Blog</title>
		
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<link rel="stylesheet" type="text/css" href="css/ViewBlog.css">
		<?php include 'memNav.php'; ?>
		
	</head>
	

	<body>
		
		<div id="body">
			
			<?php include 'rightMenu.php'; ?>
			
			<div id="left">
			
				<div id="blog" >
					
					<h2> <?php echo rawurldecode($array[0]); ?> </h2>
					<h5> Author: <?php echo $array[2]; ?> </h5>
					<p id="blogBody"> <?php echo nl2br(rawurldecode($array[1])); ?> </p>
				
				</div>
				
			</div>
			
		</div>
		
	</body>

</html>