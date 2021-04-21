<?php
	include_once 'header.php';
		include_once '../models/database.php';
		$err_first="";
		$first="";
		$err_last="";
		$last="";
		$err_age="";
		$age="";
		$err_id="";
		$id="";
		$err_phone="";
		$phone="";
		$err_email="";
		$email="";
		$err_address="";
		$address="";
		if(isset($_POST['addbtn']))
		{
		$first=$_POST["first"];
		$last=$_POST["last"];
		$age=$_POST["age"];
		$id=$_POST["id"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$trainer=$_POST["trainer"];
		$joining=$_POST["joining"];
		$sql="insert into trainers (first, last, age, trainerId, phone, email, address, trainer, joiningDate) values ('$first','$last',$age,'$id',$phone,'$email','$address','$trainer','$joining')";
		$result = mysqli_query ($conn, $sql);
		if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: trainerReg.php?TrainerRegistrationSuccessful");
			}
		    else
			{
			header("Location: trainerReg.php?TrainerRegistrationFailed");
			}
		}
			if(empty($_POST['first']))
			{
				$err_first="*Name Required";
			}
			else
			{			
				$first=htmlspecialchars($_POST['first']);
			}
			if(empty($_POST['last']))
			{
				$err_last="*Name Required";
			}
			else
			{			
				$last=htmlspecialchars($_POST['last']);
			}
			if (empty($_POST['age']))
			{
				$err_age="*Age Required";
			}
			else
			{
				$age=$_POST['age'];
			}
			if (empty($_POST['id']))
			{
				$err_id="*ID Required";
			}
			else
			{
				$id=$_POST['id'];
			}
			if (empty($_POST['phone']))
			{
				$err_phone="*Phone number Required";
			}
			else
			{
				$phone=$_POST['phone'];
			}
			if (empty($_POST['email']))
			{
				$err_email="*E-mail Required";
			}
			else
			{
				$email=$_POST['email'];
			}
			if (empty($_POST['address']))
			{
				$err_address="*Address Required";
			}
			else
			{
				$address=$_POST['address'];
			}
		}
		if(isset($_POST['updatebtn']))
		{
			$first=$_POST["first"];
			$last=$_POST["last"];
			$age=$_POST["age"];
			$id=$_POST["id"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			$trainer=$_POST["trainer"];
			$joining=$_POST["joining"];
			$sql="update trainers set first = '$first',last = '$last',age = '$age',trainerId= '$id' ,phone = '$phone',email = '$email',address = '$address',trainer = '$trainer',joiningDate = '$joining' where trainerId = '$id'"; 
		    $result = mysqli_query ($conn, $sql);
			if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: trainerReg.php?TrainerUpdatedSuccessfully");
			}
		    else
			{
			header("Location: trainerReg.php?TrainerUpdateFailed");
			}
		}
		}
		if(isset($_POST['deletebtn']))
		{
			$first=$_POST["first"];
			$last=$_POST["last"];
			$age=$_POST["age"];
			$id=$_POST["id"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			$trainer=$_POST["trainer"];
			$joining=$_POST["joining"];
			$sql="delete from trainers where trainerId = '$id'"; 
		    $result = mysqli_query ($conn, $sql);
			if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: trainerReg.php?TrainerDeletedSuccessfully");
			}
		    else
			{
			header("Location: trainerReg.php?TrainerDeleteFailed");
			}
		}
		}
?>

<html>
 <body>
  <h3>Register new trainers</h3>
  <form action="" method="post">
    <table>
	  <tr>
	    <td>First Name:</td>
        <td><input type="text" name="first" value="<?php echo $first;?>">
		<br><span style="color:red"><?php echo $err_first;?></span></td>
	  </tr>
	  <tr>
	    <td>Last Name:</td>
        <td><input type="text" name="last" value="<?php echo $last;?>">
		<br><span style="color:red"><?php echo $err_last;?></span></td>
	  </tr>
	  <tr>
	    <td>Age:</td>
        <td><input type="text" name="age" value="<?php echo $age;?>">
		<br><span style="color:red"><?php echo $err_age;?></span></td>
	  </tr>
	  <tr>
	    <td>Trainer ID:</td>
        <td><input type="text" name="id" value="<?php echo $id;?>">
		<br><span style="color:red"><?php echo $err_id;?></span></td>
	  </tr>
	  <tr>
	    <td>Phone:</td>
        <td><input type="text" name="phone" value="<?php echo $phone;?>">
		<br><span style="color:red"><?php echo $err_phone;?></span></td>
	  </tr>
	  <tr>
	    <td>E-mail:</td>
        <td><input type="text" name="email" value="<?php echo $email;?>">
		<br><span style="color:red"><?php echo $err_email;?></span></td>
	  </tr>
	  <tr>
	    <td>Address:</td>
        <td><input type="text" name="address" value="<?php echo $address;?>">
		<br><span style="color:red"><?php echo $err_address;?></span></td>
	  </tr>
	  <tr>
	    <td>Gender:</td>
        <td><select name="trainer">
				<option>Male</option>
				<option>Female</option>
		</select></td>
	  </tr>
	  <tr>
	  <tr>
	    <td>Joining Date:</td>
        <td><input type="date" name="joining"></td>
	  </tr>
	  <tr>
		<td><input type="submit" name="addbtn" value="Register"></td>
        <td><input type="submit" name="updatebtn" value="Update"></td>
		<td><input type="submit" name="deletebtn" value="Delete"></td>
	  </tr>
	</table>
  </form>
 <body>
</html>