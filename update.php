<?php
include "dbconnect.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_des'];
$phn=$_POST['f_phn'];
$date=$_POST['f_d'];
//echo $id;

$sql = "UPDATE teacher SET ID='$id',Name='$nam',Designation='$des',Phone='$phn',Date_of_Birth='$date' where ID='$id'";
if ($conn->query($sql) === TRUE) {
	header('Location:index.php');
  //echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>