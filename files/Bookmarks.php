
<?php $page = 'Bookmarks';include '../header.php'; ?>
<link rel="stylesheet" href="../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<style>
	td{
		border: none;
	}
    button.btn-sm {
    position: relative;
    left: 28px;
}
</style>

<html>
<head>
   <title>Time Table</title>
</head>
<H1><FONT COLOR="DARKCYAN"><CENTER><div class="font-weight-bold">TIME TABLE</div></FONT></H1>
<form method="POST" action="routinedbh.php">	
	<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>
<table border="2" cellspacing="3" align="center" class="table table-striped table-bordered">
<tr>
 <td align="center"></td>
 <td>7:00-9:00</td>
 <td>9:00-10:00</td>
 <td>10:00-11:00</td>
 <td>11:00-12:00</td>
 <td>12:00-1:00</td>
 <td>1:00-2:00</td>
</tr>
<tr>
 <td align="center">SUNDAY
 <td align="center"><input type="text" name="S1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S1)"];
    }	
}?>">
 </td>
 <td align="center"><input type="text" name="S2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="S3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="S4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="S5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S5)"];
    }	
}?>"></td>
 <td align="center"><input type="text"name="S6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(S6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(S6)"];
    }	
}?>"></td>
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center"><input type="text" name="M1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="<?php $sql = "SELECT UPPER(M1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M1)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="M2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="<?php $sql = "SELECT UPPER(M2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="M3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="<?php $sql = "SELECT UPPER(M3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="M4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(M4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="M5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(M5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M5)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="M6"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="<?php $sql = "SELECT UPPER(M6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(M6)"];
    }	
}?>"></td>
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><input type="text" name="T1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T1)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="T2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="T3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="T4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="T5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T5)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="T6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(T6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(T6)"];
    }	
}?>"></td>
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><input type="text" name="W1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W1)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="W2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="W3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="W4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="W5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W5)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="W6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(W6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(W6)"];
    }	
}?>"></td>
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center"><input type="text" name="TH1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH1)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="TH2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="TH3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="TH4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="TH5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH5)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="TH6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(TH6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(TH6)"];
    }	
}?>"></td>
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><input type="text" name="F1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F1) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F1)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="F2" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F2) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F2)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="F3"class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F3) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F3)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="F4" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F4) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F4)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="F5" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F5) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F5)"];
    }	
}?>"></td>
 <td align="center"><input type="text" name="F6" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="<?php $sql = "SELECT UPPER(F6) FROM routine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo $row["UPPER(F6)"];
    }	
}?>"></td>
</tr>
<!--<button type="submit" class="btn-sm" name="save">Submit</button>-->
<button type="submit" class="btn-sm btn btn-success" name="Update">Update</button>

</form>
</body>
</html>