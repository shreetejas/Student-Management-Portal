<?php
include 'dbcon.php';

	 $stmt = $conn->query("SELECT * FROM `notice` ORDER BY `date` DESC");
	 $return_arr = array();
	   	if($stmt)
	   	{
	   		while ($row = $stmt->fetch_assoc()) {
    			$row_array['title'] = $row['Title']; 
                $row_array['desp'] = $row['disp']; 
                $row_array['date'] = $row['date'];
                
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}
	  	
    


?>