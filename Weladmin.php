<?php
echo "My first PHP script!";
?>

<html>
<head>

<title>AdminLogin</title>
</head>

<body>
<form name="wlad" method="POST" action="">
	<h1>
		Welcome To Admin Pannel
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
			<td colspan="2" align="center"><input type="submit" name="adb" value="click here"/></td>
		</tr>
	</table>
</form>
</body>
<?php
	if(isset($_POST['adb']))
	{
		echo "button clicked";
	header("Location: Adminpannel.php");
	}

?>

</html>

