<?php
    include('session.php');
?>
<html>
	<head> 
		<title>Decypher HUD</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>

	<body>
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
               <b id="logout"><a href="logout.php">Log Out</a></b>
		<p class="header">
			Decypher Technologies 
		</p>	

		<div id="body">
			<div class="rowtext"  onclick="location.href='backups.php';" style="cursor:pointer;">
				<p class="menuheader">Backups</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Antivirus</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Patch Health</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Outages</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Alerts</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Traffic Flow</p>
			</div>
			<div class="rowtext" onclick="location.href='http://www.google.com';" style="cursor:pointer;">
				<p class="menuheader">Unassigned Tickets</p>
			</div>
		</div>

	</body>
</html>