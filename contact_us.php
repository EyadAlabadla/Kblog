<?php

if(isset($_POST["submit"]))
{
	if($_POST["subject"].value == "none")
	{
		echo "<script>alert('Please select a subject!')</script>";
	}
	else
	{
		mail('eyad_alabadla@outlook.com', 'My Subject', $_POST["msg"]);
		echo "<script>alert('Thank you for your feedback.')</script>";
	}
}


?>

<!DOCTYPE html>
<html>

	<head>
	
		<title>K Blog - Contact us</title>
		<link rel="icon" href="pictures/icon.png">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<link rel="stylesheet" type="text/css" href="css/contact_us.css">
		
		<script>
		
			function other()
			{
				if(document.getElementById("subject").value == "other")
				{
					var x = document.getElementById("selectBox");
					var newE = document.createElement("input");
					newE.type = "text";
					newE.id = "newE";
					newE.placeholder = "Please specify";
					x.appendChild(newE);
				}
				else
				{
					var x = document.getElementById("newE");
					x.parentNode.removeChild(x);
				}
			}
			
		
		</script>
	
	</head>
	
	<body>
	
		<?php

			session_start();
			if($_SESSION["logged"] == true)
			{
				include 'memNav.php';
			}else
			{
				include 'nav.php';
			}


		?>
		
		<div id="body">
			
			<div id="left">
			
				<form action="" method="Post">
				
					<h3>Contact us</h3>
					
					<div id="selectBox">
						
						<select name="subject" id="subject" onchange="other()">
							
							<option value="none">--Please select a subject--</option>
							<option value="tech">Technical issues</option>
							<option value="business">Business</option>
							<option value="other">Other...</option>
						
						</select>
						
					</div>
					
					<textarea id="contBody" rows="20" name="msg"></textarea>
					<br>
					
					<input type="submit" name="submit" value="Submit" id="submit"/>
				
				</form>
			
			</div>
		
		</div>
	
	</body>

</html>