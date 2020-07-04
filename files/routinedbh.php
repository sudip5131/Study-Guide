<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

	// initialize variables
	
	$S1 = "";
	$S2 = "";
	$S3 = "";
	$S4 = "";
	$S5 = "";
	$S6 = "";

	$M1 = "";
	$M2 = "";
	$M3 = "";
	$M4 = "";
	$M5 = "";
	$M6 = "";

	$T1 = "";
	$T2 = "";
	$T3 = "";
	$T4 = "";
	$T5 = "";
	$T6 = "";

	$W1 = "";
	$W2 = "";
	$W3 = "";
	$W4 = "";
	$W5 = "";
	$W6 = "";

	$TH1 = "";
	$TH2 = "";
	$TH3 = "";
	$TH4 = "";
	$TH5 = "";
	$TH6 = "";

	$F1 = "";
	$F2 = "";
	$F3 = "";
	$F4 = "";
	$F5 = "";
	$F6 = "";
	
	$update = true;




if (isset($_POST['save'])) {
		

		$S1 = $_POST['S1'];
		$S2 = $_POST['S2'];
		$S3 = $_POST['S3'];
		$S4 = $_POST['S4'];
		$S5 = $_POST['S5'];
		$S6 = $_POST['S6'];

		$M1 = $_POST['M1'];
		$M2 = $_POST['M2'];
		$M3 = $_POST['M3'];
		$M4 = $_POST['M4'];
		$M5 = $_POST['M5'];
		$M6 = $_POST['M6'];

		$T1 = $_POST['T1'];
		$T2 = $_POST['T2'];
		$T3 = $_POST['T3'];
		$T4 = $_POST['T4'];
		$T5 = $_POST['T5'];
		$T6 = $_POST['T6'];

		$W1 = $_POST['W1'];
		$W2 = $_POST['W2'];
		$W3 = $_POST['W3'];
		$W4 = $_POST['W4'];
		$W5 = $_POST['W5'];
		$W6 = $_POST['W6'];


		$TH1 = $_POST['TH1'];
		$TH2 = $_POST['TH2'];
		$TH3 = $_POST['TH3'];
		$TH4 = $_POST['TH4'];
		$TH5 = $_POST['TH5'];
		$TH6 = $_POST['TH6'];

		$F1 = $_POST['F1'];
		$F2 = $_POST['F2'];
		$F3 = $_POST['F3'];
		$F4 = $_POST['F4'];
		$F5 = $_POST['F5'];
		$F6 = $_POST['F6'];

		
		

		mysqli_query($db, "INSERT INTO routine (S1,S2,S3,S4,S5,S6,M1,M2,M3,M4,M5,M6,T1,T2,T3,T4,T5,T6,W1,W2,W3,W4,W5,W6,TH1,TH2,TH3,TH4,TH5,TH6,F1,F2,F3,F4,F5,F6) VALUES ('$S1','$S2','$S3','$S4','$S5','$S6','$M1','$M2','$M3','$M4','$M5','$M6','$T1','$T2','$T3','$T4','$T5','$T6','$W1','$W2','$W3','$W4','$W5','$W6','$TH1','$TH2','$TH3','$TH4','$TH5','$TH6','$F1','$F2','$F3','$F4','$F5','$F6')"); 
	}

if (isset($_POST['Update'])) {
		

		$S1 = $_POST['S1'];
		$S2 = $_POST['S2'];
		$S3 = $_POST['S3'];
		$S4 = $_POST['S4'];
		$S5 = $_POST['S5'];
		$S6 = $_POST['S6'];

		$M1 = $_POST['M1'];
		$M2 = $_POST['M2'];
		$M3 = $_POST['M3'];
		$M4 = $_POST['M4'];
		$M5 = $_POST['M5'];
		$M6 = $_POST['M6'];

		$T1 = $_POST['T1'];
		$T2 = $_POST['T2'];
		$T3 = $_POST['T3'];
		$T4 = $_POST['T4'];
		$T5 = $_POST['T5'];
		$T6 = $_POST['T6'];

		$W1 = $_POST['W1'];
		$W2 = $_POST['W2'];
		$W3 = $_POST['W3'];
		$W4 = $_POST['W4'];
		$W5 = $_POST['W5'];
		$W6 = $_POST['W6'];


		$TH1 = $_POST['TH1'];
		$TH2 = $_POST['TH2'];
		$TH3 = $_POST['TH3'];
		$TH4 = $_POST['TH4'];
		$TH5 = $_POST['TH5'];
		$TH6 = $_POST['TH6'];

		$F1 = $_POST['F1'];
		$F2 = $_POST['F2'];
		$F3 = $_POST['F3'];
		$F4 = $_POST['F4'];
		$F5 = $_POST['F5'];
		$F6 = $_POST['F6'];

		
		

		//mysqli_query($db, "UPDATE routine set S1='$S1', S2= '$S2',S3 ='$S3',S4='$S4' ,S5='$S5' ,S6='$S6' ,M1='$M1' ,M2='$M2' ,M3='$M3' ,M4='$M4', M5='$M5' ,M6='$M6', T1='$T1', T2='$T2', T3='$T3', T4='$T4', T5='$T5',T6='$T6' ,W1='$W1', W2='$W2', W3='$W3' ,W4='$W4' ,W5='$W5',W6='$W6' ,TH1='$TH1' ,TH2='$TH2' ,TH3='$TH3', TH4='$TH4' ,TH5='$TH5' ,TH6='$TH6' ,F1='$F1' ,F2='$F2' ,F3='$F3' ,F4='$F4', F5='$F5' ,F6='$F6' WHERE S1 != '' "); 
		if ($S1 != '') {
			mysqli_query($db, "UPDATE routine set S1 = '$S1
				'");
		}
		if($S2 != '') {
			mysqli_query($db, "UPDATE routine set S2 = '$S2
				'");
		}

		if($S3 != '') {
			mysqli_query($db, "UPDATE routine set S3 = '$S3
				'");
		}
		if ($S4 != '') {
			mysqli_query($db, "UPDATE routine set S4 = '$S4
				'");
		}
		if($S5 != '') {
			mysqli_query($db, "UPDATE routine set S5 = '$S5
				'");
		}

		if($S6 != '') {
			mysqli_query($db, "UPDATE routine set S6 = '$S6
				'");
		}   
		if ($M1 != '') {
			mysqli_query($db, "UPDATE routine set M1 = '$M1
				'");
		}
		if($M2 != '') {
			mysqli_query($db, "UPDATE routine set M2 = '$M2
				'");
		}

		if($M3 != '') {
			mysqli_query($db, "UPDATE routine set M3 = '$M3
				'");
		}
		if ($M4 != '') {
			mysqli_query($db, "UPDATE routine set M4 = '$M4
				'");
		}
		if($M5 != '') {
			mysqli_query($db, "UPDATE routine set M5 = '$M5
				'");
		}

		if($M6 != '') {
			mysqli_query($db, "UPDATE routine set M6 = '$M6
				'");
		}   
		if ($T1 != '') {
			mysqli_query($db, "UPDATE routine set T1 = '$T1
				'");
		}
		if($T2 != '') {
			mysqli_query($db, "UPDATE routine set T2 = '$T2
				'");
		}

		if($T3 != '') {
			mysqli_query($db, "UPDATE routine set T3 = '$T3
				'");
		}
		if ($T4 != '') {
			mysqli_query($db, "UPDATE routine set T4 = '$T4
				'");
		}
		if($T5 != '') {
			mysqli_query($db, "UPDATE routine set T5 = '$T5
				'");
		}

		if($T6 != '') {
			mysqli_query($db, "UPDATE routine set T6 = '$T6
				'");
		} 
		if ($W1 != '') {
			mysqli_query($db, "UPDATE routine set W1 = '$W1
				'");
		}
		if($W2 != '') {
			mysqli_query($db, "UPDATE routine set W2 = '$W2
				'");
		}

		if($W3 != '') {
			mysqli_query($db, "UPDATE routine set W3 = '$W3
				'");
		}
		if ($W4 != '') {
			mysqli_query($db, "UPDATE routine set W4 = '$W4
				'");
		}
		if($W5 != '') {
			mysqli_query($db, "UPDATE routine set W5 = '$W5
				'");
		}

		if($W6 != '') {
			mysqli_query($db, "UPDATE routine set W6 = '$W6
				'");
		}
		if ($TH1 != '') {
			mysqli_query($db, "UPDATE routine set TH1 = '$TH1
				'");
		}
		if($TH2 != '') {
			mysqli_query($db, "UPDATE routine set TH2 = '$TH2
				'");
		}

		if($TH3 != '') {
			mysqli_query($db, "UPDATE routine set TH3 = '$TH3
				'");
		}
		if ($TH4 != '') {
			mysqli_query($db, "UPDATE routine set TH4 = '$TH4
				'");
		}
		if($TH5 != '') {
			mysqli_query($db, "UPDATE routine set TH5 = '$TH5
				'");
		}

		if($TH6 != '') {
			mysqli_query($db, "UPDATE routine set TH6 = '$TH6
				'");
		}   
		if ($F1 != '') {
			mysqli_query($db, "UPDATE routine set F1 = '$F1
				'");
		}
		if($F2 != '') {
			mysqli_query($db, "UPDATE routine set F2 = '$F2
				'");
		}

		if($F3 != '') {
			mysqli_query($db, "UPDATE routine set F3 = '$F3
				'");
		}
		if ($F4 != '') {
			mysqli_query($db, "UPDATE routine set F4 = '$F4
				'");
		}
		if($F5 != '') {
			mysqli_query($db, "UPDATE routine set F5 = '$F5
				'");
		}

		if($F6 != '') {
			mysqli_query($db, "UPDATE routine set F6 = '$F6
				'");
		}    
		}
	header('location: ../../4th_sem/files/Bookmarks.php');