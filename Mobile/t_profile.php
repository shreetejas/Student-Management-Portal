<?php
include 'dbcon.php';
if(isset($_POST['ID']))
     {
	$ID = $_POST['ID'];
	 $stmt = $conn->query("SELECT * FROM `teacher` WHERE `t_id`='$ID'");
	 $return_arr = array();
	   	if($stmt)
	   	{
	   		while ($row = $stmt->fetch_assoc()) {
    			$row_array['name'] = $row['name']; 
                $row_array['contact'] = $row['contact']; 
                $row_array['email'] = $row['email']; 
                $row_array['Qualification'] = $row['Qualification']; 
                $row_array['Experience'] = $row['Experience']; 
                $row_array['Designation'] = $row['Designation']; 
               
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}
     }


?>
