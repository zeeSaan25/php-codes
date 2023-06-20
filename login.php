<?php
session_start();
include "dbconnect.php";

if(isset($_POST['login']))


$nam=$_POST['name'];
$eml=$_POST['email'];

$sql="SELECT * FROM teacher WHERE email='$eml'";

$result=$conn->query($Sql);

if($result->num_rows==1){
    $_SESSION['email']=$eml;
    header('location:index.php');
}
echo "Login Failed";


?>


<!DOCTYPE html>
<html lang="eng">
<body>	
	<center>
		<h1>Insert Data</h1>
		<form method="POST" action="login.php">
					<label>Name</label>
					<input type="text" placeholder="Enter Your Name:" name="nam">
			
					<label>Email</label>
					<input type="email" placeholder="Enter Your Email:" name="email">
                    <input type="submit" name="login"value="Login">
			
		</form>
	</center>	
	
</body>
</html>