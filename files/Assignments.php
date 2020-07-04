
<?php $page = 'Assignments';include '../header.php'; ?>
<!-- <?php include('assign.php'); ?> -->
<link rel="stylesheet" href="../bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="assign.css"


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /><script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<style>
  .contain{
    table-layout: auto;
    width: 40%;
  }

  .color{
    background-color: #e9ebee;
   } 

</style>

<body>

<div class="color>
  <form method="post" action="assign.php">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Subject" name="subject" value="">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Assignments" name="assignments" value="">
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Deadlines" name="deadlines" value="">
    </div>
    <div class="col-auto my-1">
      <input type="submit" class="btn btn-primary" name="submit" value="submit">
    </div>
  </div>
  </div>
</form> 

  
  <?php if(isset($_SESSION['message'])):?>
    <div class="msg">
      <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>

  <?php $results = mysqli_query($db,"SELECT * FROM assignment"); ?>

  <table class = "table table-striped table-bordered">
    <thead>
      <tr>
          <th></th>
          <th scope="col">Subject</th>
          <th scope="col">Assignment</th>
          <th scope="col">Deadline</th>
          <th scope="col">Time Remaining</th>
      </tr>
    </thead>

   

    <?php $count=0; $g=0;
    while($row = mysqli_fetch_array($results)){ ?>
        <tr>
            <th scope="col"><?php $g=$g+1;
            echo $g;?></th>
            <th scope="col" ><?php echo $row['subject'];?></th>
            <th scope="col"><?php echo $row['assignments'];?></th>
            <th scope="col"><?php echo $row['deadline'];?><input type="hidden" id="deadline<?php echo $count;?>" value="<?php echo $row["deadline"]?>"></th>
            <th scope="col"><?php  
            $var = $row['deadline'];
            
            ?>
  <body>
      <div id="clock<?php echo $count;?>"></div>
      <div id="units">
       
        
      </div>
    </div>



</th>

        </tr>
    <?php 
    $count +=1;
  } ?>
  </table>

  <?php
    echo "<input type=\"hidden\" value=\"".$count."\" id=\"counter\">";
  ?>



<script type="text/javascript">
  
function updateTimer(deadline){
  var time = deadline - new Date();
  return {
    'days': Math.floor( time/(1000*60*60*24) ),
    'hours': Math.floor( (time/(1000*60*60)) % 24 ),
    'minutes': Math.floor( (time/1000/60) % 60 ),
    'seconds': Math.floor( (time/1000) % 60 ),
    'total' : time
  };
}


function animateClock(span){
  span.className = "turn";
  setTimeout(function(){
    span.className = "";
  },700);
}

function startTimer(id, deadline){
  var timerInterval = setInterval(function(){
    var clock = document.getElementById(id);
    var timer = updateTimer(deadline);

    clock.innerHTML = '<span>' + timer.days + '</span>'+" days "
                    + '<span>' + timer.hours + '</span>' +" hours "
                    + '<span>' + timer.minutes + '</span>' +" minutes "
                    + '<span>' + timer.seconds + '</span>';

    //animations
    var spans = clock.getElementsByTagName("span");
    animateClock(spans[3]);
    if(timer.seconds == 59) animateClock(spans[2]);
    if(timer.minutes == 59 && timer.seconds == 59) animateClock(spans[1]);
    if(timer.hours == 23 && timer.minutes == 59 && timer.seconds == 59) animateClock(spans[0]);

    //check for end of timer
    if(timer.total < 1){
      clearInterval(timerInterval);
      var result = '<span>You are past deadline</span>.';
      var result_red = result.fontcolor("red");
      clock.innerHTML = result_red;

    }


  }, 1000);
}


window.onload = function(){
  var counts=document.getElementById("counter");
  console.log(counts.value);
  for (var x=0;x<counts.value;x++){
    var idhold = "deadline"+x;
    var deadline = new Date(document.getElementById(idhold).value);
    console.log(deadline);
    startTimer("clock"+x, deadline);
  }
  //var row = "<?php //echo $var;?>";
  //var deadline = new Date(row);


 // var deadline = new Date("2018-06-29");
  //startTimer("clock", deadline);
 };

</script>
    


</div>



</body>