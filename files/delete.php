<?php
$connect = mysqli_connect("localhost", "root", "", "loginsystem");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM Syllabus WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}




elseif(isset($_POST["iddd"]))
{
 $query = "DELETE FROM events WHERE id = '".$_POST["iddd"]."'";
  header('location: ../../4th_sem/index.php');

 if(mysqli_query($connect, $query))
 {
   header('location: ../../4th_sem/index.php');

 }
}



elseif(isset($_POST["idd"]))
{
 $query = "DELETE FROM assignment WHERE id = '".$_POST["idd"]."'";
 if(mysqli_query($connect, $query))
 {
 header('location: ../../4th_sem/index.php');
 }
}



?>
