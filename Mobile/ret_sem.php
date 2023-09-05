<?php
include 'dbcon.php';

	 $stmt = $conn->query("SELECT * FROM `sem`");
	 $return_arr = array();
	   	if($stmt)
	   	{
	   		while ($row = $stmt->fetch_assoc()) {
    			
    			$row_array['sem'] = $row['Title'];
    			$row_array['sem_id'] = $row['sem_id'];

	 		 	
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}
     


?>
