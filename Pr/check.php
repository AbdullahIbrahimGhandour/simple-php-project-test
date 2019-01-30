<?php
	session_start();
	$un = $_POST['UN'];
	$pw = $_POST['PW'];
	$conn = mysqli_connect("localhost", "root", "Bismillahi", "myDB") or die(mysqli_error());
	$q = mysqli_query($conn, "select * from users where username = '$un'");
	$cnt = mysqli_num_rows($q);
	if($cnt > 0){
		$PW = mysqli_fetch_assoc($q)['password'];
		if($pw == $PW){
			$_SESSION['user'] = $un;
			header("location: index.php");
		}
		else
		{
			echo "<script>alert('Incorrect password!');</script>";
			echo '<script>window.location.assign("login.php");</script>';
		}
	}
	else
	{
		echo "<script>alert('Incorrect username!');</script>";
		echo '<script>window.location.assign("register.php");</script>';
	}
?>
