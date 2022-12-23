<?php
session_start();

$name = '';
$username = '';
if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
    $name = $_SESSION['user'];

if(isset($_POST['quizScore'])){
   include('conn.php');
   $score = $_POST['quizScore'];
   $username = $_SESSION['username'];
   echo $score;

//    $username = 'vcvcvc';

   $sql = "SELECT * FROM `scoreboard` WHERE username = '$username'";
   $result = mysqli_query($conn, $sql);

   if($result){

    $sql = "UPDATE `scoreboard` SET `quiz score`='$score' WHERE username = '$username';
      ";

      $result = mysqli_query($conn, $sql);
      if(!$result){
         echo "can't submit2";
      } 
   }else{
      echo 'query did not run';
   }
   
   header('location: quiz.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Quiz | Kidoopia</title>
    <link rel="stylesheet" href="quizstyle.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body style="background-color:#d082d3;"> 
    
    
    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>30 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">General Quiz</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <a href="index.php"><button class="quit">Back to Home</button></a>
        </div>


        <iframe name='frame' style='display:none;'></iframe>
            <form action="quiz.php" id="quizScoreForm" method='post' target='frame' style='display:none'>
               <input type="text" name='quizScore' id='quizScore' value='0'>
            </form>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="questions.js"></script>


    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="quizscript.js"></script>
    

</body>
</html>