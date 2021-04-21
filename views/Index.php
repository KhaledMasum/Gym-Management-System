<html>
	<head>
		<h1 style="color:#49E8E2">GYM Management System</h1>
		<link rel="stylesheet" href="styles/style.css">
	</head>
	<body style="background:url('../images/4.jpg'); background-size: cover;">
		<div class="container-index">
			<div class="first">
				<img src="../images/cardback.jpg" class="card-img-top">
			</div>

			
			<div class="last">           			
				<h3>Admin Login</h3>
				<form action="../controllers/indexController.php" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Enter username"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter password"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="login" value="Log in" class="button">
						</td>
					</tr>
				</table>
				</form>						
			</div>
		</div>
	</body>
</html>