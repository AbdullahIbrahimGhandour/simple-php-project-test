<?php
    session_start();
    if(!$_SESSION['user'])
        header("location: index.php");
    $user = $_SESSION['user'];
?>
<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <h1>Home</h1>
        Welcome <?= $user ?>!<br/>
        <a href="logout.php">Logout</a><br/><br/>

        <form action="add.php" method="post">
            New post: <input type="text" name="pst" required/><br/>
            Public <input type="checkbox" name="pb" checked/><br/>
            <input type="submit" value="Add to list">
        </form>
        <h2 align="center">My List</h2>
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Details</th>
                <th>Post Time</th>
                <th>Edit Time</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Public</th>
            </tr>
            <tr>
                <td colspan="4" align="center">-</td>
            </tr>
        </table>
    </body>
</html>
