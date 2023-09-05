<?php
include 'dbcon.php';
$contact=$_POST['mobile'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM `teacher` WHERE `contact`='$contact' and `password`='$password'");
if(mysqli_num_rows($query)==0){
			echo "login failed";
		}
		else{
			
			$row=mysqli_fetch_array($query);
			echo $row["t_id"];
			
			}

?>