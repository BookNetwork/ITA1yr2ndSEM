<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/UserAccount.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<link rel="stylesheet" type="text/css" href="../css/UserAccountEdit.css"/>
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
					<div class="txtSmall">
						Email settings
					</div>
				</div>
				<div class="secondSection">
				<div class="firstEditBox" >
					<form action="processEmail.php" method="post" name="userEdit">
								<table>
									<tr>
										<td>Email address : </td>
									</tr>
									<tr>
										<td><input type="text" name="Uemail"></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
									<tr>
										<td>New Email :</td>
									</tr>
									<tr>
										<td><input type="text" name="Uemail"></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td><input type="submit" name="submit" value="Change"></td>
									</tr>
									
								</table>
					</form>
				</div>
				</div>
			</section>
		
		
		<!--footer-->
		<?php include 'footer.php'; ?>
		
	</body>


</html>