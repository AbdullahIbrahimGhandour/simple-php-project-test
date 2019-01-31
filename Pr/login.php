<?php
    session_start();
    if($_SESSION['user'])
        header("location: home.php");
?>
<html>
	<head>
		<title>LoginPage</title>
	</head>
	<body>
		<h1>Login</h1>
		<a href="index.php">Back</a>
		<form action="check.php" method="POST">
			Username: <input type="text" name="UN" required/><br/>
			Password: <input type="password" name="PW" required/><br/>
            <input type="hidden" name="H" value="2"/>
			<input type="submit" value="Login"/>
		</form>
	</body>
</html>
