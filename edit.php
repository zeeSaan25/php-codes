<?php

include "dbconnect.php";

$id = $_GET['edit_id'];
//echo $id;
$sql="SELECT * FROM teacher where ID='$id'";
$result = $conn->query($sql);
$arr = $result->fetch_assoc();
$ID =$arr['ID'];
$name =$arr['Name'];
$des=$arr['Designation'];
$phn =$arr['Phone'];
$add =$arr['Date_of_Birth'];




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		form{
			width: 50%;
			border: 2px solid black;
			padding: 10px;
		}
		th,td{
			padding:15px;
			text-align:center;
		}
	</style>
</head>
<body>	
	<center>
		<h1>Edit Data</h1>
		<form method="POST" action="update.php">
			<table>
				<tr>
					<th><label>ID</label></th>
					<td><input type="text" value=<?php echo $ID ?> name="f_id"></td>
				</tr>

				<tr>
					<th><label>Name</label></th>
					<td><input type="text" value=<?php echo $name ?> name="f_nam"></td>
				</tr>

				<tr>
					<th><label>Designation</label></th>
					<td><input type="text"  value=<?php echo $des ?> name="f_des" ></td>
				</tr>

				<tr>
					<th><label>Phone</label></th>
					<td><input type="text" value=<?php echo $phn ?> name="f_phn"></td>
				</tr>

				<tr>
					<th><label>Date_Of_Birth</label></th>
					<td><input type="date" value=<?php echo $add ?> name="f_d"> </td>
				</tr>
				<tr>
					<td colspan="2">
					    <input style="background-color:#0c3294;border: none;padding: 10px;border-radius: 10px;color:white;" type="submit" value="UPDATE">
				    </td>
				</tr>
			</table>
		</form>	
	</center>	
	
</body>
</html>








