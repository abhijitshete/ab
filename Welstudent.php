<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WelCome Student</title>
</head>

<body>
<form name="welstd" method="POST" action="#">
<h1>
		Welcome To Student Pannel
</h1>
	<h4>
		Login From Here
	</h4>
	<table border="4">
		<tr>
			<td><h3>
				Username
			</h3></td>
			<td>
				<textarea spellcheck="true" size="25">
				</textarea>	
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="stb"/></td>
		</tr>
	</table>
	</form>
<?php
echo "My first PHP script!";
		if(isset($_POST['stb']))
		{
			echo("You stb");

			header('Location: studentpannel.php');
		}
?>
</body>
</html>
