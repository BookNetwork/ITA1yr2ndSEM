<!DOCTYPE html>
<?php
	include 'connect.php';
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/login1.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<!--script type="text/javascript" src="../javascript/login1.js"></script-->
		<title>PM FurNitureS Login</title>

	</head>
	<body>
	<!-- header -->
		<?php include 'header.php' ?>
	
		<nav>
			<!--navigation-->
		</nav>
		<aside>
			<!--asidi-->
		</aside>
		<div class="login">
		<section>
			<div class="imgbox_container">
				<div id="img_txt">
				Smater Shopping <br/>
				Better Living!<br/>
				</div>
			</div>
			<div class="section_container">
			<form  method="post" action="process.php" id="logFrm" name="logFrm" onsubmit="return login1(event)">
			<table>
				<tr>
					<td>Account : </td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan="2"><input type="email" id="Uemail" name="Uemail" placeholder="E-mail Address" required> </td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan="2" id ="userEmail"></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td style="text-align:right;"><a href="">Forgot Password?</a></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan="2"><input type="password" id="Upassword" name="Upassword" placeholder="Password" required></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan="2" id="userPassword"></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" id="button_login" name="button_login" >Sign In</button></td>
				</tr>
				<tr>
					<td> </td><td style="text-align:right;"><a href="register.php">Register now!</a></td>
				</tr>
			</table>
			</form>
			</div>
			
		</section>
		
		<!--footer-->
		<?php include 'footer.php';?>
		
	</div>
	</body>
</html>