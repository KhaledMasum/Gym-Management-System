<?php
	include_once 'header.php';
		include_once '../models/database.php';
		$err_first="";
		$first="";
		$err_last="";
		$last="";
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
		$id=$_POST["id"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$address=$_POST["address"];
		$joining=$_POST["joining"];
		$plan=$_POST["plan"];
		$trainer=$_POST["trainer"];	
		$sql="insert into members (firstName, lastName, memberId, phone, email, gender, address, joiningDate, plan, trainer) values ('$first','$last','$id',$phone,'$email','$gender','$address','$joining','$plan','$trainer')";
		$result = mysqli_query ($conn, $sql);
		if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: memberReg.php?MemberRegistrationSuccessful");
			}
		    else
			{
			header("Location: memberReg.php?MemberRegistrationFailed");
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
			$id=$_POST["id"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$gender=$_POST["gender"];
			$address=$_POST["address"];
			$joining=$_POST["joining"];
			$plan=$_POST["plan"];
			$trainer=$_POST["trainer"];
			$sql="update members set firstName = '$first',lastName = '$last',memberId = '$id',phone = '$phone' ,email = '$email',gender = '$gender',address = '$address',joiningDate = '$joining',plan = '$plan',trainer = '$trainer' where memberId = '$id'"; 
		    $result = mysqli_query ($conn, $sql);
			if($result)
		    {
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: memberReg.php?MemberUpdatedSuccessfully");
			}
		    else
			{
			header("Location: memberReg.php?MemberUpdateFailed");
			}
		  }
		}
		if(isset($_POST['deletebtn']))
		{
			$first=$_POST["first"];
			$last=$_POST["last"];
			$id=$_POST["id"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$gender=$_POST["gender"];
			$address=$_POST["address"];
			$joining=$_POST["joining"];
			$plan=$_POST["plan"];
			$trainer=$_POST["trainer"];
			$sql="delete from members where memberId = '$id'";
		    $result = mysqli_query ($conn, $sql);
			if($result)
		    {
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: memberReg.php?MemberDeletedSuccessfully");
			}
		    else
			{
			header("Location: memberReg.php?MemberDeleteFailed");
			}
		  }
		}
?>
<html>
 <body>
  <h3>Register new members</h3>
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
	    <td>Member ID:</td>
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
        <td><input type="text" name="email" placeholder="ex:myname@gmail.com" value="<?php echo $email;?>">
		<br><span style="color:red"><?php echo $err_email;?></span></td>
	  </tr>
	  <!--<tr>
	    <td>Gender:</td>
		<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female  </td>
	  </tr>-->
	  <tr>
	    <td>Gender:</td>
        <td><select name="gender">
				<option>Male</option>
				<option>Female</option>
		</select></td>
	  </tr>
	  <tr>
	    <td>Address:</td>
        <td><input type="text" name="address" value="<?php echo $address;?>">
		<br><span style="color:red"><?php echo $err_address;?></span></td>
	  </tr>
	  <tr>
	    <td>Joining Date:</td>
        <td><input type="date" name="joining"></td>
	  </tr>
	  <tr>
	    <td>Plan:</td>
        <td><select name="plan">
				<option>1 month</option>
				<option>3 month</option>
				<option selected="selected">6 month</option>
				<option>1 year</option>
			</select></td>
	  </tr>
	  <tr>
	    <td>Trainer:</td>
        <td><select name="trainer">
				<option>Scott Herman</option>
				<option>Jackie Warner</option>
				<option>Bob Harper</option>
			</select></td>
	  </tr>
	  <tr>
		<td><input type="submit" name="addbtn" value="Add Member"></td>
        <td><input type="submit" name="updatebtn" value="Update"></td>
		<td><input type="submit" name="deletebtn" value="Delete"></td>
	  </tr>
	</table>
  </form>
 <body>
</html>