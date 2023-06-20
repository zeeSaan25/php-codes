<?php
	include "dbconnect.php";
	
	$s = "SELECT * FROM teacher";
	$result = $conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td,th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1>Teacher's List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
					<th>Date_Of_Birth</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['ID'];
					$nam=$r['Name'];
					$des=$r['Designation'];
					$phn=$r['Phone'];
					$date=$r['Date_of_Birth'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $phn . "</td>";
						echo "<td>". $date. "</td>";
						echo "<td> <a style='text-decoration:none;color:green;font-weight:bold' href='edit.php?edit_id=$idd'><button style='background-color:green;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>EDIT</button</a></td>";
						echo "<td> <a style='text-decoration:none;color:red;font-weight:bold' href='delete.php?del_id=$idd'><button style='background-color:red;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>DELETE</button></a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
				<th colspan="7"><a href="insertForm.php"><button style="background-color:#0c3294;border: none;padding: 6px;border-radius: 10px;color:white;">Insert Record</button>	</a></th>
				</tr>
			</table>
		</center>
	
</body>
</html>




