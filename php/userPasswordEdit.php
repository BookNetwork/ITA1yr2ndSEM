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
					<div class="txtSmall">
						password settings
					</div>
				</div>
				<div class="secondSection">
				<div class="secondEditBox">
					<form action="processPassword.php" method="post" name="userEdit">
								<table>
									<tr>
										<td>Password : </td>
									</tr>
									<tr>
										<td><input type="password" name="Upassword" requir></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td>New Password :</td>
									</tr>
									<tr>
										<td><input type="password" name="newUpassword"></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td>Re Enter new Password :</td>
									</tr>
									<tr>
										<td><input type="password" name="reNewUpassword"></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td><input type="submit" name="submit" value="Change"></td>
									</tr>
									
								</table>
						</fieldset>
					</form>
				</div>
			</section>
		
		
		<!--footer-->
		<?php include 'footer.php'; ?>
		
	</body>


</html>