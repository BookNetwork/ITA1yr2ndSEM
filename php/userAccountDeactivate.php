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
						<li><a href="www.#.com">Account details</a></li>
						<li><a href="www.#.com">Feedback</a></li>
						<li><a href="www.#.com">My orders</a></li>
						<li><a href="www.#.com">Help</a></li>
					</ul>
			</aside>

		</div>	
				<div class="firstSection">
					<div class="txt">
						Account Settings
					</div>
					<div class="txtSmall ">
						Deactivate Account
					</div>
				</div>
				<div class="secondSection">
				<div class="thirdEditBox">
					<form action="processDeactivate.php" method="post" name="userEdit">
								<table>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td>Password :</td>
									</tr>
									<tr>
										<td><input type="password" name="password"></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td><input type="submit" name="submit" value="Deactivate"></td>
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