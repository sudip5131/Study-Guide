<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

	// initialize variables
	$subject = "";
	$assignments = "";
	$deadline = "";
	$id = 0;
	$update = false;

	if (isset($_POST['submit'])) {
		$subject = $_POST['subject'];
		$assignments = $_POST['assignments'];
		$deadline = $_POST['deadlines'];

		mysqli_query($db, "INSERT INTO assignment (subject, assignments,deadline) VALUES ('$subject', '$assignments','$deadline')"); 
		$_SESSION['message'] = "Assignments saved"; 
		header('location: Assignments.php');
	}
