<?php
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="styles/style.css">
	</head>
		<body>
		<?php
		if(!isset($_SESSION['uname'])): header("location: logout.php");
		else:
		endif
		?>
			<div class="container">
			<!--header start-->
			<header>
				<div class="header-first">
					<h1> <center> Gym Management System </center></h1>
				</div>
				<div class="header-last">
				<a href="dashboard.php">Dashboard</a>
				<a href="memberList.php">Member List</a>
				<a href="trainerList.php">Trainer List</a>
				<a href="equipmentList.php">Equipment List</a>
				<a href="packageDetails.php">Package details</a>
				<a href="paymentDetails.php">Payment details</a>
				<a href="logout.php">Logout</a></h3>
				</div>
			</header>
			<!--header end-->
		</body>
</html>