<?php
include('dbcon.php');
	
		$ID = $_POST['ID'];
		
		
	 	$stmt = mysqli_query($conn,"SELECT * FROM `Student` WHERE `sem`='$ID' ");
	 	$return_arr = array();
	 	// if($f=mysqli_fetch_array($stmt))
	 	// {
	 	// 	$hour = $f['hour'];
	 	// 	echo $hour;
	 	// }
	   	if($stmt == true)
	   	{
	   		while ($row = mysqli_fetch_array($stmt)) {
    			
    			$row_array['id'] = $row['s_id'];
    			$row_array['name'] = $row['name'];
    			$row_array['regno'] = $row['reg_no'];
               
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}

?>