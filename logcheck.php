<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}
		else
		{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
			$sql = "select * from users where id='".$username."' and password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user)){
				$_SESSION['status']  = "Ok";
				$_SESSION['username']=$username;
				echo $user['userType'];
				if($user['userType']=="admin")
				{
					header('location: AdminHomepage.php');
				}
				else
				{
					header('location: UserHomepage.php');
				}
			}
			else
			{
				echo "Null submission".'<a href="login.html"><u>Home</a>';
			}
			
		}

	}
	else{
		header("location: login.html");
	}


?>