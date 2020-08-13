<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
	$result = mysqli_query($conn, 'select * from users');

	//var_dump($result);

/*	$data = mysqli_fetch_assoc($result);
	$data1 = mysqli_fetch_assoc($result);
	$data2 = mysqli_fetch_assoc($result);
	$data3 = mysqli_fetch_assoc($result);
	print_r($data); echo "<br>";
	print_r($data1); echo "<br>";
	print_r($data2); echo "<br>";
	print_r($data3); echo "<br>";*/


	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>EMAIL</td>
				<td>TYPE</td>
			</tr>";
	while($data = mysqli_fetch_assoc($result)){
		echo "<tr>
				<td>".$data['id']."</td>
				<td>".$data['name']."</td>
				<td>".$data['password']."</td>
				<td>".$data['email']."</td>
				<td>".$data['userType']."</td>
			</tr>";
	}
	echo "</table>";
	mysqli_close($conn);

	/*if($conn){
		echo "done!";
	}
*/
?>