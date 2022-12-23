 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link rel="stylesheet" href="About us.css">

   </head>

   <body>
      <div class="nav">
            <div class="logo">
            <img src="img/logo.png" alt="">
            </div>
            <div class="nav-menu">
            <ul>
               <li><a href="index.php"><i class="fa-solid fa-house">HOME</i></a></li>
					<li><a class="active" href="#"><i class="fa-solid fa-people-group"></i>ABOUT</a></li>
					<li><a href="score.php"><i class="fa-regular fa-star-half-stroke"></i>SCORE</a></li>
					<li><a href="blog.php"><i class="fa-solid fa-blog"></i>BLOG</a></li>
					<li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>CONTACT</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-user" onclick="myFunction()">LOGOUT</i></a></li>
            </ul>
            </div>
         </div> 

        <section class="about">
         <div class="main">
            <video width="640" height="640" autoplay muted>
               <source src="background/profile.mp4" type="video/mp4">
               <source src="background/profile.ogg" type="video/ogg">
               Your browser does not support the video tag.
            </video>
            <div class="all-text">
               <h4 style="color:black; font-size:24px;">About Us</h4>
               <h1>A House Of Creative and Intelligent</h1>
               <p style="color:black">Kidopia is an e-learning website for kids providing free , fun, curriculum based quality pre-primary education to all children world wide. 
                  It prepares the child as such that they are capable to solve Basic Math and Science problems. Teaches the child basic manners and etiquette. 
                  Our website also includes many Fun Learning Activities like Rhymes, Poems, Singing, Dancing, Drawing and Origami. </p>
                  <div class="btn">
                  <a href="Privacy policy.php"><button type="button" class="btn2">Learn More</button></a>
                  <a href="Testimonials.php"><button type="button" class="btn2">Testimonials</button></a>
                  </div>
            </div>
         </div>
    </section>
    <section class="mvv">
     
         <div class="mvv-container">

            <div class="mvv-block">
               <div class="image">
                  <img src="img/mission.png" alt="">
               </div>
               <div class="content">
                  <h5>OUR MISSION</h5>
                  <p style="color:black">We believe that a happy child is a successful one. We are committed to providing a positive, safe and stimulating environment for children 
                     to learn, where all are valued. We intend that all children should enjoy their learning, achieve their potential and become independent 
                     life-long learners.Our early learning center exists to provide a safe, developmentally, inclusive environment for toddlers, preschool, 
                     kindergarten and school age children.</p>
               </div>
            </div>
         </div>

         <div class="mvv-container">

            <div class="mvv-block">
               <div class="image">
                  <img src="img/vission.jpg" alt="">
               </div>
               <div class="content">
                  <h5>OUR VISSION</h5>
                  <p style="color:black">Each child is blessed with a unique potential. Our website is designed to help the child realize their unique abilities in a systematic, 
                     synergetic and self-paced manner. We help the child to discover their own individual learning style and achieve the desired learning outcomes, 
                     in sync with the high-level social, emotional, linguistic and other developmental milestones.</p>
               </div>
            </div>
         </div>
      </section>
      <!------footer----->
  <footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				
				<div class="social-links">
				<img class="logo" src="img/logo.png">
				<br><br>
					<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/kidoopia_2022/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
		  
				</div>
			</div>
			<div class="footer-col">
			<h4>QUICK LINKS</h4>
				<ul>
					<li><a href="About us.php"><i class="fa-solid fa-people-group"></i>about us</a></li>
					<li><a href="score.php"><i class="fa-regular fa-star-half-stroke"></i>Score</a></li>
					<li><a href="blog.php"><i class="fa-solid fa-blog"></i>Blog</a></li>
					<li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>contact</a></li>
				</ul>
				
			</div>
			<div class="footer-col">
			<h4>GET IN TOUCH</h4>
				<ul>
					<li><a href="#"><i class="fa-solid fa-location-dot"></i>BMCC , Shivajinagar,<br> Pune,411004</a></li>
					<li><a href="#"><i class="fa-solid fa-phone"></i>+91 20 6765 6200</a></li>
					<li><a href="#"> <i class="fa-solid fa-envelope"></i>kidopia@gmail.com </a></li>
				</ul>
				
			</div>
			<div class="footer-col">
			<h4>HELP US GROW</h4>
				<ul>
					<li><a href="#"><i class="fa-solid fa-share-nodes"></i>Share Our Website</a></li>
				</ul>
			
				
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<br><br>
		<p>copyright &copy;2022  KIDOPIA ! All Rights Reserved .</p>
	</div>
</footer>

<script>

function myFunction() {
let text = "Do you really want to log out?";
 if (confirm(text) == true) {
  } else {
   
  }
  document.getElementById("demo").innerHTML = text;
 }
</script>
   </body>
</html>

