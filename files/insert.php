<?php
$connect = mysqli_connect("localhost", "root", "", "loginsystem");
if(isset($_POST["Subject_name"], $_POST["Subject_code"]))
{
 $Subject_name = mysqli_real_escape_string($connect, $_POST["Subject_name"]);
 $Subject_code = mysqli_real_escape_string($connect, $_POST["Subject_code"]);
 $query = "INSERT INTO Syllabus(Subject_name, Subject_code) VALUES('$Subject_name', '$Subject_code')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>