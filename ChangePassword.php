<?php
session_start();
if(isset($_POST['submit']))
{
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
	$sql = "select * from users where id='".$_SESSION['username']."'";
	$result = mysqli_query($conn, $sql);
	$user 	= mysqli_fetch_assoc($result);

	if($_POST['current']==$user['password'])
	{
		if($_POST['new']==$_POST['renew'])
		{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
			$sql ="update users set password='".$_POST['new']."' WHERE id= '".$_SESSION['username']."'";
			$result = mysqli_query($conn, $sql);
			header("location: logout.php");
		}
	}
}

?>