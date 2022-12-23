<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="test_style.css">
        <link rel="stylesheet" href="HF1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Lobster&family=Luckiest+Guy&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
    
    
   <div class="header ">
    
		     <!--navigation bar -->
             <div class="nav">
            <div class="logo">
				    <img src="img/logo.png" alt="">
            </div>
            <div class="nav-menu">
				<ul>
					<li><a href="index.php"><i class="fa-solid fa-house">HOME</i></a></li>
					<li><a class="active" href="About us.php"><i class="fa-solid fa-people-group"></i>ABOUT</a></li>
					<li><a href="score.php"><i class="fa-regular fa-star-half-stroke"></i>SCORE</a></li>
					<li><a href="blog.php"><i class="fa-solid fa-blog"></i>BLOG</a></li>
					<li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>CONTACT</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-user" onclick="myFunction()">LOGOUT</i></a></li>
				  </ul>
           </div>
           </div>
</div>

<body>

    <div class="testimonials">
        <div class="inner">
            <h1><u> Testimonials </u></h1><br><br>
            <hr>
            <!-- <div class="border"></div> -->

            <div class="row">
                <div class="col">
                    <div class="testimonial">
                        <img src="test/new1.jfif" alt="">
                        <div class="name">Manisha Sharma</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>A perfect pre school for pre-primary kids. The website ensures for overall development of tiny tots so that
                            they will enter regular schools full of confidence and enthusiasm for learning. Thank you.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="test/new2.jpg" alt="">
                        <div class="name"> Subodh Joshi</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            
                        </div>
                        <p>The curriculum is well researched and apt for development of children. The milestone rather evaluation of child on various criteria
                            is exemplary and let parents know the development or deficiencies in appropriate manner of the next level action or support.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="test/new3.jpg" alt="">
                        <div class="name">Akshata Deo </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p> My child is associated with Kidopia for the last 1 year. Best curriculum. Technology oriented. Best solution to keep children busy in 
                            some interesting thing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				
				<div class="social-links">
				<img class="logo" src="img/logo.png">
				<br><br>
					<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
					<a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
		  
				</div>
			</div>
			<div class="footer-col">
			<h4>QUICK LINKS</h4>
				<ul>
					<li><a href="About us"><i class="fa-solid fa-people-group"></i>about us</a></li>
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
  } 
  document.getElementById("demo").innerHTML = text;
 }
</script>
</body>


    </head>
</html>