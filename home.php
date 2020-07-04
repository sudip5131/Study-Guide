	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  
  .cold{
    display: inline;
  }
  	.col-sm-4,.col-sm-7{
  		
  		min-height: 100%!important;
  		height: 85vh;
  		border: solid black;
  		border-width: thin;
      margin-left: 40px;

  	}
  	h2{
  		text-decoration: none;
      text-align: center;
  		
  	}

    .row{
      background-color: #dfe0e2;
    }
  </style>


  <div class="row">
  <div class="col-sm-4">
        <h2 style="text-align: center;">Upcoming Events</h2>
        
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />

    <?php echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';?>  <button style="float: right;" class="btn-sm btn btn-success"" data-toggle="modal" data-target="#myModal">Add New Event</button>

    <!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Events</h4>
      </div>
      
      
 <form method="post" action="files/assign1.php">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="event" name="event" value="" >
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="date" name="dates" value="">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary" name="save">Submit</button>
    </div>
  </div>
</form>


  

</div>

</div>

</div>

<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$g=0;

$sql = "SELECT UPPER(event),dates,id FROM events ORDER BY `events`.`dates` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<form method='post' action=''>";
  echo "<table width=\"100%\" class = 'table table-striped'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "<br>";
      echo "<br>";
    
       echo "<tr><td><a style='font-size:18px';>".($g=$g+1).'.'.'&nbsp'.$row['UPPER(event)']."</a></td><td><a style='align:right; font-size:18px;'>&nbsp".date('dS F',strtotime($row['dates']))."</a></td><td><input type='submit' style='' class='btn-sm submit' value='delete' name='submit' iddd=".$row['id']." /></td><td><input type='hidden' name='idd' value=".$row['id']." /></td></tr>";  
    }
    echo "</table>";
    echo "</form>";
} else {
    $ganesh= "0 results";
  }
$conn->close();

?> 


</div>

<div class="col-sm-7">
  <h2>Assignments With Deadline within 4 days</h2>
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />

<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$h=0;
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT UPPER(subject),UPPER(assignments),deadline FROM `assignment` WHERE (Deadline < DATE_ADD(NOW(), INTERVAL 4 DAY) AND Deadline> CURRENT_DATE()) ORDER BY `assignment`.`deadline` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table width=\"100%\" class = 'table table-striped'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "<br>";
     // echo "<br>";
    
       echo "<tr><td><a style='font-size:18px';>".($h=$h+1).'.'.'&nbsp'.$row['UPPER(subject)']."</a></td><td><a style='font-size:18px;'>".$row['UPPER(assignments)']."</a></td><td><a style='font-size:18px;'>&nbsp".date('dS F Y',strtotime($row["deadline"])) ."</a></td></tr>";
    }
    echo "</table>";
} else {
    $ganesh= "0 results";
  }
$conn->close();


?>

  <h2 style="color: red;">Assignments Past Deadline</h2>
        <hr style="height:1px;border:none;color:#333;background-color:red;" />

  <?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT UPPER(subject),UPPER(assignments),deadline,id FROM `assignment` WHERE Deadline <= CURRENT_DATE() ORDER BY `assignment`.`deadline` DESC";
$result = $conn->query($sql);
$r=0;
if ($result->num_rows > 0) {
  echo "<form method='post' action=''>";
  echo "<table width=\"100%\" class = 'table table-striped'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "<br>";
      //echo "<br>";
    
       echo "<tr style='color:red!important';><td><a style='font-size:18px';>".($r=$r+1).'.'.'&nbsp'.$row['UPPER(subject)']."</a></td><td><a style='font-size:18px;'>".$row['UPPER(assignments)']."</a></td><td><a style='font-size:18px;'>&nbsp".date('dS F Y',strtotime($row["deadline"]))."</a></td><td><input type='submit' class='btn-sm Checked' value='Checked' name='Checked' idd=".$row['id']." /></td><td><input type='hidden' name='idd' value=".$row['id']." /></td></tr>";
    } 
    echo "</table>";
    echo "</form>";
} else {
    $ganesh= "0 results";
  }
$conn->close();


?>




</div>


</div>

<script type="text/javascript">
$(document).ready(function(){

function fetch_data()
  {
   url:"home.php";

  }

$(document).on('click', '.submit', function(){
   var iddd = $(this).attr("iddd");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"files/delete.php",
     method:"POST",
     data:{iddd:iddd},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });

$(document).on('click', '.Checked', function(){
   var idd = $(this).attr("idd");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"files/delete.php",
     method:"POST",
     data:{idd:idd},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });

 });

 
</script>