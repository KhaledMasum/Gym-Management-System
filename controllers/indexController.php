<?php
	include_once '../models/database.php';
?>
<?php
	session_start();
	if(isset($_REQUEST['login']))
	{
		$username = $_REQUEST['uname'];
		$pass= $_REQUEST["pass"];						
		if (empty($username) || empty($pass))
		{
			header("Location: ../views/index.php?error=EmptyFields");
			exit();
		}
		else
		{
			$sql = "select * from users where username = '$username' and password = '$pass'";
			$result = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);
					$_SESSION['uname'] = $username;
			if($count == 1){
				header("Location: ../views/dashboard.php?LoginSuccessful");
			}
			else{
				header("Location: ../views/index.php?InvalidUsernameOrPassword");
			}		
		}	
	}
					 
	else
	{
		header("Location: ../views/index.php");
		exit();
	}
	
?>