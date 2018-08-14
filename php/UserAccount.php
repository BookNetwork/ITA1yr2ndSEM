<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/UserAccount.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<title>usesr Account</title>
	</head>
	
	<body>
		<!-- header -->
			<?php include 'header.php' ?>
		
		<section>
		<div class="user">
			<aside>
					<ul>
						<li><a href="userAccount.php">Account Settings</a></li>
						<li><a href="">Account details</a></li>
						<li><a href="">Feedback</a></li>
						<li><a href="">My orders</a></li>
						<li><a href="">Help</a></li>
					</ul>
			</aside>

		</div>	
		
				<div class="firstSection">
					<div class="txt">
						Account Settings
					</div>
				</div>
				<div class="secondSection">
				<div class="A">
					<table>
					<div class = "user">
							<tr>
								<td>Email</td>
								<td><?php echo $_SESSION['email'];?></td>
							</tr>
							<tr>
								<td>Change Password</td>
								<td><a href="userPasswordEdit.php">edit</a></td>
							</tr>
							<tr>
								<td>Deactivate Account</td>
								<td><a href="userAccountDeactivate.php">Deactivate</a></td>
							</tr>
					</div>
					</table>
				</div>
				</div>
			</section>
			
		
		
		
		<!--footer-->
		<?php include 'footer.php'; ?>
		
	</body>


</html>