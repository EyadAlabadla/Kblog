<?php

session_start();
if($_SESSION["logged"] != true)
{
	header('Location: http://eyadalabadla.com/Kblog/index.php');
}else
{
	$email = $_SESSION["user"];
	require "db/connection.php";
	$query = "select firstName,lastName,DOB,gender from User where email='$email';";

  if($result = mysqli_query($con,$query))
  {
    mysqli_close();
    $row = mysqli_fetch_row($result);
  }else
  {
  	mysqli_close();
    $logged = false;
  }
}

?>


<!DOCTYPE html>
<html>
	
	<head>
	
		<title>K Blog - Profile</title>
		<link rel="icon" href="pictures/icon.png">
		<link rel="stylesheet" type="text/css" href="css/profile.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<?php include 'memNav.php'; ?>
		
		<script>
		
		
		
		</script>
		
	</head>
	
	<body>
		
		<div id="body">
		
			<div id="left">
			
				<h3>Your Profile</h3>
				
				<table cellspacing="5px" cellpadding="3px">
				
					<tr>
						<td class="rowName">Name</td>
						<td><?php echo "$row[0]".' '."$row[1]" ?></td>
					</tr>
					
					<tr>
						<td class="rowName">Birthday</td>
						<td><?php echo "$row[2]" ?></td>
					</tr>
					
					<tr>
						<td class="rowName">Gender</td>
						<td><?php echo "$row[3]" ?></td>
					</tr>
					
					<tr>
						<td class="rowName">Contact Info.</td>
						<td><?php echo "$email" ?></td>
					</tr>
				
				</table>
			
			</div>
			
			<?php include 'rightMenu.php'; ?>
		
		</div>
	
	</body>
	
</html>