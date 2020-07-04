<?php
$connect = mysqli_connect("localhost", "root", "", "loginsystem");
if(isset($_POST["id"]))
{

//$value = mysqli_real_escape_string($connect, $_POST["Absent_days"]) ;


 $value = $_POST["data_id"] ;

 $query = "UPDATE Syllabus SET Absent_days =" .++$value. "  WHERE id = '".$_POST["id"]."'";
 //header('location: ../../4th_sem/files/.php');
 if(mysqli_query($connect, $query))
 {
  //header('location: ../../4th_sem/index.php');
  echo "ganesh";

 }
}
exit;



?>