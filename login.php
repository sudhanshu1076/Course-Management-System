<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type= "text/css" href="style1.css"/>
</head>
<body>
<section id="header">
     	<div class="container">
            <img src="images/logo.png" class="logo">
     </section>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
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
  <section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h4>Product</h4>
                    <small>Our Plan</small><br>
                    <small>Free Trial</small>
                </div>
                <div class="link-title">
                    <h4>About Us</h4>
                    <small>Request Demo</small><br>
                    <small>FAQs</small>
                </div>
                <div class="link-title">
                    <h4>Support</h4>
                    <small>Features</small><br>
                    <small>Contact Us</small>
                </div>
                <div class="link-title">
                    <h4>Explore</h4>
                    <small>Find a Non-Profit</small><br>
                    <small>Corporate Solutions</small>
                </div>
            </div>
        </div>
        <div class="footer-right-col">
            <div class="footer-info">
                <div class="copyright-text">
                    <small>Webpage by Sudhanshu</small><br>
                    <small>sudhanshu1076@gmail.com</small><br>
                    <small>copyright 2020 Xypo</small>
                </div>
                <div class="footer-logo">
                    <img src="images/logo.png">
                    <button class="common-btn">English</button>
                </div>
            </div>
        </div>
    </div>
</section>  
<?php
    }
?>
</body>
</html>
