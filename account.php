<!DOCTYPE html>
<html>
	<head>
		<title>ACCOUNT TUTO</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="account2.css">
	</head>

	<body>
        <div class="log">
            <img src="avatar.png" class="avatar">
            <h1>Your informations</h1>
                <?php
                    if (isset($_POST['user']) AND isset($_POST['password']))
                    {
                        $user=($_POST['user']);
                        $password=($_POST['password']);
                        echo '<p>Username: <span>'.htmlspecialchars($user).'</span> </p>';
                        echo "<br>";
                        echo '<p>Password: <span>'.htmlspecialchars($password).'</span> </p>';
                    }
                    else
                    {
                        echo "<div class='failure'>We don't receive an Username or a password!<br> Please fill the missing area!</div>";
                    }
                ?>
                <a href="account.html"><button>Logout</button></a>
        </div>
		
	</body>

</html>