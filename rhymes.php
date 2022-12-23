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

      $result = mysqli_query($conn, $sql);
      if(!$result){
         echo "can't submit2";
      } 
   }else{
      echo 'query did not run';
   }
   
   header('location: rhymes.php');
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


   <div class="header">

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

   <title>Fun learning</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="videoWatch.js" defer></script>

</head>
<style>
   .background {
      background: rgb(255, 200, 239);
      background: radial-gradient(circle, rgba(255, 200, 239, 0.5829529494382022) 33%, rgba(237, 255, 0, 0.3076720505617978) 100%);
   }
</style>

<body>
   <div class="background">
      <div class="back">
         <br><br>
         <h3 style="text-align:center; font-size: 50px; font-family:'DynaPuff', cursive;"> FUN LEARNING </h3>
         <h5 style="text-align:center; font-size: 50px; font-family:'DynaPuff', cursive;"><span>RHYMES </span> </h5>
      </div>

      <div class="container">
         <div class="main-video-container">
            <video src="rhymes/rhymes1.mp4" id="main-video" controls class="main-video">
            </video>
            <h3 class="main-vid-title" id="humpty-dumpty">humpty dumpty</h3>
            <iframe name='frame' style='display:none;'></iframe>
            <form action="rhymes.php" method='post' target='frame' style='display:none'>
               <input type="text" name='videoName' id='videoName' value='humpty dumpty'>
               <input type="text" name='score' id='score' value='20'>
            </form>
         </div>

         <div class="video-list-container">

            <div class="list active">
               <video src="rhymes/rhymes1.mp4" class="list-video">
               </video>
               <h3 class="list-title" id="humpty-dumpty">humpty dumpty</h3>
            </div>

            <div class="list">
               <video src="rhymes/rhymes2.mp4" class="list-video">
               </video>
               <h3 class="list-title" id="itsy-bitsy-spider">itsy bitsy spider</h3>
            </div>

            <div class="list">
               <video src="rhymes/rhymes3.mp4" class="list-video">
               </video>
               <h3 class="list-title" id="twinkle-twinkle-little-star">twinkle twinkle little star</h3>
            </div>

            <div class="list">
               <h4 class="list-title"><button><a href="poem.php">Previous</a></button> <button><a href="dance.php"> Next
                     </a></button></h4>
            </div>
         </div>
      </div>



      <!-- custom js file link  -->
      <script src="script.js"></script>
   </div>
</body>

</html>


<!-- change names of videos by removing space from name -->