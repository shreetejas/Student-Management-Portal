<?php
include 'dbcon.php';
$mark=$_POST['mark'];
$stdid=$_POST['stdid'];
$subid=$_POST['subid'];
$semid=$_POST['semid'];

$query=mysqli_query($conn,"INSERT INTO `marks`(`std_id`, `sub_id`, `marks`, `sem_id`) VALUES ('$stdid','$subid','$mark','$semid')");
if ($query) {
	echo "Success";
} else {
	echo "Failed";
}

?>