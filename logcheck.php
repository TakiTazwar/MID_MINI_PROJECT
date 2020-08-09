<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			echo "null submission";

		}
		else{
			
			$file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
			//$user = explode('|', $data);
			$users = explode('/r/n', $data);
			//print_r($users);
			$counter=0;
			echo count($users);
			while($counter<(count($users)-1))
			{

				$data = $users[$counter];
				$user = explode('|', $data);
				
				echo $counter;
				$counter=$counter+1;
			}


			/*while(!feof($file)){
				$data = fgets($file);
				$user = explode('|', $data);
				echo $user[0].$user[3];
			}*/

			//print_r($user);
			if(trim($user[0]) == $uname && trim($user[3]) == $password){
				$_SESSION['status']  = "Ok";
				$_SESSION['uname'] 	= $user[0];
				$_SESSION['type'] 	= $user[4];
				header('location: home.php');
				}
				else
				{
				echo "Invalid username/password";
				}
		}

	}else{
		header("location: login.html");
	}


?>