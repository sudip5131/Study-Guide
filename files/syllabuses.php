<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



$sql = "SELECT syllabus_link FROM Syllabus WHERE id = '".$_POST["id"]."'";
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

<script type="text/javascript">

location.href = "<?php echo $ganesh; ?>";
</script>