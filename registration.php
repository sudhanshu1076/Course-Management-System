<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
<section id="header">
     	<div class="container">
            <img src="images/logo.png" class="logo">
     </section>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
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
