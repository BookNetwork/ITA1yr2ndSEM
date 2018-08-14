<?php 
	include 'connect.php';

?>

<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/login2.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<!--<script type="text/javascript" src="../javascript/login1.js"></script>-->
		<title>Sign in form</title>
	</head>
	<body>
	
	<script>
	
		function login2(event){
			
			var p1 = document.getElementById('password').value;
			var p2 = document.getElementById('repassword').value;
			console.log(p1);
			console.log(p2);
			if(p1 != p2){
				alert('password is not match');
				event.preventDefault();
				return false;
			}else{
				return true;
				//event.target.submit();
			}
		}
	
	</script>
	<!-- header -->
		<?php include 'header.php'; ?>
		
	<div class="register">
		<section>
			<div class="section_container">
				<div style="font-size:2.2em;"><b>Create a New Account</b></div>
				<hr/>
				<form method="POST"   name="regFrm" onsubmit="return login2(event)" action="registerDB.php">
					<table> 
						<tr>
							<td colspan="2">E-mail Address : </td>
						</tr>
						<tr>
							<td><input id="email" type="email" name="email" placeholder="example@type.com" class="i" required> </td>
							<td><div style="color:orange;"><em>This will your Sign in email address.</em></div></td>
						</tr>
						<tr>
							<td  id="emailVal" class="validation"></td>
						</tr>
						
						<tr>
							<td colspan="2" >Name :</td>
						</tr>
						<tr>
							<td><input id="fname" type="text" name="fname" placeholder="First name" class="i_small" required> &nbsp; 
							<input id="lname" type="text" name="lname" placeholder="Last name" class="i_small" required>
							</td>
						</tr>
						<tr>
							<td colspan="2" id="fnameVal" class="validation"></td>
						</tr>
						<tr>
							<td colspan="2" id="lnameVal" class="validation"></td>
						</tr>
						
						
						<tr>
							<td colspan="2">Create password :</td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" id="password" name="password" placeholder="Letters only" class="i" required></td>
						</tr>
						<tr>
							<td colspan="2" id="passwordVal" class="validation" ></td>
						</tr>
						
						<tr>
							<td colspan="2">Confirm your password :</td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" name="repassword" id="repassword" placeholder="Enter password again" class="i" required></td>
						</tr>
						<tr>
							<td colspan="2" name="repasswordVali" id="repasswordVali" class="validation"></td>
						</tr>
						
			
						<tr>
							<td colspan="2"><input type="checkbox" id="check1" required>I agree to the PM FurNitureS.lk Free Membership Agrement.<a href="">View Agreement</a></td>
						</tr>
						<tr>
							<td colspan="2"><button type="submit" name="submit"><b>Create Your Account</b></button></td>
							
						</tr>
						<tr>
							<td></td>
						</tr>
						
					</table>
				</form>
			</div>
		</section>
		</div>
		.<!--footer-->
		<?php include 'footer.php';?>
		
		
	</body>
</html>

