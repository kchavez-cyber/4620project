<?php
session_start();

    #include("connection.php");
    #include("functions.php");
    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MetTube</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>index page</h1>

    <br>
    Hello User


</body>



</head>
</html>
