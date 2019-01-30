<html>
	<head>
		<title>RegPage</title>
	</head>
	<body>
		<h1>Registration</h1>
		<a href="index.php">Back</a>
		<form action="check.php" method="POST">
			Username: <input type="text" name="UN" required/><br/>
			Password: <input type="password" name="PW" required/><br/>
            <input type="hidden" name="H" value="1"/>
			<input type="submit" value="Register"/>
		</form>
	</body>
</html>
