<?php
	$title= "Edit Page";
	include('header.php');

	
	//echo $_GET['email'];
?>


	<div id="page_title">
		<h1>Edit Page <?php echo $_SESSION['id']; echo $_SESSION['username']?></h1>
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="../controller/update.php">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value=""> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""> </td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value=""> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="signup" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>