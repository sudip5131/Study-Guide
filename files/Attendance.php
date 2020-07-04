<?php $page = 'Attendance';include '../header.php'; ?>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

		<table class = "table table-striped table-bordered">
			<thead>
			<tr>
				<td>S.No</td>   
				<td>Subject</td>
			  <td>Absent Days</td>
			</tr>
		</thead>
		<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$g=0;

$sql = "SELECT UPPER(Subject_name),id,Absent_days FROM syllabus ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<form method='post' action=''>";
  echo "<table width=\"100%\" class = 'table table-striped'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "<br>";

    
       echo "<tr><td><a style='';>".($g=$g+1).'.'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.$row['UPPER(Subject_name)']."</a></td><td>".$row['Absent_days']."</td><td><input type='submit' style='' class='btn-sm Addone' value='+1' data_id=".$row['Absent_days']." name='Addone' id=".$row['id']." /></td><td><input type='hidden' name='i' value=".$row['id']." /></td></td><td><input type='hidden' name='Absent_days' value=".$row['Absent_days']." /></td></tr>";  
    }
    echo "</table>";
    echo "</form>";
} else {
    $ganesh= "0 results";
  }
$conn->close();

?> 

		</table>
	

	<script type="text/javascript">
		
 $(document).ready(function(){
  
		$(document).on('click', '.Addone', function(){
   var id = $(this).attr("id");
   var data_id = $(this).attr("data_id");
   if(confirm("Were you Absent today?"))
   {
    $.ajax({
     url:"update1.php",
     method:"POST",
     data:{id:id, data_id:data_id},
   
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 1);
   }
  });


 });
	</script>