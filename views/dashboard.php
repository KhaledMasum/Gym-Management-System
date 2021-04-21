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
		<!--container start-->
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
			
			<hr>
			
			<!--Main start-->
			<main>
				<div class="content">
					<div class="left">
						<a href="memberReg.php">Member Registration</a>
						<img src="../images/user.png" class="user-img">
					</div>
					<div class="middle">
						<a href="trainerReg.php">Trainer Registration</a>	
						<img src="../images/trainer.jpg" class="trainer-img">
					</div>
					<div class="right">						
						<a href="equipmentReg.php">Equipment Registration</a>	
						<img src="../images/equipment.jpg" class="equipment-img">
					</div>
				</div>
			</main>
			<!--Main end-->
			
			<hr>
			
			<!--footer start-->
			<footer class="footer">
				<!--<p>Copyright &copy; Khaled Masum 2020</p>-->
			</footer>
			<!--footer end-->
	  </div>
	  <!--container ends-->
  </body>
</html>