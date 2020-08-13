<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
$sql = "select * from users where id='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$user 	= mysqli_fetch_assoc($result);
?>

<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<td colspan="2" align="center">
			Profile
		</td>
	</tr>
	<tr>
		<td>
			ID:
		</td>
		<td>
			<?php
			echo $user['id'];
			?>
		</td>
		
	</tr>
	<tr>
		<td>
			Name:
		</td>
		<td>
			<?php
			echo $user['name'];
			?>
		</td>
		
	</tr>
	<tr>
		<td>
			Email:
		</td>
		<td>
			<?php
			echo $user['email'];
			?>
		</td>
		
	</tr>
	<tr>
		<td>
			User Type:
		</td>
		<td>
			<?php
			echo $user['userType'];
			?>
		</td>
		
	</tr>
	<tr>
		<td colspan="2">
			<a href="UserHomepage.php">Go Home</a>
		</td>
		
	</tr>
</table>
</body>
</html>