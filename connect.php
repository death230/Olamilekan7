<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];

	// Database connection
	$conn = new mysqli('localhost','root','','text');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, email, password, conpassword) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi",$firstName, $email, $password, $conpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>