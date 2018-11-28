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
	
		<title>K Blog - Edit Profile</title>
		<link rel="icon" href="pictures/icon.png">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<?php include 'memNav.php'; ?>
		
		<script>
		
		
		
		</script>
		
	</head>
	
	<body>
		
		<div id="body">
		
			<div id="left">
			
				<h3>Edit Profile</h3>
				
				<form action="db/update.php" method="Post">
					
					<table cellspacing="5px" cellpadding="3px">
					
						<tr>
							<td class="rowName">First Name</td>
							<td><input class="textBox" type="text" name="fName" value="<?=$row[0]?>"/></td>
						</tr>
						
						<tr>
							<td class="rowName">Last Name</td>
							<td><input class="textBox" type="text" name="lName" value="<?=$row[1]?>"/></td>
						</tr>
						
						<tr>
							<td class="rowName">Birthday</td>
							<td><input class="textBox" type="date" name="birthday" value="<?=$row[2]?>"/></td>
						</tr>
						
						<tr>
							<td class="rowName">Gender</td>
							<td>
								<select class="textBox" name="gender">
									<option <?php echo ($row[3] == "Male") ? "selected" : "" ?> >Male</option>
									<option <?php echo ($row[3] == "Female") ? "selected" : "" ?> >Female</option>
								</select>
							</td>
						</tr>

						<tr>
							<td> </td>
							<td><input id="submit" type="submit"></td>
						</tr>
						
					</table>
			
				</form>
			
			</div>
			
			<?php include 'rightMenu.php'; ?>
		
		</div>
	
	</body>
	
</html>