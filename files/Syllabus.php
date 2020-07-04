  
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
   <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
   <style>
   <body>
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
    box-sizing:border-box;
   }
   .fullbutton{
    display: block;
    width: 100%;
    border: none;
    background-color: #d2d4d6;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    opacity: 0;
    transition: opacity .35s ease;
   }
   .fullbutton:hover{
    opacity: 1;
   }
   </style>
  </head>
  <body style="background-color:#e9ebee;">
    <button class="fullbutton"><a href="../../../4th_sem/index.php"><i class="fas fa-arrow-alt-circle-left"></i>Home</a></button>


   <div class="container box">
    <h2 align="center"><i class="fas fa-file"></i>Syllabus</h2>
    <br />
    <div class="table-responsive">
    <br />
     <div align="right">
      <button type="button" name="add" id="add" class="btn btn-info">Add</button>

     </div>
     <br />
     <div id="alert_message"></div>
     <table id="user_data" class="table table-bordered table-striped">
      <thead>
       <tr>
        <th>Subject Name</th>
        <th>Subject code</th>
        <th></th>
        <th></th>

       </tr>
      </thead>
     </table>
    </div>
   </div>
  </body>
 </html>
    
<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



$sql = "SELECT syllabus_link FROM Syllabus WHERE id = 13";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $ganesh= $row["syllabus_link"];
    }
} else {
    $ganesh= "0 results";
  }
$conn->close();
?> 


?>

 <script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   });

  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var Subject_name = $('#data1').text();
   var Subject_code = $('#data2').text();
   if(Subject_name != '' && Subject_code != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{Subject_name:Subject_name, Subject_code:Subject_code},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
  


  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
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


  $(document).on('click', '.Syllabus', function(){
   var id = $(this).attr("id");
   if(confirm("Do you want to open the syllabus?"))
   {
    $.ajax({
     url:"syllabuses.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
           }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });


 });
</script>