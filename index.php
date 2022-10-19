<?php
  include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Webpage By Sudhanshu Tyagi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
<section id="header">
     	<div class="container">
            <img src="images/logo.png" class="logo">
            <div class="header-text">
            	<h1>The purpose is to<br>teach, bring learning to people</h1>
            	<span class="square"></span>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <button class="common-btn">Read More</button>
                <div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>
     	    </div>	
     </section>
     <nav id="sideNav">
     	<ul>
     		<li><a href="#header">HOME</a></li>
     		<li><a href="#about">ABOUT US</a></li>
     		<li><a href="#features">FEATURES</a></li>
     		<li><a href="#courses">COURSES</a></li>
     		<li><a href="#offer">OFFER</a></li>
     		<li><a href="#contact">CONTACT</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li><p style="color:white">Hey, <?php echo $_SESSION['username']; ?>!</p></li>
     	</ul>	
     </nav>
     <img src="images/menu.png" id="menuBtn">

<!--about-->

<section id= "about">
	<div class="about-left-col">
		<img src="images/about.png">
	</div>
	<div class="about-right-col">
		<div class="about-text">
			<h1>About Us</h1>
			<span class="square"></span>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure latin words, consectetur, from a Lorem Ipsum passage, and going through the cities of the word in classical literature, discovered the undoubtable source.</p><br><br>
			<div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>

			<h2>"Learning is not attained by chance, it must be sought for with ardor and attended to with diligence"</h2>
			<h3>----Abigail Adams</h3>
		</div>
	</div>
</section>

<!---features--->

<section id="features">
	<div class="feature-row">
		<div class="feature-col">
			<img src="images/pic-1.png">
			<h4>Learn Anywhere</h4>
			<p>Switch between your computer, tablet or mobile device.</p>
		</div>
        <div class="feature-col">
        	<img src="images/pic-2.png">
			<h4>Expert Teachers</h4>
			<p>Learn from industry experts who are passionate about teaching.</p>
        </div>
        <div class="feature-col">
        	<img src="images/pic-3.png">
			<h4>Unlimited Access</h4>
			<p>Choose what you'd like to learn from our extensive subscription libraries.</p>
        </div>
	</div>
	<div class="feature-btn">
		<div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>
		<button class="common-btn">Start Free Trial</button>
	</div>
</section>

<!---courses--->

<section id="courses">
	<div class="container course-row">
		<div class="course-left-col">
			<div class="course-text">
				<h1>Browse our top<br>courses</h1>
				<span class="square"></span>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure latin words, consectetur, from a Lorem Ipsum passage, and going through the cities of the word in classical literature, discovered the undoubtable source.</p>
				<a href="Courses.php">
				<button class="common-btn">View All Courses</button></a>
				<div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>
			</div>
		</div>
		<div class="course-right-col">
			<img src="images/course.png">
		</div>
	</div>
</section>

<!---Offer--->

<section id= "offer">
	<div class="about-left-col">
		<img src="images/offer.png">
	</div>
	<div class="about-right-col">
		<div class="about-text">
			<h1>Limitless Learning,<br>Limitless Possibilities</h1>
			<span class="square"></span>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a latin professor at Hampden-Sydney College in Virginia.</p>
			<button class="common-btn">Start Free Trial</button>
			<div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>

	</div>
</section>

<!---Contact--->

<section id="contact">
	<div class="container contact-row">
		<div class="contact-left-col">
			<?php
			if(isset($_POST['submit'])){
				$name=$_REQUEST["name"];
				$email= $_REQUEST["email"];
				$tel= $_REQUEST["phone"];       
				$sql = "INSERT INTO `form` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$tel')";
				$result = mysqli_query ($conn, $sql);
				if($result){
					echo "Record added succesfully";
				}
				else {
					echo "Record not added";
				}
			}
			?>   
			<h1>Enter Details to join our<br>Learning Community</h1>
			<form action="#" method="post">
				<input type="text" name="name" placeholder="Enter Name" Required>
				<input type="email" name="email" placeholder="Enter Email" Required>
				<input type="tel" name="phone" placeholder="Enter Phone No." Required>
				<div class="btn-box">
					<button class="common-btn" name="submit" type="submit">Enter</button>
					<button class="common-btn">Start Free Trial</button>
				</div>
			</form>
			<div class="line">
                	<span class="line-1"></span><br>
                	<span class="line-2"></span><br>
                	<span class="line-3"></span>
                </div>
		</div>
		<div class="contact-right-col">
			<img src="images/contact.png">
		</div>
	</div>
</section>

<!---Footer--->

<section id="footer">
	<div class="container footer-row">
		<hr>
		<div class="footer-left-col">
			<div class="footer-links">
				<div class="link-title">
					<h4>Product</h4>
					<small>Our Plan</small><br>
					<small onclick="function(#courses)">Free Trial</small>
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

<!---social-icons--->

<div class="social-icons">
	<img src="images/facebook.png">
    <img src="images/instagram.png">
    <img src="images/twitter.png">
    <img src="images/linkedin.png">
</div>




     <script>
     	var menuBtn= document.getElementById("menuBtn");
     	var sideNav= document.getElementById("sideNav");

     	sideNav.style.right = "-250px";
     	menuBtn.onclick = function(){
     		if(sideNav.style.right == "-250px"){
     			sideNav.style.right = "0";
     		}
     		else{
     			sideNav.style.right = "-250px";
     		}
     	}
	    var scroll = new SmoothScroll('a[href*="#"]');
     </script>

</body>
</html>