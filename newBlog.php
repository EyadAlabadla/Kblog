<?php

session_start();
if($_SESSION["logged"] != true)
{
	header('Location: http://eyadalabadla.com/Kblog/index.php');
}

?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>K Blog - New Blog</title>
		
		<link rel="stylesheet" type="text/css" href="css/NewBlog.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<?php include 'memNav.php'; ?>
		
		<script>
		
			redirect()
			{
				header("user_blogs.php");
			}
		
		</script>
		
	</head>
	

	<body>
		
		<div id="body">
			
			<?php include 'rightMenu.php'; ?>
			
			<div id="left">
			
				<form action="db/newBlog.php" method="Post">
					<table>
						<tr>
							<td>
								<h4> Blog Title </h4>
							</td>
							<td>
								<input type="text" name="title" id="title" /> 
							</td>
						<tr>
							<td colspan="2">
								<h4> Blog content </h4> 
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<textarea rows="25" name="content" id="content"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Publish" id="publish" onclick="redirect()" />
							</td>
						</tr>
					</table>
				</form>
				
			</div>
			
		</div>
		
	</body>

</html>