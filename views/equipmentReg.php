<?php
	include_once 'header.php';
		include_once '../models/database.php';
		$err_id="";
		$id="";
		$err_name="";
		$name="";
		$err_vendor="";
		$vendor="";
		$err_price="";
		$price="";
		$err_phone="";
		$phone="";
		$err_address="";
		$address="";
		if(isset($_POST['addbtn']))
		{
		$id=$_POST["id"];
		$name=$_POST["name"];
		$vendor=$_POST["vendor"];
		$price=$_POST["price"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$joining=$_POST["joining"];
		$desc=$_POST["desc"];
		$sql="insert into equipments (equipId, equipName, vendor, price, phone, address, joiningDate, description) values ('$id','$name','$vendor','$price',$phone,'$address','$joining','$desc')";
		$result = mysqli_query ($conn, $sql);
		if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: equipmentReg.php?EquipmentRegistrationSuccessful");
			}
		    else
			{
			header("Location: equipmentReg.php?EquipmentRegistrationFailed");
			}
		}
		 ?>
<script type="text/javascript">
 const id = document.getElementById('id')
const name = document.getElementById('name')
const vendor = document.getElementById('vendor')
const price = document.getElementById('price')
const phone = document.getElementById('phone')
const address = document.getElementById('address')
const joining = document.getElementById('joining')
const description = document.getElementById('description')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('addbtn', (e) => {
	let messages = []
	if (id.value === "" || id.value == null){
		messages.push('ID is required')
	}
	if (name.value === "" || name.value == null){
		messages.push('Name is required')
	}
	if (vendor.value === "" || vendor.value == null){
		messages.push('Vendor name is required')
	}
	if (price.value === "" || price.value == null){
		messages.push('Price is required')
	}
	if (phone.value === "" || phone.value == null){
		messages.push('Phone is required')
	}
	if (address.value === "" || address.value == null){
		messages.push('Address is required')
	}
	if (joining.value === "" || joining.value == null){
		messages.push('Joining date is required')
	}
	if (description.value === "" || description.value == null){
		messages.push('Description is required')
	}
	
	
	
	if (messages.length > 0){
		e.preventDefault()
		errorElement.innerText = messages.join(',')
	}
})
</script>
         <?php
		    /*if (empty($_POST['id']))
			{
				$err_id="*ID Required";
			}
			else
			{
				$id=$_POST['id'];
			}
			if(empty($_POST['name']))
			{
				$err_name="*Name required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
			}
			if(empty($_POST['vendor']))
			{
				$err_vendor="*Name cannot be empty";
			}
			else
			{			
				$vendor=($_POST['vendor']);
			}
			if (empty($_POST['price']))
			{
				$err_price="*Price Required";
			}
			else
			{
				$price=$_POST['price'];
			}
			if (empty($_POST['phone']))
			{
				$err_phone="*Phone number Required";
			}
			else
			{
				$phone=$_POST['phone'];
			}
			if (empty($_POST['address']))
			{
				$err_address="*Address Required";
			}
			else
			{
				$address=$_POST['address'];
			}*/
		}
		if(isset($_POST['updatebtn']))
		{
			$id=$_POST["id"];
			$name=$_POST["name"];
			$vendor=$_POST["vendor"];
			$price=$_POST["price"];
			$phone=$_POST["phone"];
			$address=$_POST["address"];
			$joining=$_POST["joining"];
			$desc=$_POST["desc"];
			$sql="update equipments set equipId = '$id',equipName = '$name',vendor = '$vendor',price = '$price',phone = '$phone',address = '$address',joiningDate = '$joining',description = '$desc' where equipId = '$id'"; 
		    $result = mysqli_query ($conn, $sql);
			if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: equipmentReg.php?EquipmentUpdatedSuccessfully");
			}
		    else
			{
			header("Location: equipmentReg.php?EquipmentUpdateFailed");
			}
		}
		}
		if(isset($_POST['deletebtn']))
		{
			$id=$_POST["id"];
			$name=$_POST["name"];
			$vendor=$_POST["vendor"];
			$price=$_POST["price"];
			$phone=$_POST["phone"];
			$address=$_POST["address"];
			$joining=$_POST["joining"];
			$desc=$_POST["desc"];
			$sql="delete from equipments where equipId = '$id'"; 
		    $result = mysqli_query ($conn, $sql);
			if($result)
		{
			if (mysqli_affected_rows($conn) > 0)
			{
		 	header("Location: equipmentReg.php?EquipmentDeletedSuccessfully");
			}
		    else
			{
			header("Location: equipmentReg.php?EquipmentDeleteFailed");
			}
		}
		}
?>
<html>
	<head>
		<!--<script defer src="script.js"></script>-->
	</head>
 <body>
 <div id="error"></div>
  <h3>New equipments registration</h3>
  <form id="form" action="" method="post">
    <table>
	  <tr>
	    <td>Equipment ID:</td>
        <td><input type="text" name="id" value="<?php echo $id;?>" id="id">
		<br><span style="color:red"><?php echo $err_id;?></span></td>
	  </tr>
	  <tr>
	    <td>Equipment Name:</td>
        <td><input type="text" name="name" value="<?php echo $name;?>" id="name">
		<br><span style="color:red"><?php echo $err_name;?></span></td>
	  </tr>
	  <tr>
	    <td>Vendor/Supplier:</td>
        <td><input type="text" name="vendor" value="<?php echo $vendor;?>" id="vendor">
		<br><span style="color:red"><?php echo $err_vendor;?></span></td>
	  </tr>
	  <tr>
	    <td>Price:</td>
        <td><input type="text" name="price" value="<?php echo $price;?>" id="price">
		<br><span style="color:red"><?php echo $err_price;?></span></td>
	  </tr>
	  <tr>
	    <td>Vendor's Phone:</td>
        <td><input type="text" name="phone" value="<?php echo $phone;?>" id="phone">
		<br><span style="color:red"><?php echo $err_phone;?></span></td>
	  </tr>
	  <tr>
	    <td>Address:</td>
        <td><input type="text" name="address" value="<?php echo $address;?>" id="address">
		<br><span style="color:red"><?php echo $err_address;?></span></td>
	  </tr>
	  <tr>
	    <td>Purchasing Date:</td>
        <td><input type="date" name="joining" id="joining"></td>
	  </tr>
	  <tr>
	    <td>Description:</td>
        <td><textarea id="description" rows="" cols="" name="desc"></textarea></td>
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