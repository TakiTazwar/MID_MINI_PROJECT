	<center>
<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
$sql = "select * from users where id='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$user 	= mysqli_fetch_assoc($result);
echo "<h1> Welcome  ".$user['name']."</h1>";
?>
<html>
<head>
	<title></title>
</head>
<body>

<a href="Profile.php">Profile</a><br>
<a href="ChangePassword.html">Change Password</a><br>
<a href="viewuser.php">View Users</a><br>
<a href="Logout.php">Logout</a><br>
</body>
</center>
</html>



