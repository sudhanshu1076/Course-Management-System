<?php
  include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Courses by Xypo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style type="text/css">
        h1{
            font-size: 50px;
    color: orange;
    font-weight: 900;
    margin-bottom: 0;
    font-family: "Poppins", sans-serif;
    text-transform: capitalize;
            } 
    </style>
    
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
<section id="header">
     	<div class="container">
            <img src="images/logo.png" class="logo">
            <div>
                <h1 class="heading">Courses</h1>
                <p>
                    This page will include all of the available courses.
                </p>
                <div>
                    <img src="images/h.gif" style="width: 300px; height: 280px;">
                </div>
            </div>
     	    </div>	
     </section>
     <nav id="sideNav">
     	<ul>
     		<li><a href="index.html">HOME</a></li>
     	</ul>	
     </nav>
     <img src="images/menu.png" id="menuBtn">
     <!-- header section end -->
     <br>
     <br>
     <br>
      <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img class="rotation" src="images/English.png" alt="" style="width: 300px; height: 280px;">
                             </div>
                         </div>
                         <div class="service_content text-center">
                             <a href="https://en.wikipedia.org/wiki/English_Wikipedia"><h3 class="fontalicious" style="color: black">English</h3></a>
                            <p style="font-family: cursive;">This is our most popular English language course, largely for the simple reasons that lessons are in the morning, and end at 12:30 (our General English 20 ends at 13:35, and our Intensive English 30 course at 16:00 or 17:15.).</p>
                            <p><h2 style="color: red; font-family: courier;">INR.1500/month</h2></p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img class="floater" src="images/Math.png" alt="" style="width: 300px; height: 280px;">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <a href="https://en.wikipedia.org/wiki/Mathematics"><h3 class="fontalicious" style="color: black">Maths</h3></a>
                            <p style="font-family: cursive;">Alison's range of free online Math courses is designed to make Math much less complicated. These online Math courses will guide you through basic and advanced Math principles on everything from Fractions and Algebra to Geometry and Calculus. By taking these courses and improving your Math skills, you'll gain a solid foundation that can be applied in almost every job in the world today, make your time at school much easier, and give you some very useful skills for life.</p>
                            <p><h2 style="color: red; font-family: courier;">INR 2500/month</h2></p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img class="spinner" src="images/Science.png" alt="" style="width: 300px; height: 280px;">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <a href="https://en.wikipedia.org/wiki/Science"><h3 class="fontalicious" style="color: black">Science</h3></a>
                            <p style="font-family: cursive;">It Includes all Science Subject that are <b>Physics,Chemistry</b> and <b>Biology</b>
                            You have option to study Biology or not on you. The course is 6 month long Makes you beginner to advance in cores. </p>
                            <p><h2 style="color: red; font-family: courier;">INR 6000/month</h2></p>
                         </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img class="spinner" src="images/Art.png" alt="" style="width: 300px; height: 280px;">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <a href="https://en.wikipedia.org/wiki/Art"><h3 class="fontalicious" style="color: black">Arts</h3></a>
                            <p style="font-family: cursive;">Ever been fascinated by the art showcased in galleries or impressed by the architecture of a building? Well, there are people out there who work to make a beautiful piece of art in the form of sculpture, music, drama, painting, film, architecture, photograph, animated character, and a lot more.</p>
                            <p><h2 style="color: red; font-family: courier;">INR 4000/month</h2></p>
                         </div>
                    </div>
                </div>
            </div>
            
     <!--footer section -->
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