<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$id = $_POST['id'];
		$lastname= $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$mi = $_POST['mi'];
        $contactno= $_POST['contactno'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password= $_POST['password'];

		
		mysqli_query($conn, "INSERT INTO `plant_db` VALUES('', '$id', '$lastname', '$', '$firstname',  '$mi', '$contactno', '$address', '$username', '$password')") or die(mysqli_error());
		echo "<h3 class='text-success'>SUCCESSFULLY LOG IN!</h3>";
	}
?>