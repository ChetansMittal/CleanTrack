<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$region = $_POST['region'];

	$number = $_POST['number'];
	$adhar = $_POST['adhar'];
	$file = $_POST['file'];
	$complaint = $_POST['complaint'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(firstName, lastName, gender, email, region, number, adhar, file, complaint) values(?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssiiss", $firstName, $lastName, $gender, $email, $region, $number,$adhar, $file, $complaint);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>











