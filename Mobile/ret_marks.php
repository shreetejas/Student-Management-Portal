<?php
include 'dbcon.php';
// if(isset($_POST['ID']))
//      {
	$sem = "2";//$_POST['ID'];
	// $sub = "31";//;$_POST['ID'];
	$std = "7";//;$_POST['ID'];

	 $stmt = $conn->query("SELECT * FROM `marks` WHERE `std_id`='$std' and `sem_id`='$sem'");
	 $return_arr = array();
	   	if($stmt)
	   	{
	   		while ($row = $stmt->fetch_assoc()) {
    			$sub_id =  $row['sub_id'];
    			$sub = mysqli_query($conn,"SELECT * FROM `subject` WHERE `sub_id`='$sub_id'");
                $sres = mysqli_fetch_array($sub);
    			$row_array['sub'] = $sres['Title'];
    		// 	$row_array['semid'] = $sres['sem_id'];
	 		 	// $row_array['id'] = $row['sub_id'];
    			$row_array['mark'] = $row['marks'];
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}
     // }


?>
