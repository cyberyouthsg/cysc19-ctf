<?php
    session_start();
    # Session Protect a page so that users cannot enter this page without logging in first
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header('location: login.php');
        exit();
    }

	# Check if there is parameters
	if(count($_GET)) {
		if(isset($_GET['item'])) {
			switch($_GET['item']) {
				case "free_flag":
					echo nl2br("CYS{this_flag_is_fake_do_not_bother_submitting}\r\n\r\n\r\n or is it...?");
					break;
				case "free_flag_2":
					header( "Refresh:3; url=fake.php");
					echo("Congratulations, You found the flag!<br/><br/> Hold on, redirecting you to the flag now!");
					break;
				case "free_flag_3":
					echo nl2br("If I had a dollar for every click on this, I would be a millionaire...\r\n\r\n\r\n Probably");
					break;
				case "hidden_real_flag":
					if(isset($_GET['user'])) {
						if($_GET['user'] == 'admin') {
							echo ("CYS{f1ag_570r3_b357_570r3}");
						}
						else {
							echo('Nothing to see here. Move along');
						}
					} else {
							echo('Nothing to see here. Move along');
					}
					break;
				default:
					echo("Ooops, I do not know what item you are looking for");
			}
		}
		else {
			echo("Did you input the correct parameters?");
		}
	}
?>

<html>
	<head>
		<title>Purchase Processing Page</title>
	</head>
	<body>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
		<!-- Finally done with the Purchase Functionality.
			 They will never know where I hid the real flag >:)
			 Psst, Just in case I don't forget it myself,
			 the real flag is called hidden_real_flag and only I, the admin, can access it :)
		-->
	</body>
</html>
