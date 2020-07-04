<ul class="navbar1 navbar-nav mr-auto">
<li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="files/Syllabus.php">Syllabus</a>';
	      	}else{
	        	echo '<a class="nav-link" href="#">About</a>';
	    	}
	        ?>
	      </li>

	      <li class="nav-item">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="#">Assignments</a>';
	      	}
	      	?>
	      </li>

	      <li class="naav-item">
	      	<?php
	      	if (isset($_SESSION['u_id'])) {
	      		echo '<a class="nav-link" href="#">Bookmarks</a>';
	      	}else{
	      	echo '<a class="nav-link" href="#">Contact</a>';
	      }
	      	?>
	      </li>
	  </ul>