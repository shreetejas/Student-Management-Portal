<?php
include('dbcon.php');
	
		$ID = $_POST['ID'];
		$date = date('Y-m-d');
		$timestamp = strtotime($date);

		$day = date('D', $timestamp);
		
	 	$stmt = mysqli_query($conn,"SELECT * FROM `timetable` WHERE `t_id`='$ID' and `day_name` = '$day'");
	 	$return_arr = array();
	 	// if($f=mysqli_fetch_array($stmt))
	 	// {
	 	// 	$hour = $f['hour'];
	 	// 	echo $hour;
	 	// }
	   	if($stmt == true)
	   	{
	   		while ($row = mysqli_fetch_array($stmt)) {
    			$row_array['hour'] = $row['hour'];
    			$sem_id =  $row['sem_id'];

    			$sem = mysqli_query($conn,"SELECT * FROM `sem` WHERE `sem_id`='$sem_id'");
                $sres = mysqli_fetch_array($sem);
    			$row_array['sem'] = $sres['Title'];
    			
    			$sub = mysqli_query($conn,"SELECT * FROM `subject` WHERE `sub_id`='".$row['sub_id']."'");
                $subres = mysqli_fetch_array($sub);
    			$row_array['sub'] = $subres['Title'];
               
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}

?>