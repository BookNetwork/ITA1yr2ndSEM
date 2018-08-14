<?php
	include 'connect.php';
	ob_start();
	session_start();
?>

		<div class="header">
		<header>
			<div class="logo"> </div>
			<div class="navheader">
				<a href="index.php">HOME</a> &nbsp;&nbsp;|&nbsp;&nbsp;
				<a href=""> ABOUT US </a> &nbsp;&nbsp;|&nbsp;&nbsp;
				<a href=""> CONATACT </a>&nbsp;&nbsp; |&nbsp;&nbsp;
				<a href=""> LANGUAGE </a>
			</div>

		<div class="link">
			<form action="">
				<input type="search" name="search">
				<input type="submit" value="search">
				<a href="Cart.php"><input type="button" value="cart"></a>
				&nbsp;&nbsp;
				<?php if(isset($_SESSION['email']) && !empty($_SESSION['email'])){?>
						<div class="dropdown">
							<button class="dropbtn"><?php echo $_SESSION['email'];?></button>
								<div class="dropdown-content">
									<a href="userAccount.php">Account Setting</a>
							<?php if($_SESSION['email'] == 'myadmin12345@gmail.com') : ?>
									<a href="admin.php">Admin</a> <?php endif;?>
									<a href="logout.php">Log out</a>
								 </div>
							</div>
				<?php }
						else{?>
						<a href="login.php"> login</a> | <a href="register.php"> register </a>
				<?php }?>
			</form>
		</div>

		</header>
		</div>
