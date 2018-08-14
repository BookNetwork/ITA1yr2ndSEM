<?php
	include 'connect.php';
	
	if(isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password']) && isset($_POST['repassword']) 
		&& !empty($_POST['email']) && !empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['password']) && !empty($_POST['repassword']))
	{
			$email = $_POST['email'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			
			$temp = "SELECT * FROM Customer WHERE email = '$email'";
			$res = mysqli_query($conn,$temp);
			if(mysqli_num_rows($res))
				echo "<script type='text/javascript'>alert('Email Already Exist!');window.location.replace('register.php');</script>";
			else{
				$qry_run =  "INSERT INTO Customer VALUES('','$email','$fname','$lname','$password')";
				mysqli_query($conn, $qry_run);
				echo "<script type='text/javascript'>alert('Successfully Added!');window.location.replace('./');</script>";
			}
					
	}else{
		echo "<script type='text/javascript'>alert('One or more field is empty');window.location.replace('register.php');</script>";
	}
	
?>