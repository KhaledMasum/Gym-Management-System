<html>
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
			<input type="text" name = "search" placeholder="Search.." class="srcfield">
			<input type="submit" name="searchbtn" class="srcbtn" value="Search">
		</form>
	</div>
	<!--Search end-->
	
	<!--table start-->
	<div class="content-table">
	<table>
	  <thead>
		<tr>
			<th>Equipment ID:</th>
			<th>Equipment Name:</th>
			<th>Vendor:</th>
			<th>Price:</th>
			<th>Vendor's Phone:</th>
			<th>Address:</th>
			<th>Purchasing Date:</th>
			<th>Description:</th>
		</tr>
	  </thead>
	  <tbody>
			<?php
				include_once '../models/database.php';
				if(isset($_POST['search']))
				{
				$searchKey = $_POST['search'];
				$sql = "select * from equipments where equipName like '%$searchKey%'";
			    }
				else
				$sql = "select * from equipments;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr><td>" .$row['equipId']."</td><td>" 
									.$row['equipName']."</td><td>"
									.$row['vendor']."</td><td>"
									.$row['price']."</td><td>"
									.$row['phone']."</td><td>"
									.$row['address']."</td><td>"
									.$row['joiningDate']."</td><td>"
									.$row['description']."</td></tr>";
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