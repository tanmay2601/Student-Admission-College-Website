<?php include('server.php')
?>
<!doctype html>
<html>
	<style>
		body a:visited{
			color:blue;
		}
	</style>
	<head>
		<title>LOGIN PORTAL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="loginicon.png" class="icon">
			<h1>LOGIN HERE</h1>
			<form action="login.php" method ="post">
				<p>USERNAME:</p>
				<input type="username" name="username" placeholder="ENTER USERNAME" required><br><br>
				<p>PASSWORD:</p>
				<input type="password" name="password_1" placeholder="ENTER PASSWORD" required><br><br>
				<p style="text-align:center"><button type="submit" name="login_user">LOGIN</button></p>
				<p style="text-align:center"><a href="registration.php" style="font-family:open-sans"><i><u>haven't registered yet?</u></i></a></p>
			</form>
		</div>
	</body>
</html>