<?php
    session_start();
    # Check if user is already logged in
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        header('location: store.php');
        exit();
    } else {
    	header('location: login.php');
    	exit();
    }
?>