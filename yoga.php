<?php 
session_start();

$name = '';
$username = '';
if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
    $name = $_SESSION['user'];

    if(isset($_POST['score'])){
   include('conn.php');
   $videoName = $_POST['videoName'];
   $score = $_POST['score'];
    $username = $_SESSION['username'];
   // $username = 'vcvcvc';

   $sql = "SELECT * FROM `scoreboard` WHERE username = '$username'";
   $result = mysqli_query($conn, $sql);

   if($result){
      // echo 'query run';
      
      $result_fetch = mysqli_fetch_assoc($result);
      // $score += $result_fetch['score'];
      $sql = "UPDATE `scoreboard` SET `$videoName`='$score' WHERE username = '$username';
      ";
      // UPDATE `scoreboard` SET `nani teri morni`='20',`clap your hands`='10',`jack and jill`='10' WHERE username = 'vcvcvc';

      $result = mysqli_query($conn, $sql);
      if(!$result){
         echo "can't submit2";
      } 
   }else{
      echo 'query did not run';
   }
   
   header('location: yoga.php');
}
}else{
   header('location: login.php');
   exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>	
   <meta charset="UTF-8">
   <script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="HF1.css">
   
   <div class="header ">
    
		     <!--navigation bar -->
             <div class="nav">
            <div class="logo">
				    <img src="img/logo.png" alt="">
            </div>
            <div class="nav-menu">
				<ul>
					<li><a class="active" href="index.php"><i class="fa-solid fa-house">HOME</i></a></li>
					<li><a href="About us.php"><i class="fa-solid fa-people-group"></i>ABOUT</a></li>
					<li><a href="score.php"><i class="fa-regular fa-star-half-stroke"></i>SCORE</a></li>
					<li><a href="blog.php"><i class="fa-solid fa-blog"></i>BLOG</a></li>
					<li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>CONTACT</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-user">LOGOUT</i></a></li>
				  </ul>
           </div>
           </div>
</div>
		<!--nav bar end -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="videoWatch.js" defer></script>

</head>
<style>
.background{
background: rgb(204,200,255);
background: linear-gradient(90deg, rgba(204,200,255,0.5829529494382022) 46%, rgba(255,0,247,0.4509304775280899) 100%);
}
</style>
<body>
	<div class="background">
<div class="back">
<br><br>
	
	<h3 style="font-size:50px; text-align:center; font-family:'DynaPuff', cursive;">ACTIVITIES </h3>	
	<h2 style="font-size:50px; text-align:center; font-family:'DynaPuff', cursive;"><span>YOGA  </span>  </h2>
</div>
	
<div class="container">
<div class="main-video-container">
         <video src="Yoga/yoga1.mp4" id="main-video" controls class="main-video">
         </video>
         <h3 class="main-vid-title" id="breathing-exercise">breathing exercise</h3>
         <iframe name='frame' style='display:none;'></iframe>
         <form action="yoga.php" method='post' target='frame' style='display:none'>
            <input type="text" name='videoName' id='videoName' value='breathing exercise'>
            <input type="text" name='score' id='score' value='20'>
         </form>
      </div>

      <div class="video-list-container">

         <div class="list active">
            <video src="Yoga/yoga1.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="breathing-exercise">breathing exercise</h3>
         </div>

         <div class="list">
            <video src="Yoga/yoga2.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="suryanamaskar">suryanamaskar</h3>
         </div>

         <div class="list">
            <video src="Yoga/yoga3.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="all-standing-postures">all standing postures</h3>
         </div>

         <div class="list">
            <video src="Yoga/yoga4.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="all-sitting-postures">all sitting postures</h3>
         </div>

         <div class="list">
            <video src="Yoga/yoga5.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="all-lying-down-postures">all lying down postures</h3>
         </div>
         
         <h4 class="list-title"><button><a href="drawing.php">Previous </a></button>  <button><a href="math.php">Next</a></button></h4>
		 
      </div>
		
     
   </div>


</div>


<!-- custom js file link  -->
<script src="script.js"></script>
</div>
</body>
</html>