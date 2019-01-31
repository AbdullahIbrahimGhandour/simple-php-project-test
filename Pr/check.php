<?php
	session_start();
	if(!($_SERVER["REQUEST_METHOD"] == "POST"))
		header("location: index.php");
	$conn = mysqli_connect("localhost", "root", "Bismillahi", "myDB") or die(mysqli_error());
	$un = mysqli_real_escape_string($conn, $_POST['UN']);
	$pw = mysqli_real_escape_string($conn, $_POST['PW']);
	$h = $_POST['H'];
	$q = mysqli_query($conn, "select * from users where username = '$un'");
	mysqli_close($conn);
	$cnt = mysqli_num_rows($q);
	if($cnt > 0){
		if($h == "1"){
			echo "<script>alert('Username taken!');</script>";
			echo '<script>window.location.assign("register.php");</script>';
		}
		$ar = mysqli_fetch_assoc($q);
		$PW = $ar['password'];
		if($pw == $PW){
			$_SESSION['user'] = $un;
			$_SESSION['uID'] = $ar['id'];
			header("location: home.php");
		}
		else
		{
			echo "<script>alert('Incorrect password!');</script>";
			echo '<script>window.location.assign("login.php");</script>';
		}
	}
	else
	{
		if($h == "1"){
			$conn = mysqli_connect("localhost", "root", "Bismillahi", "myDB") or die(mysqli_error());
			mysqli_query($conn, "insert into users (username, password) values ('$un', '$pw')");
			mysqli_close($conn);
			echo "<script>alert('Registered!');</script>";
			echo '<script>window.location.assign("index.php");</script>';
		}
		echo "<script>alert('Incorrect username!');</script>";
		echo '<script>window.location.assign("login.php");</script>';
	}
?>
