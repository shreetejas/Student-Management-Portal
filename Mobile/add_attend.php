<?php
include 'dbcon.php';

$stdid=$_POST['stdid'];
$subid=$_POST['subid'];
$semid=$_POST['semid'];

$query=mysqli_query($conn,"INSERT INTO `attendance`(`std_id`, `sem_id`, `sub_id`, `attend_date`, `status`) VALUES ('$stdid','$semid','$subid',now(),'Present')");
if ($query) {
	echo "Success";
} else {
	echo "Failed";
}

?>