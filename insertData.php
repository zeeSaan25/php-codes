
<?php
include "dbconnect.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_des'];
$phn=$_POST['f_phn'];
$date=$_POST['f_d'];

$sql = "INSERT INTO teacher (ID,Name,Designation,Phone,Date_of_Birth) 
		VALUES ('$id', '$nam', '$des', '$phn','$date')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

