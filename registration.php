<?php
session_start();

    #include("connection.php");
    #include("functions.php");

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up</title>
<meta charset="UTF-8">
<style>
        .center {
          text-align: center;
        }
        .vertical{
            margin-bottom: 200px;
        }
        </style>
</head>
<body>
<div class = "vertical"></div>
<h1 class = "center">Registration</h1>

<div class = "center">
<FORM action="http://MeTube.com/registration/adduser" method="post">
        <P>
        <LABEL for="firstname">First name:</LABEL>
                <INPUT type="text" id="firstname" name="firstname"><BR>
        <LABEL for="lastname">Last name: </LABEL>
                <INPUT type="text" id="lastname" name="lastname"><BR>
        <LABEL for="email">email</LABEL>
                <INPUT type="text" id="email" name="email"><BR>
        </P>
        <input type="submit" value="Submit">
</FORM>
</div>
</body>
</html>
