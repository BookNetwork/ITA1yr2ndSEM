<!doctype html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/adminlogin.css"/>
		<link rel="stylesheet" type="text/css" href="../css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
        <link rel="stylesheet" type="text/css" href="../css/adminlogin.css"/>
		<script></script>

		<title>Office Furniture</title>

	</head><div></div >
	<body>
	<!-- header -->
		<?php include 'header.php' ?>

    <div class="register">
	<section>

    <div class="section_container">
		<form method="POST" action="adminEDIT.php">
			<table>
				<tr>
					<td>Name : </td>
					<td><input type="text" name="name" class="i"/></td>
					<td><input type="text" name="oldname" class="i_small"/>
						for updation only</td>

				</tr>
				<tr>
					<td>Image : </td>
					<td colspan="2"><input type="file" name="image" class="i"></td>
				</tr>
				<tr>
					<td>Category : </td>
					<td colspan="2">
						<select name="category" class="i">
							<option>  </option>
							<option value="Livingroom"> living Room </option>
							<option value="Dianingroom"> Dianing Room </option>
							<option value="Bedroom"> Bed Room </option>
							<option value="officeFurniture"> Office Furniture </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Details : </td>
					<td colspan="2"><input type="text" name="details" style="height:100px;wdiht:200px;" class="i" placeholder="details...."></td>
				</tr>
				<tr>
					<td><button type="submit" name="insert">Insert</button></td>
					<td><button type="submit" name="delete">Delete</button></td>
					<td><button type="reset" >Reset</button></td>
					</td>
				</tr>
			</table>
		</form>
    </div>

	</section>
</div>
		<!--footer-->
		<?php include 'footer.php';?>
	</body>
</html>
