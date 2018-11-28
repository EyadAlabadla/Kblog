<?php

$status = $_GET["status"];
if($status=="loginError")
{
	print '<script>alert("Wrong username or password")</script>';
}
if($status=="registerError")
{
	print '<script>alert("The email you have entered is used or the password must be more than 6 letters")</script>';
}

session_start();
if($_SESSION["logged"] == true)
{
	header('Location: http://eyadalabadla.com/Kblog/profile.php');
}

$remuser = "";
$rempass = "";
if(isset($_COOKIE["rememberuser"]))
	$remuser = $_COOKIE["rememberuser"];
if(isset($_COOKIE["rememberpass"]))
	$rempass = $_COOKIE["rememberpass"];

?>


<!DOCTYPE html>
<html>

	<head>
		
		<title>K Blog - Home</title>
		<link rel="icon" href="pictures/icon.png">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<?php include 'nav.php'; ?>
		
	</head>
	
	<body>
		
		<div id="body">
			
			<div id="right">
			
				<div id="login">
					
					<form action="db/login.php" method="POST">
						
						<table cellspacing="10">
							
							<tr>
							
								<td class="formHead" width="100px">Login</td>
							
							</tr>
							
							<tr>
							
								<td>Email</td>
								<td><input name="email" type="email" size="30" placeholder="sample@domain.com" value="<?php echo $remuser ?>"/></td>
							
							</tr>
							
							<tr>
							
								<td>Password</td>
								<td><input name="password" type="password" size="30" placeholder="password" value="<?php echo $rempass ?>"/></td>
							
							</tr>
							
							<tr>
							
								<td id="remMe" colspan="2" align="right">Remember me<input name="remember" type="checkbox"/> <input class="submitButton" name="sumbit" type="submit" value="Login"/></td>
							
							</tr>
							
						</table>
						
					</form>
					
				</div>
				
				<div id="signup">
					
					<form action="db/registeration.php" method="POST">
						
						<table cellspacing="10">
							
							<tr>
							
								<td class="formHead" width="100px">Signup</td>
							
							</tr>
							
							<tr>
							
								<td>First Name</td>
								<td><input type="text" name="fName" placeholder="First Name" size="30"/></td>
							
							</tr>
							
							<tr>
							
								<td>Last Name</td>
								<td><input type="text" name="lName" placeholder="Last Name" size="30"/></td>
							
							</tr>
							
							<tr>
							
								<td>Email</td>
								<td><input type="email" name="email" placeholder="sample@domain.com" size="30"/></td>
							
							</tr>
							
							<tr>
							
								<td>Password</td>
								<td><input type="password" name="password" placeholder="length between 6-25" size="30"/></td>
							
							</tr>
							
							<tr>
							
								<td>Birthday</td>
								<td><input type="date" name="birthday" id="dob"/></td>
							
							</tr>
							
							<tr>
							
								<td colspan="2" align="right"><input class="submitButton" name="sumbit" type="submit" value="Signup"/></td>
							
							</tr>
						
						</table>
						
					</form>
					
				</div>
			
			</div>
			
			<div id="left">
			
				<h3>What is K Blog?</h3>
				<ul>
					<li>K Blog is a project for CS11241 Webpage Design and Internet Programming course.</li>
					<li>K Blog is a website that allows its users to write their own blogs and read other users' blogs.</li>
				</ul>
				<br>
				<h3>Why K Blog?</h3>
				<ul>
					<li>K Blog is simple and easy to use.</li>
					<li>K blog is 100% free with no ads!</li>
				</ul>
					<br>               
					<h3>K Blog is made by:</h3>
					<ul>
						<li>20140220 - Eyad AlAbadla.</li>
						<li>20140216 - Mohannad Mutlag.</li>
						<li>20140724 - Oraeb Hassan.</li>
						<li>20130350 - Haneen Saleh.</li>
					</ul>
				
			</div>
			
		</div>
		
	</body>

</html>