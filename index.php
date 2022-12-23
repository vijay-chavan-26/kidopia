<?php
session_start();
$name = '';
$username = '';
if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
    $name = $_SESSION['user'];
    $username = $_SESSION['username'];
}else{
    header('location: login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

   <head>
   <meta charset="UTF-8">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
   <script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="pro_drp.css">

    
    <style>
         .overview{
            background-image: url(img/back.png);
            background-size: 100%;
            background-repeat: no-repeat;
         }
		 body {

         justify-content: center;
         align-items: center;
         min-height: 100vh;
      }

      .swiper {
         width: 100%;
         padding-top: 50px;
         padding-bottom: 200px;
      }

      .swiper-slide {
         background-position: center;
         background-size: cover;
         width: 300px;
         height: 90px;
         -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0006);
      }

      .swiper-slide img {
         display: block;
         width: 100%;
      }

      .button {
         background-color: #4CAF50;
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
    <title>Home</title>
   </head>
   <body>


   <div class="header ">
         <video autoplay muted loop class="space"><source src="img/space.mp4">
         </video>

		     <!--navigation bar -->
         <div class="nav">
            <div class="logo">
				    <img src="img/logo.png" alt="">
            </div>
            <div class="nav-menu">
				   <ul>
				     <li><a class="active" href="#"><i class="fa-solid fa-house">HOME</i></a></li>
				     <li><a href="About us.php"><i class="fa-solid fa-people-group"></i>ABOUT</a></li>
				     <li><a href="score.php"><i class="fa-regular fa-star-half-stroke"></i>SCORE</a></li>
				     <li><a href="blog.php"><i class="fa-solid fa-blog"></i>BLOG</a></li>
				     <li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>CONTACT</a></li>
				      <li><a href="#"><i class="fa-solid fa-user" onclick="toggleMenu()">Profile</i></a></li> 
                 <!-- <img src="user.png" class="user-pic" > -->
                  
                       <!-- include 'pro_drp.html';-->
                 </ul>
                 <div class="sub-menu-main" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="user.png">
                       <?php if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                            $name = $_SESSION['user'];
                            $username = $_SESSION['username'];?>
                            <h2 style='font-family: sans-serif; font-size:30px;'><b><?php echo $_SESSION['user'];?> </b></h2>
                      <?php }else{
                        header('location: login.php');
                        exit;
                      }?>
                       <!-- <h2 style='font-family: sans-serif; font-size:30px;'><b><?php echo $_SESSION['user'];?> </b></h2> -->
                    </div>
                    <hr>
                     
                     <a href="#" class="sub-menu-link">
                        <i class='fas fa-user-alt' style='font-size:22px'> <b>&nbsp;Name: &nbsp;</b></i><br><br>
                        <?php if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                            ?>
                            <h2 style='font-family: sans-serif; font-size:22px;'><b><?php echo $_SESSION['user'];?> </b></h2>
                      <?php }else{
                        header('location: login.php');
                        exit;
                      }?>
                     </a>
                     <a href="#" class="sub-menu-link">
                        <i class='fas fa-address-card' style='font-size:22px'><b>&nbsp; Username: &nbsp;</b></i><br><br>
                        <?php if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                            ?>
                            <h2 style='font-family: sans-serif; font-size:22px;'><b><?php echo $_SESSION['username'];?> </b></h2>
                      <?php }else{
                        header('location: login.php');
                        exit;
                      }?>
                     </a> 
                     </a> 
                     <a href="https://forms.gle/g1TqraqByEvyZbYi8" class="sub-menu-link">
                        <i class='fas fa-comment-alt' style='font-size:22px'><b>&nbsp; Feedback</b></i><br><br>
                     </a> 
                     <a href="Privacy policy.php" class="sub-menu-link">
                        <i class='fas fa-bug' style='font-size:22px'><b>&nbsp; Privacy policy</b></i><br><br>
                     </a> 
                     <a href="logout.php" class="sub-menu-link">
                        <i class="fas fa-door-open" style='font-size:22px'><b> &nbsp;Logout</i></b><br><br>
                     </a>

                     <div class="social-links">
				
                     
				          <br><br>
                      <a href="www.facebook.com"><i class="fa fa-facebook-official" style="font-size:30px; color:black;"></a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="https://www.instagram.com/kidoopia_2022/"><i class="fa fa-instagram" style="font-size:30px;color:black; "></a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="www.linkedin.com"><i class="fa fa-linkedin" style="font-size:30px; color:black;"></a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="www.twitter.com"><i class="fa fa-twitter-square" style="font-size:30px; color:black;"></a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


		  
				          </div> 

                </div>
            </div>
           </div>
           </div>
		<!--nav bar end -->
		
         <div class="header-content ">
          <div class="content">
             <h1>WELCOME TO <br> KIDOOPIA</h1>
             <h2>Learn.Play.Grow</h2>
          </div>
         </div>
      </div>



      <!-------------course-------------->
	   
      <section class="course reveal">
         <h1>OUR COURSES</h1>
          <div class="row">
          <div class="image">
          <img class="image__img" src="img/funlearning.png">
					<div class="dropdown">
					<button class="dropbtn">To Learn :</button>
    			<div class="dropdown-content">
						<a href="poem.php">POEMS</a>
    				<a href="rhymes.php">RHYMES</a>
					</div>
					</div>
					<div class="image__overlay">
    			<div class="image__title">FUN LEARNING!</div>
		  		</div>
          </div>
		
          <figure>
          <div class="image-3">
          <img class="image__img" src="img/arts.png">
					<div class="dropdown">
					<button class="dropbtn">To Learn :</button>
							<div class="dropdown-content">
								<a href="Dance.php">DANCE</a>
								<a href="music.php">SINGING</a>
							</div>
					</div>
					<div class="image__overlay">
					<div class="image__title">PERFORMING ARTS!</div>
					</div>
					</div>
          </figure>
		     

			    <figure>
          <div class="image-2">
          <img class="image__img" src="img/activity.png">
					<div class="dropdown">
					<button class="dropbtn">To Learn :</button>
							<div class="dropdown-content">
								<a href="craft.php">CRAFT </a>
								<a href="drawing.php">DRAWING</a>
								<a href="yoga.php">YOGA</a>
							</div>
					</div>
					<div class="image__overlay">
					<div class="image__title">ACTIVITIES!</div>
					</div>
					</div>
          </figure>
  
           <figure> 
            <div class="image-1">
            <img class="image__img" src="img/learning.png">
					<div class="dropdown">
						<button class="dropbtn">To Learn :</button>
						<div class="dropdown-content">
								<a href="math.php">BASIC MATHS</a>
								<a href="eng.php">ENGLISH</a>
								<a href="evs.php">E.V.S</a>
					  </div>
					  </div>
				  <div class="image__overlay ">
				 	<div class="image__title">LEARNING!</div>  
					</div>
          </div>
		    	</figure> 


          
         </div>
      </section>


      <!------overview------->
     <section class="overview reveal">
      <h1> OVERVIEW </h1>

    <ul class="honeycomb">
      <li class="honeycomb-cell">
         <img class="honeycomb-cell_img" src="img/certified.jfif">
          <div class="honeycomb-cell_title">CERTIFIED LESSONS</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/quiz.jpg">
          <div class="honeycomb-cell_title">WEEKLY QUIZ</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/fun.jpg">
          <div class="honeycomb-cell_title">FUN ACTIVITIES</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/trustt.jpg">
          <div class="honeycomb-cell_title">TRUSTED</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/trophy.jpg">
          <div class="honeycomb-cell_title">QUALIFIED TEAM</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/minions.jpg">
          <div class="honeycomb-cell_title">CINEMATIC 4D VIDEOS</div>
      </li>
      <li class="honeycomb-cell">
          <img class="honeycomb-cell_img" src="img/easy2.png">
          <div class="honeycomb-cell_title">EASY TO USE</div>
      </li>
      <li class="honeycomb-cell honeycomb_Hidden">
      </li>
  </ul>
     </section>

<!----image slider----->
	<div class="swiper mySwiper">
      <div class="swiper-wrapper">

         <div class="swiper-slide">
            <img src="img\1.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\2.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\3.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\4.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\5.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\6.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\7.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\8.jpg">
         </div>
         <div class="swiper-slide">
            <img src="img\9.jpg">
         </div>
	 <div class="swiper-slide">
            <img src="img\10.jpg">
         </div>
	 
	 <div class="swiper-slide">
            <img src="img\11.jpg">
         </div>
	 <div class="swiper-slide">
            <img src="img\12.jpg">
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 2,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        loop: true,
        autoplay: {
         display: 500,
         disableOnInteraction: false,
        }
      });
</script>

<!-----transition effect------>
<script type="text/javascript">
      window.addEventListener('scroll',reveal);

      function reveal(){
         var reveals = document.querySelectorAll('.reveal');

         for(var i = 0; i< reveals.length; i++){
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
               reveals[i].classList.add('active');
            }
            else{
               reveals[i].classList.remove('active');
            }
         }
      }
   </script>
   <br><br>

   
   <!------feedback form------->
<section class="feed">
   <div class="feedback">
            <div class="feedbackbox">
               <h1> FEEDBACK </h1>
               <h2> Please help us grow by giving us feedback..!</h2><br><br>
               
               <a href="https://forms.gle/g1TqraqByEvyZbYi8" class="button" style="font-size: 20px;">Click here</a>
             <!-- <form action="slip18.php" method="post">
               <input type="text" name="uname" placeholder="Enter your name"><br><br>
               <input type="char" name="uemail" placeholder="Enter your email"><br><br>
               <textarea type="text" name="ufeedback" placeholder="Enter feedback"></textarea><br>
          
               <input type="submit" name="submit" value="Submit">
               <input type="reset" name= "reset" value="Reset"><br><br>
         </form> -->
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

    <!-- welcome popup -->
     <div class="box2">
        <div class="info">
         <br><br><br><br><br>
            <h1 style="font-size:60px;" class="welcome"> Heyy dear,  <?php echo $_SESSION['user']; ?></h1>
            <br><br>
            <p style="padding-left:300px; font-size:40px;">Hope you have fun!!!</p>
        </div>
        <div class="welcomeImg">
            <img src="img/popup.gif" alt="">
        </div>
        <button id='pupupBtn'>Next</button>
    </div>


     <script>

         const disableScrolling = () =>{
            window.onscroll = () => window.scrollTo(0,0);
         }

         const enableScrolling = () =>{
            window.onscroll = () => {}
         }

         disableScrolling();
        
        const btn = document.querySelector('#pupupBtn');
        const box2 = document.querySelector('.box2')
        const welcomeImg = document.querySelector('.welcomeImg')
        const info = document.querySelector('.info')
        btn.addEventListener('click', (e)=>{
           
            welcomeImg.style.animation = 'topReverse .5s ease-in-out'
            info.style.animation = 'opacityReverse .5s ease-in-out'
            setTimeout(()=>{
               enableScrolling();
               box2.remove();
            },500)
        })
        console.log(box2)
    </script>     
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>


        </body>
       </html>
