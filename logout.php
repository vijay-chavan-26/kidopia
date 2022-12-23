<?php
    session_start();

    if($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
        session_unset();
        session_destroy();
        $welcomePopup = '';
    }
    header('location: login.php');
    exit;
?>