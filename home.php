<?php
session_start();
echo "<h1> WELCOME".$_SESSION['uname']."</h1>";
//echo $_SESSION['type'];
if($_SESSION['type']=="user")
{
?>
<html>
<head>
	<title></title>
</head>
<body>
<a href="Profile.html">Profile</a>
<a href="ChangePassword.html">Change Password</a>
<a href="Logout.html">Logout</a>
</body>
</html>

<?php
}
else
{
?>
	<html>
<head>
	<title></title>
</head>
<body>
<a href="Profile.html">Profile</a>
<a href="ChangePassword.html">Change Password</a>
<a href="Logout.html">Logout</a>
</body>
</html>
<?php
}
?>



