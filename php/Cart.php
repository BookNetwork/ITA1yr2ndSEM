<?php
	require 'connect.php';

?>

<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/cart.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<script></script>
		<title>Shopping Cart</title>
		
	</head>
	<body>
	<!-- header -->
		<?php include 'header.php' ?>
	
	<section>
	
	<?php 
		
		if(isset($_SESSION['email']) && !empty($_SESSION['email']))
		{
			$cart = "SELECT * FROM `cart`";
			$query_run= mysqli_query($conn,$cart);
			
			if(mysqli_num_rows($query_run) >= 1)
			{
				/*testing*/echo "table values";
				
				/* the code for sql cart table */
				while($row = mysqli_fetch_assoc($query_run))
				{
					echo"<table>";
					echo"<tr>";
					echo"	<td>row['']</td>";
					echo"</tr>";
				}
			}
			else{
				echo"Your shopping cart is now empty <a href= 'index.php'>Start shopping now!!!</a>";
				
			}
		}
		else{
			
			echo'pleas log in' ;
		}	
	?>
		
	
	</section>
		
		<!--footer-->
		<?php include 'footer.php';?>
	</body>
</html>