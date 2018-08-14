<?php

	require 'connect.php';
	session_start();
	
	if(isset($_POST['password']) && !empty($_POST['password']))
	{
		$password = $_POST['password'];
		
		$curr_pass = "SELECT password FROM Customer WHERE email ='{$_SESSION['email']}'";
		
		$reslt =  mysqli_query($conn,$curr_pass);
			while($row = $reslt->fetch_assoc())
			{
				$pass = $row['password'];
			}
			
				if($pass == $password)
				{
						$del_qry = "DELETE FROM Customer WHERE email = '{$_SESSION['email']}'";
						
						 mysqli_query($conn,$del_qry);
						 echo "<script type='text/javascript'>alert('success fully deactivated !!');window.location.replace('logout.php');</script>";
				}
				else
				{
					echo "<script type='text/javascript'>alert('password is not matched !!');window.location.replace('userAccountDeactivate.php');</script>";
				}
	}
		else
		{
			echo "<script type='text/javascript'>alert('one or more Feilds are Empty!!');window.location.replace('userAccountDeactivate.php');</script>";
		}


?>