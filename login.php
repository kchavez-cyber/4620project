

<!DOCTYPE html>
<html lang="en">
<head>
<title>MeTube Login</title>
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
<h1 class ="center">MeTube Login</h1>

<div class = "center">
<p>
    <form action="includes/login.inc.php" method="post">
    <label for="Username">Username</label>
      <input type="text" name="uid" placeholder="Username/Email..."><BR></BR>
      <label for="Pasword">Password</label>
      <input type="password" name="pwd" placeholder="Password..."><BR></BR>
      <button type="submit" name="submit">Login</button>
    </form> 
</p>
<BR>

</div>
<div class = "center">
<h3 class ="center">First time user?</h3>
<a href="registration.php" target="blank"> Sign up</a>
</div>

</body>
</html>
