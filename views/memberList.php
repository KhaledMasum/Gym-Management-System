
<html>
	<head>
		<link rel="stylesheet" href="styles/style.css">
	</head>
	<body>

		<!--Container start-->
		<div class="container">	
		
	<header>
		<?php
			include_once 'header.php';
		?>
	</header>
<main>
	<div class="main">
	<!--Search start-->
	<div class="search-part">
		<form action="" method="post">			
			<input type="text" name="search" placeholder="Search.." class="srcfield">
			<input type="submit" name="searchbtn" class="srcbtn" value="Search">
		</form>
	</div>
	<!--Search end-->
	
	<!--table start-->
	<div class="content-table">
	<table>
	  <thead>
		<tr>
			<th>First Name:</th>
			<th>Last Name:</th>
			<th>Member ID:</th>
			<th>Phone:</th>
			<th>E-mail:</th>
			<th>Gender:</th>
			<th>Address:</th>			
			<th>Joining Date:</th>
			<th>Plan:</th>
			<th>Trainer:</th>
		</tr>
	  </thead>
	  <tbody>
			<?php
				include_once '../models/database.php';
			    if(isset($_POST['search']))
				{
				$searchKey = $_POST['search'];
				$sql = "select * from members where firstName like '%$searchKey%'";
			    }
				else
				$sql = "select * from members;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr><td>" .$row['firstName']."</td><td>" 
									.$row['lastName']."</td><td>"
									.$row['memberId']."</td><td>"
									.$row['phone']."</td><td>"
									.$row['email']."</td><td>"
									.$row['gender']."</td><td>"
									.$row['address']."</td><td>"
									.$row['joiningDate']."</td><td>"
									.$row['plan']."</td><td>"
									.$row['trainer']."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "0 result";
			}
			
			?>
		</tbody>
	</table>
	</div>
	<!--Table end-->
	</main>
</main>
	
	<!--footer start-->
	<footer class="footer">
	</footer>
	<!--footer end-->
	
	</div>
	<!--Container end-->
	</body>
</html>