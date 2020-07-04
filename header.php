<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Study Guide</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">	



</head>
<body>

<header>
	
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4080ff !important";>
	  <a class="navbar-brand" href="../../4th_sem/index.php"><i class="fas fa-user-graduate"></i>Study Guide</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar1 navbar-nav mr-auto">
	      
	      <li class="nav-item <?php if($page=='Syllabus'){echo 'active';}?>">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="../../4th_sem/files/Syllabus.php"><i class="fas fa-file"></i>Syllabus</a>';
	      	}else{
	        	echo '<a class="nav-link" href = "new/about.php"><i class="fas fa-info"></i>ABOUT</a>';
	    	}
	        ?>
	      </li>

	      <li class="nav-item <?php if($page=='Assignments'){echo 'active';}?>">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="../../4th_sem/files/Assignments.php"><i class="far fa-clipboard"></i>Assignments</a>';
	      	}
	      	?>
	      </li>

	      <li class="naav-item <?php if($page=='Bookmarks'){echo 'active';}?>">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="../../4th_sem/files/Bookmarks.php"><i class="fas fa-school"></i>Class Routine</a>';
	      	}else{
	      	echo '<a class="nav-link" href="new/contact.php"><i class="fab fa-contao"></i>CONTACT</a>';
	      }
	      	?>
	      </li>

	      <li class="naav-item <?php if($page=='Attendance'){echo 'active';}?>">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="../../4th_sem/files/attendance.php"><i class="fas fa-folder-open"></i>Attendance</a>';
	      	}
	      	?>
	      </li>
	    </ul>  

	    <ul class="navbar1 navbar-nav navbar-right">
	      <li class="nav-item" >
	      	<?php
	      		if (!isset($_SESSION['u_id'])){
	      	echo '<a class="nav-link" href="signup.php">Sign Up<i class="fa fa-user-plus"></i></a>';
	     	 }else{
	     	 	
	     	 }
	      	?>
	      </li>	

	      <li class="nav-item">
	      	<?php
	      		if (isset($_SESSION['u_id'])) {
	      		 	echo '<form action="../../4th_sem/includes/logout.inc.php" method="POST">
	      		 	<button type="submit" name="submit" class="btn btn-lg btn-primary" >Logout</button>
	     	
	      	</form>';
	      		 } else{
	      		 	echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/email">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit" class="btn btn-lg btn-primary">Login</button>

					</form>';
	      		 }
	      	?>
	      	
	      	
	      </li>  	
	    </ul>  
	  </div>
	</nav>
</header>