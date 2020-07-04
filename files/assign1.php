<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

	// initialize variables
	
	$id = 0;
	$event = "";
	$date= "";

	$update = false;




if (isset($_POST['save'])) {
		

		$event = $_POST['event'];
		$date = $_POST['dates'];
		

		mysqli_query($db, "INSERT INTO events (event, dates) VALUES ('$event', '$date')"); 
		//$_SESSION['message'] = "event saved"; 
		header('location: ../../4th_sem/index.php');
	}
