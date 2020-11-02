<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
    $con = mysqli_connect("localhost","root","root","campus_cart");
    if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == true) {
            $_SESSION['username'] = $username;
            header("Location: mainpage.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username or password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    }
?>
</body>
</html>
