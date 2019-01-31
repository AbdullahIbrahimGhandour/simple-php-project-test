<?php
    session_start();
    if($_SESSION['user'])
        header("location: home.php");
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
?>
<html>
<head>
    <title>First Test</title>
</head>
<body>
<p>Hello Test</p>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
</body>
</html>
