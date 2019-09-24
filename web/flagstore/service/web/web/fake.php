<?php
    session_start();
    # Session Protect a page so that users cannot enter this page without logging in first
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header('location: login.php');
        exit();
    }

    # Redirect back to store page
    header( "Refresh:3; url=store.php");
?>

<html>
	<head>
		<title>Fake Flag Page</title>
	</head>
	<body>
		<p>Just Kidding!</p><br/><br/>
		<p>Redirecting you back to the store now...</p>
	</body>
</html>
