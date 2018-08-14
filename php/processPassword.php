<?php
	require 'connect.php';
	session_start();

	if(isset($_POST['Upassword']) && isset($_POST['newUpassword']) && isset($_POST['reNewUpassword'])
		&& !empty($_POST['Upassword']) && !empty($_POST['newUpassword']) && !empty($_POST['reNewUpassword']))
	{

		$password = $_POST['Upassword'];
		$newUpassword = $_POST['newUpassword'];
		$reNewUpassword = $_POST['reNewUpassword'];


				$curr_pass = "SELECT password FROM Customer WHERE email ='{$_SESSION['email']}'";

				$reslt = mysqli_query($conn,$curr_pass);
				while($row = $reslt->fetch_assoc())
				{
					$pass = $row['password'];
				}

				if($pass == $password)
				{

					if($newUpassword == $reNewUpassword)
					{
						$newPss = "UPDATE Customer  SET password = '$newUpassword' WHERE email = '{$_SESSION['email']}'";

						 mysqli_query($conn,$newPss);

						echo"<script type='text/javascript'>alert('success !!');window.location.replace('UserAccount.php');</script>";
					}
					else
					{
						echo"<script type='text/javascript'>alert('new password is not matched!!');window.location.replace('userPasswordEdit.php');</script>";
					}

				}
				else
				{
					echo"<script type='text/javascript'>alert('current password is incorrect!!');window.location.replace('userPasswordEdit.php');</script>";

				}

		}
		else{

			echo "<script type='text/javascript'>alert('one or more Feilds are Empty!!');window.location.replace('userPasswordEdit.php');</script>";
		}


?>
