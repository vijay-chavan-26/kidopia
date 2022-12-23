<?php
session_start();
$name = '';
$username = '';
echo "<body style='background-color: #e6faff'>";

if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
    $name = $_SESSION['user'];
    $username = $_SESSION['username'];
    $sql= "SELECT * from `scoreboard` where `username`='$username'";
    include ('conn.php');
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "can't submit2";
    }else
    {
          
        
         $result_fetch = mysqli_fetch_assoc($result);

         $poem1 = $result_fetch['chanda mama'];
         $poem2 = $result_fetch['lakdi ki kathi'];
         $poem3 = $result_fetch['nani teri morni'];
         $poem4 = $result_fetch['clap your hands'];
         $poem5 = $result_fetch['jack and jill'];

         //echo $poem1; 
        //  echo $poem2;
        //  echo $poem3;
        //  echo $poem4;
        //  echo $poem5; 
        //  echo  "<br>";
         $tot_poem=$poem1+$poem2+$poem3+$poem4+$poem5;
        //  echo $tot_poem;
        echo "<br>";
        $rhyme1= $result_fetch['humpty dumpty'];
        $rhyme2= $result_fetch['itsy bitsy spider'];
        $rhyme3= $result_fetch['twinkle twinkle little star'];
         
        // echo $rhyme1;
        // echo $rhyme2;
        // echo $rhyme3;
        $tot_rhyme=$rhyme1+$rhyme2+$rhyme3;
        // echo  "<br>";

        $dance1=$result_fetch['dance part 1'];
        $dance2=$result_fetch['dance part 2'];
        $dance3=$result_fetch['dance part 3'];
        $dance4=$result_fetch['dance part 4'];
        $dance5=$result_fetch['dance part 5'];
//          echo $dance1;          
//          echo $dance2;
//          echo $dance3;
//          echo $dance4;
//          echo $dance5;
        $tot_dance=$dance1+$dance2+$dance3+$dance4+$dance5;
// echo "<br>";
         $music1=$result_fetch['sargam'];
         $music2=$result_fetch['komal and teevra'];
         $music3=$result_fetch['teental'];
         $music4=$result_fetch['ektal'];
         $music5=$result_fetch['alankar'];

        //  echo $music1;
        //  echo $music2;
        //  echo $music3;
        //  echo $music4;
        //  echo $music5;  echo "<br>";

        $tot_music=$music1+$music2+$music3+$music4+$music5;

        $craft1=$result_fetch['origami dog cat fox fish mouse'];
        $craft2=$result_fetch['envelope making'];
        $craft3=$result_fetch['paper airplane'];
        $craft4=$result_fetch['origami fish'];
        $craft5=$result_fetch['paper boat'];

        //  echo $craft1;
        //  echo $craft2;
        //  echo $craft3;
        //  echo $craft4;
        //  echo $craft5; echo "<br>";

        $tot_craft=$craft1+$craft2+$craft3+$craft4+$craft5;

         $draw1=$result_fetch['house shapes'];
         $draw2=$result_fetch['simple nature'];
         $draw3=$result_fetch['birthday cake'];
         $draw4=$result_fetch['catepillar'];
         $draw5=$result_fetch['fish'];

        //  echo $draw1;
        //  echo $draw2;
        //  echo $draw3;
        //  echo $draw4;
        //  echo $draw5; echo "<br>";

        $tot_draw=$draw1+$draw2+$draw3+$draw4+$draw5;

         $yoga1=$result_fetch['breathing exercise'];
         $yoga2=$result_fetch['suryanamaskar'];
         $yoga3=$result_fetch['all standing postures'];
         $yoga4=$result_fetch['all sitting postures'];
         $yoga5=$result_fetch['all lying down postures'];

        //  echo $yoga1;
        //  echo $yoga2;
        //  echo $yoga3;
        //  echo $yoga4;
        //  echo $yoga5;echo "<br>";

        $tot_yoga=$yoga1+$yoga2+$yoga3+$yoga4+$yoga5;

        $math1=$result_fetch['counting of numbers'];
        $math2=$result_fetch['square triangle circle'];
        $math3=$result_fetch['even and odd numbers'];
        $math4=$result_fetch['addition and subtraction'];
        $math5=$result_fetch['unit places in maths'];

        // echo $math1;
        // echo $math2;
        // echo $math3;
        // echo $math4;
        // echo $math5;  echo "<br>";
       
        $tot_math=$math1+$math2+$math3+$math4+$math5; 

        $eng1=$result_fetch['alphabets'];
        $eng2=$result_fetch['different types of colors'];
        $eng3=$result_fetch['seasons in year'];
        $eng4=$result_fetch['spellings of numbers'];
        $eng5=$result_fetch['rhyming words'];
        

        // echo $eng1;
        // echo $eng2;
        // echo $eng3;
        // echo $eng4;
        // echo $eng5;
        // echo $eng6;    echo "<br>";
 
         $tot_eng=$eng1+$eng2+$eng3+$eng4+$eng5;

        $evs1=$result_fetch['evs part 1'];
        $evs2=$result_fetch['evs part 2'];
        $evs3=$result_fetch['evs part 3'];
        $evs4=$result_fetch['evs part 4'];
        $evs5=$result_fetch['evs part 5'];

        // echo $evs1;
        // echo $evs2;
        // echo $evs3;
        // echo $evs4;
        // echo $evs5;

        $tot_evs=$evs1+$evs2+$evs3+$evs4+$evs5;

        $quiz = $result_fetch['quiz score'];

        $total=$quiz+$tot_poem+$tot_rhyme+$tot_dance+$tot_music+$tot_craft+$tot_draw+$tot_yoga+$tot_math+$tot_evs+$tot_eng+10;
     
        //  echo  "<br>";

    //     echo "<tr>";
    //       echo "<td> ".$tot_poem. "</td>";
        
    //    echo "</tr>";
    }

}else{
    header('location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCOREBOARD</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/5658d0501f.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
       <li><a href="index.php"><i class="fa-solid fa-house">HOME</i></a></li>
       <li><a href="About us.php"><i class="fa-solid fa-people-group"></i>ABOUT</a></li>
       <li><a class="active" href="score.php"><i class="fa-regular fa-star-half-stroke"></i>SCORE</a></li>
       <li><a href="blog.php"><i class="fa-solid fa-blog"></i>BLOG</a></li>
       <li><a href="contactus.html"><i class="fa-solid fa-address-book"></i>CONTACT</a></li>
       <li><a href="logout.php"><i class="fa-solid fa-user">LOGOUT</i></a></li>
       </ul>
        </div>
        </div>
</div>
</head>
<body>  
  
<style>
 .container h1{
      margin-left:250px;
      color:#ff5050;
  } 
  .container h2{
      margin-left:70px;
      
  } 

  .success{
    font-size:20px;
  }
  .danger{
    font-size:20px;
  }
  .info{
    font-size:20px;
  }
  .warning{
    font-size:20px;
  }
  .active{
    font-size:20px;
  }
  table, td, th {
  border: 1px solid;
  border-collapse: collapse;
}
table{
  border:3px solid;
}
.cert{
  font-size:30px;
  margin-left:650px;
  background-color:#00b8e6; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.msg{
  text-align:center;
  font-size: 30px;
}
.cont{
  text-align:center;
  font-size: 30px;
}
.err{
  text-align:center;
  font-size: 30px;
}
</style>

<div class="container">
  <br><br>
  <h1>Welcome to the scoreboard!!</h1>
  <h2>Hello dear <?php echo $_SESSION['user'] ;?>, hearty congratulations for your achievement!!</h2>
  <table class="table">
    <thead>
      <tr class='active' style=' font-size:20px;'>
        <th>Category</th>
        <th>Name</th>
        <th>Marks</th>
      </tr>
    </thead>
    <tbody>
    <!--success danger info warning active-->
    <?php

      //poems
      echo "<tr class='success' >";
        echo "<td>"."POEM"."</td>";
        echo "<td>"."Chanda Mama door ke"."</td>";
        echo "<td>".$poem1."</td>";
      echo "</tr>"  ; 

      echo "<tr class='success'>";
        echo "<td>"."</td>";
        echo "<td>"."Lakdi ki kathi"."</td>";
        echo "<td>".$poem2."</td>";
      echo "</tr>"  ; 

      echo "<tr class='success'>";
        echo "<td>"."</td>";
        echo "<td>"."Nani teri morni"."</td>";
        echo "<td>".$poem3."</td>";
      echo "</tr>"  ; 

      echo "<tr class='success'>";
        echo "<td>"."</td>";
        echo "<td>"."Clap your hands"."</td>";
        echo "<td>".$poem4."</td>";
      echo "</tr>"  ; 

      echo "<tr class='success'>";
        echo "<td>"."</td>";
        echo "<td>"."Jack and jill"."</td>";
        echo "<td>".$poem5."</td>";
      echo "</tr>"  ; 

      echo "<tr class='danger' style='border: 2px solid;'>";
        echo "<td>"."TOTAL"."</td>";
        echo "<td>"."</td>";
        echo "<td>".$tot_poem."</td>";
      echo "</tr>"  ; 

     //rhymes
       
      echo "<tr class='info'>";
        echo "<td>"."RHYMES"."</td>";
        echo "<td>"."Humpty dumpty"."</td>";
        echo "<td>".$rhyme1."</td>";
      echo "</tr>"  ; 

      echo "<tr class='info'>";
        echo "<td>"."</td>";
        echo "<td>"."Itsy bitsy spider"."</td>";
        echo "<td>".$rhyme2."</td>";
      echo "</tr>"  ; 

      echo "<tr class='info'>";
      echo "<td>"."</td>";
      echo "<td>"."Twinkle Twinkle little star"."</td>";
      echo "<td>".$rhyme3."</td>";
    echo "</tr>"  ; 
        
      echo "<tr class='danger' style='border: 2px solid;'>";
        echo "<td>"."TOTAL"."</td>";
        echo "<td>"."</td>";
        echo "<td>".$tot_rhyme."</td>";
     echo "</tr>"  ; 
      

     //dance

     echo "<tr class='warning'>";
       echo "<td>"."DANCE"."</td>";
       echo "<td>"."Dance part 1"."</td>";
       echo "<td>".$dance1."</td>";
   echo "</tr>"  ; 
    echo "<tr class='warning'>";
       echo "<td>"."</td>";
       echo "<td>"."Dance part 2"."</td>";
       echo "<td>".$dance2."</td>";
   echo "</tr>"  ; 

   echo "<tr class='warning'>";
       echo "<td>"."</td>";
       echo "<td>"."Dance part 3"."</td>";
       echo "<td>".$dance3."</td>";
   echo "</tr>"  ; 

   echo "<tr class='warning'>";
       echo "<td>"."</td>";
       echo "<td>"."Dance part 4"."</td>";
       echo "<td>".$dance4."</td>";
   echo "</tr>"  ; 

   echo "<tr class='warning'>";
       echo "<td>"."</td>";
       echo "<td>"."Dance part 5"."</td>";
       echo "<td>".$dance5."</td>";
   echo "</tr>"  ; 

   echo "<tr class='danger' style='border: 2px solid;'>";
       echo "<td>"."TOTAL"."</td>";
       echo "<td>"."</td>";
       echo "<td>".$tot_dance."</td>";
   echo "</tr>"  ; 

     //music 

   echo "<tr class='active'>";
   echo "<td>"."MUSIC"."</td>";
   echo "<td>"."Sargam"."</td>";
   echo "<td>".$music1."</td>";
echo "</tr>"  ; 
echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Komal and teevra"."</td>";
   echo "<td>".$music2."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Teental"."</td>";
   echo "<td>".$music3."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Ektal"."</td>";
   echo "<td>".$music4."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Alankar"."</td>";
   echo "<td>".$music5."</td>";
echo "</tr>"  ; 
   
echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_music."</td>";
echo "</tr>"  ; 

//craft

echo "<tr class='success'>";
   echo "<td>"."CRAFT"."</td>";
   echo "<td>"."Origami dog cat mouse"."</td>";
   echo "<td>".$craft1."</td>";
echo "</tr>"  ; 
echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."Envelope making "."</td>";
   echo "<td>".$craft2."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."Paper Airplane"."</td>";
   echo "<td>".$craft3."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."Origami fish"."</td>";
   echo "<td>".$craft4."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."Paper boat"."</td>";
   echo "<td>".$craft5."</td>";
echo "</tr>"  ; 
   
echo "<tr class='danger'style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_craft."</td>";
echo "</tr>"  ; 

//drawing

echo "<tr class='warning'>";
   echo "<td>"."DRAWING"."</td>";
   echo "<td>"."House shapes"."</td>";
   echo "<td>".$draw1."</td>";
echo "</tr>"  ; 
echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Simple nature"."</td>";
   echo "<td>".$draw2."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Birthday cake"."</td>";
   echo "<td>".$draw3."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Caterpillar"."</td>";
   echo "<td>".$draw4."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Fish"."</td>";
   echo "<td>".$draw5."</td>";
echo "</tr>"  ; 
   
echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_draw."</td>";
echo "</tr>"  ; 

//Yoga

echo "<tr class='info'>";
   echo "<td>"."YOGA"."</td>";
   echo "<td>"."Breathing exercises"."</td>";
   echo "<td>".$yoga1."</td>";
echo "</tr>"  ; 
echo "<tr class='info'>";
   echo "<td>"."</td>";
   echo "<td>"."Simple nature"."</td>";
   echo "<td>".$yoga2."</td>";
echo "</tr>"  ; 

echo "<tr class='info'>";
   echo "<td>"."</td>";
   echo "<td>"."Birthday cake"."</td>";
   echo "<td>".$yoga3."</td>";
echo "</tr>"  ; 

echo "<tr class='info'>";
   echo "<td>"."</td>";
   echo "<td>"."Caterpillar"."</td>";
   echo "<td>".$yoga4."</td>";
echo "</tr>"  ; 

echo "<tr class='info'>";
   echo "<td>"."</td>";
   echo "<td>"."Fish"."</td>";
   echo "<td>".$yoga5."</td>";
echo "</tr>"  ; 
   
echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_yoga."</td>";
echo "</tr>"  ; 

//maths

echo "<tr class='active'>";
   echo "<td>"."MATHS"."</td>";
   echo "<td>"."Counting of numbers"."</td>";
   echo "<td>".$math1."</td>";
echo "</tr>"  ; 
echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Square triangle circle"."</td>";
   echo "<td>".$math2."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Even and odd"."</td>";
   echo "<td>".$math3."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Addition and subtraction"."</td>";
   echo "<td>".$math4."</td>";
echo "</tr>"  ; 

echo "<tr class='active'>";
   echo "<td>"."</td>";
   echo "<td>"."Unit places"."</td>";
   echo "<td>".$math5."</td>";
echo "</tr>"  ; 
   
echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_math."</td>";
echo "</tr>"  ; 

// english
echo "<tr class='warning'>";
   echo "<td>"."ENGLISH"."</td>";
   echo "<td>"."Alphabets"."</td>";
   echo "<td>".$eng1."</td>";
echo "</tr>"  ; 
echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Different types of colours"."</td>";
   echo "<td>".$eng2."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Seasons in year"."</td>";
   echo "<td>".$eng3."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Spellings of numbers"."</td>";
   echo "<td>".$eng4."</td>";
echo "</tr>"  ; 

echo "<tr class='warning'>";
   echo "<td>"."</td>";
   echo "<td>"."Rhyming words"."</td>";
   echo "<td>".$eng5."</td>";
echo "</tr>"  ; 

echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_eng."</td>";
echo "</tr>"  ; 

//EVS
echo "<tr class='success'>";
   echo "<td>"."EVS"."</td>";
   echo "<td>"."EVS Part 1"."</td>";
   echo "<td>".$evs1."</td>";
echo "</tr>"  ; 
echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."EVS Part 2"."</td>";
   echo "<td>".$evs2."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."EVS Part 3"."</td>";
   echo "<td>".$evs3."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."EVS Part 4"."</td>";
   echo "<td>".$evs4."</td>";
echo "</tr>"  ; 

echo "<tr class='success'>";
   echo "<td>"."</td>";
   echo "<td>"."EVS Part 5"."</td>";
   echo "<td>".$evs5."</td>";
echo "</tr>"  ; 

echo "<tr class='danger' style='border: 2px solid;'>";
    echo "<td>"."TOTAL"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$tot_evs."</td>";
echo "</tr>"  ; 


echo "<tr class='info' style='border: 2px solid;'>";
    echo "<td>"."QUIZ SCORE"."</td>";
    echo "<td>"."</td>";
    echo "<td>".$quiz."</td>";
echo "</tr>"  ; 
  
echo "<tr class='info' style='border: 2px solid; font-size:25px; '>";
    echo "<td><b>"."TOTAL MARKS"."</b></td>";
    echo "<td>"."</td>";
    echo "<td><b>".$total."</b></td>";
echo "</tr>"  ; 

?>
<br><br><br>


      
    </tbody>
  </table>

</div>
<?php

print("<h1 class='cont'>Get your certificate!</h1>");
if($total>=700){
        
  // echo "Get certificate";
  print("<h1 class='msg'>Hurray!! Congratulations! You earned the certificate!</h1>");
  echo "<br>";
  print("<form action='certificate.php' method='post'>
  <input type='submit' value='get certificate' name='certificate' class='cert'>
</form>");

} else{
  echo "<br>";
  print("<h2 class='err'>Oops sorry! You need to earn at least 700 marks to get the certificate!!</h2>");
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<h4>.</h4>
</body>
</html>

