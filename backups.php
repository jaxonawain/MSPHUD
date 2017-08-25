<?php
    include('session.php');
?>
<html>
	<head> 
		<title>Decypher Backups</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>

	<body>
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
               <b id="logout"><a href="logout.php">Log Out</a></b>
        </body>
</html>