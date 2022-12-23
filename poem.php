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
   // $username = $_SESSION['username'];
   $username = $_SESSION['username'];

    //$username = 'acacac';
    echo $username .'username';

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
   
   header('location: poem.php');
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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta charset="UTF-8">
   <script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="HF1.css">
    <link rel="stylesheet" href="css/style.css">
   <script src="videoWatch.js" defer></script>

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

   <!-- custom css file link  -->
   

</head>
<style>
   .background {
      background: rgb(255, 200, 239);
      background: radial-gradient(circle, rgba(255, 400, 239, 0.5829529494382022) 33%, rgba(237, 500, 0, 0.3076720505617978) 100%);
   }
</style>

<body>
   <br><br>
   <h3 style="font-size:50px; text-align:center; font-family:'DynaPuff', cursive;"> FUN LEARNING </h3>
   <h2 style="font-size:50px; text-align:center; font-family:'DynaPuff', cursive;"> POEM </h2>
   <div class="container">
      <div class="main-video-container">
         <video src="poems/Poem1.mp4" id="main-video" controls class="main-video">
         </video>
         <h3 class="main-vid-title" id="chanda-mama">chanda mama</h3>
         <iframe name='frame' style='display:none;'></iframe>
         <form action="poem.php" method='post' target='frame' style='display:none'>
            <input type="text" name='videoName' id='videoName' value='chanda mama'>
            <input type="text" name='score' id='score' value='20'>
         </form>
      </div>

      <div class="video-list-container">

         <div class="list active">
            <video src="poems/Poem1.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="chanda-mama">chanda mama</h3>
         </div>

         <div class="list">
            <video src="poems/Poem2.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="clap-your-hands">clap your hands</h3>
         </div>

         <div class="list">
            <video src="poems/Poem3.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="jack-and-jill">jack and jill</h3>
         </div>

         <div class="list">
            <video src="poems/Poem4.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="lakdi-ki-kathi">lakdi ki kathi</h3>
         </div>

         <div class="list">
            <video src="poems/Poem5.mp4" class="list-video">
            </video>
            <h3 class="list-title" id="nani-teri-morni">nani teri morni</h3>
         </div>
         <div class="list">
         <h4 class="list-title">
           <a href="index.php"><button type="submit">Back to Home00</a>
           <a href="rhymes.php"><button type="submit">Watch RHYMES</a>

         </button>
      </h4>
         </div>

      </div>
   </div>

   <!-- custom js file link  -->
   <script src="script.js"></script>
</body>

</html>


<!-- for creating a table at the time of account created -->
<!-- create column name as videos name and assign marks in front of them  -->
<!-- INSERT INTO `scoreboard`(`usename`, `nani teri morni`, `clap your hands`, `jack and jill`) VALUES ('vcvcvc', 0, 0 , 0); -->
<!-- INSERT INTO `scoreboard`(`username`) VALUES ('aaaaaa'); -->
