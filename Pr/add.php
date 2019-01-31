<?php
    session_start();
    if(!($_SERVER["REQUEST_METHOD"] == "POST")) {
        header("location: home.php");
        exit;
    }
    $conn = mysqli_connect("localhost", "root", "Bismillahi", "myDB");
    $details = mysqli_real_escape_string($conn, $_POST['pst']);
    $p = ($_POST['pb'] == "on")? 1 : 0;
    $time = strftime("%T");
    $date = strftime("%a, %b %d, %Y");
    mysqli_query($conn, "INSERT INTO list(details, date_posted, time_posted, date_edited, time_edited, public) VALUES ('$details', '$date', '$time', '$date', '$time', $p)");
    mysqli_close($conn);
    header("location: home.php");
?>
