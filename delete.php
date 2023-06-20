<?php
 include "dbconnect.php";
$id = $_GET['del_id'];
//echo $id;
$sql="DELETE FROM teacher where ID='$id'";
if($conn->query($sql))
{
	header('Location:index.php');
	//echo "successfully deleted";
}
else  "Delete operation failed";

$conn->close();

?>