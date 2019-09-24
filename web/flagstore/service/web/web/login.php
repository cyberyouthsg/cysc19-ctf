<?php
    session_start();
    # Check if user is already logged in
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        header('location: store.php');
        exit();
    }
    else {
        include("config.php");
        # Check Connection
        if($db->connect_error) {
            # DB connection error
            exit('Error connecting to database'); 
        }

        $db->set_charset("utf8mb4");
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            # Execute Prepared Statement
            $pstmt = $db->prepare("SELECT * FROM login_table WHERE username = ? AND password = ?");
            $pstmt->bind_param("ss", $_POST['username'], $_POST['password']);
            $pstmt->execute();
            # Get login credentials
            $result = $pstmt->get_result();
            # Check if there is any matching login credential
            if($result->num_rows === 0) {
                $error = 'Invalid login credential';
            }
            else {
                $_SESSION['login_user'] = $_POST['username'];
                $_SESSION['login'] = true;
                header("location: store.php");
            }
            $pstmt->close();
        }   
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>

<body style="background-color:#F8F8F8;">
    <div class="container" style="width:50%; border:3px solid black; padding:2% 4% 3% 4%; height:50%; position:absolute; top:25%; left:25%">
        <h2>Log in</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
            <!-- TODO:
            Create admin account to login
            For now use guest:securepwd 
            -->
                <label for="username">Username:</label>
                <input class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <?php 
                if (isset($error)) {
                    echo("<br><span><font color='red'>$error</font></span>"); 
                }
            ?>  
        </form>
    </div>
</body>

</html>