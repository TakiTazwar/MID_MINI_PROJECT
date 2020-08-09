<?php
if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$userType = $_POST['userType'];

	if(empty($id) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($userType))
	{
		echo "null submission".'<a href="registration.html"><u>Home</a>';
	}
	else 
	{

		if($password!=$confirmPassword)
		{
			echo "Match Password".'<a href="registration.html"><u>Home</a>';
		}
		else
		{

		$conn = mysqli_connect('127.0.0.1', 'root', '', 'foodDeliverManagementSystem');
		$sql= 'select * from registration where username="'.$_POST['username'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$sql1="INSERT INTO registration (name, email, username, password, gender, dateofbirth, usertype) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['date']."', '".$_POST['usertype']."')";
				mysqli_query($conn,$sql1);
				echo "done";
			}
			else
			{
				echo "Password doesn't match";
			}
			mysqli_close($conn);
			}
			else
			{
				echo "Username already exists";
			}
		}
		else
		{
			header("location: registration.html");
		}

		header('location: login.html');
		}
	}

}
else
{
	//header("location: login.html");
	echo "Not Set YEST";
}

?>