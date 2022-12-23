<?php

$msg = '';
$signin_Err = '';
$_SESSION['logged_in'] = false;
$_SESSION['username'] = '';
$_SESSION['user'] = '';
session_start();
if(isset($_POST["sign_up"])){
  include("conn.php");
  $userFullName=strip_tags($_POST["fullname"]);
  $userName=strip_tags($_POST["username"]);
  $userEmail=strip_tags($_POST["email"]);
  $userPassword=strip_tags($_POST["password"]);
  
  $userFullName=mysqli_real_escape_string($conn, $userFullName);
  $userName=mysqli_real_escape_string($conn, $userName);
  $userEmail=mysqli_real_escape_string($conn, $userEmail);
  $userPassword=mysqli_real_escape_string($conn, $userPassword);
  
  // hasshing password in php default hashing technique
  // $userPassword=password_hash($userPassword,PASSWORD_BCRYPT);
  $userPassword=md5($userPassword);


  // sql query to check whether username is already exist or not
  $sql="select * from users where username='$userName' or email='$userEmail'";
	$result=mysqli_query($conn,$sql);
	if(!$result) {
		die("Data not found! ".mysqli_error($conn));
	}	

	$cnt= mysqli_num_rows($result);
  $result_fetch = mysqli_fetch_assoc($result);

  // if username is not already exist then create account 
	if($cnt == 0){

    // sql query to store details in database
    $sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$userFullName', '$userName', '$userEmail', '$userPassword')";
    if(mysqli_query($conn, $sql)){
        $color = 'green';
        $msg = 'Account Created Successfully';
        $sql = "INSERT INTO `scoreboard` VALUES ('$userName',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);";
        mysqli_query($conn, $sql);
        
    }else{
    $color = 'red';
    $msg = "failure";
    }
	}else if($userName == $result_fetch['username']){
    $color = 'red';
    $msg = 'Username Already Exist';
  }else{
    $color = 'red';
    $msg = 'Email Already Exist';
  }
} 

if(isset($_POST["sign_in"])){
  include("conn.php");
  $signin_userName=strip_tags($_POST["signin_username"]);
  $signin_userPassword=strip_tags($_POST["signin_password"]);
  
  $signin_userName=mysqli_real_escape_string($conn, $signin_userName);
  $signin_userPassword=mysqli_real_escape_string($conn, $signin_userPassword);

  // hasshing password in php default hashing technique
  // $signin_userPassword=password_hash($signin_userPassword,PASSWORD_BCRYPT);
  $signin_userPassword=md5($signin_userPassword);


  $sql="SELECT * FROM users WHERE username='$signin_userName' or email='$signin_userName'";
	$result=mysqli_query($conn,$sql);
  if($result){
    if(mysqli_num_rows($result) ==1) {
      $result_fetch = mysqli_fetch_assoc($result);

      if($signin_userPassword == $result_fetch['password']){
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $result_fetch['username'];
        $_SESSION['user'] = $result_fetch['fullname'];
        header('location: index.php');
      }else{
        
        $signin_Err =  "incorrect password";
      }
    }	else{
      $signin_Err = "username or email dosen't exist";
    }
  }else{
    die("Data not found! ".mysqli_error($conn));
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="js/app.js" defer></script>
  <script type="text/javascript" src="js/signup.js" defer></script>
  <script type="text/javascript" src="js/signin.js" defer></script>
  <link rel="stylesheet" href="css/login.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container ">
    <div class="forms-container">
      <div class="signin-signup">
        
        <!-- this form is for taking login details from user -->
        <form action="login.php" onsubmit="return signinValidation()" id="sign_in_form"  class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="signin_username" class='sign_in_form_input' id='signin_username' placeholder="Username or Email" />
          </div>
          <p id="signin_username_err" class="err"></p>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signin_password" class='sign_in_form_input' id='signin_password' placeholder="Password" autocomplete="new-password" />
          </div>
          <p id="signin_password_err" class="err"></p>
          <p id="signin_common_err" class="err"><?php echo $signin_Err; ?></p>
          <input type="submit" value="Login" name="sign_in" class="btn solid" />
        </form>


        <!-- this form is for taking registration details from user -->
        <form action="login.php" onsubmit="return signupValidation()" id="sign_up_form" class="sign-up-form"
          method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="fullname" class="sign_up_form_input" id="fullname" placeholder="Full Name" />
          </div>
          <p id="fullname_err" class="err"></p>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" class="sign_up_form_input" id="username" placeholder="Username" />
          </div>
          <p id="username_err" class="err"></p>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" class="sign_up_form_input" id="email" placeholder="Email" />
          </div>
          <p id="email_err" class="err"></p>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="sign_up_form_input" id="password" placeholder="Password"
              autocomplete="new-password" />
          </div>
          <p id="password_err" class="err"></p>
          <p id="common_err" class="err"><?php echo $msg; ?></p>
          <input type="submit" class="btn" id='sign_up' name="sign_up" value="Sign up" />
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Enter your credentials and you will be through!!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Glad to know that you are one of us!! You always make us proud!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

</body>

</html>