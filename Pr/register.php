<html>
	<head>
		<title>RegPage</title>
	</head>
	<body>
		<h1>Registration</h1>
		<a href="index.php">Back</a>
		<form action="register.php" method="POST">
			Username: <input type="text" name="UN" required/><br/>
			Password: <input type="password" name="PW" required/><br/>
			<input type="submit" value="Register"/>
		</form>
	</body>
</html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST['UN'];
		$password = $_POST['PW'];
		$f = true;
		$conn = mysqli_connect("localhost", "root", "Bismillahi", "myDB") or die(mysqli_error());
		$q = mysqli_query($conn, "select * from users");
		while($row = mysqli_fetch_array($q)){
			$name = $row['username'];
			if($name == $username){
				$f = false;
				echo '<script>alert("Username taken!");</script>';
				break;
			}
		}
		if($f){
			mysqli_query($conn, "insert into users (username, password) values ('$username', '$password')");
			echo '<script>alert("Registered!");</script>';
		}
		mysqli_close($conn);
	}
?>
