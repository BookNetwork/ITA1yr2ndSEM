<?php
	require 'connect.php';
	session_start();
	
	if(isset($_POST['Uemail']) && isset($_POST['Upassword']) && !empty($_POST['Uemail']) && !empty($_POST['Upassword']))
	{
		
		$email = $_POST['Uemail'];
		$password = $_POST['Upassword'];

			$q = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
			$res = mysqli_query($conn,$q);
			
			if(mysqli_num_rows($res) == 1)
			{
				$_SESSION['email'] = $email;
				echo "<script type='text/javascript'>alert('login successfully !!');window.location.replace('./');</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('not registered !!');window.location.replace('login.php');</script>";
			}
	}
		else
		{
			echo "<script type='text/javascript'>alert('Email or Password Feilds are Empty!!');window.location.replace('login.php');</script>";
		
		}
?>