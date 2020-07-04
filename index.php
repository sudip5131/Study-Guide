<?php
	include_once 'header.php';
	
?>
<?php
	if (!isset($_SESSION['u_id'])) {
	echo '
		<section class= "main-container">
			<div class="container">
					<div class="row">
						<div class="col-lg-12">
							

								
								<h1></h1>


								<h3>STUDY GUIDE</h3>
								<hr></hr>
								<h1><div><i class="fas fa-child"></i>WELCOME</div></h1>
							
						</div>
					</div>	
				</div>	
		</section>

	';	
	} else{
		//echo '<script language="javascript">';
		//echo 'alert("Welcome Ganesh Karki")';
		//echo '</script>';
		include_once 'home.php';
	}
?>



</body>
</html>
<script type="text/javascript">




</script>