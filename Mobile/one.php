<?php
include 'dbcon.php';
if(isset($_POST['ID']))
     {
	$ID = $_POST['ID'];
	 $stmt = $conn->query("SELECT * FROM `subject` WHERE `teacher`='$ID'");
	 $return_arr = array();
	   	if($stmt)
	   	{
	   		while ($row = $stmt->fetch_assoc()) {
    			$sem_id =  $row['Sem'];
    			$sem = mysqli_query($conn,"SELECT * FROM `sem` WHERE `sem_id`='$sem_id'");
                $sres = mysqli_fetch_array($sem);
    			$row_array['sem'] = $sres['Title'];
    			$row_array['semid'] = $sres['sem_id'];
	 		 	$row_array['id'] = $row['sub_id'];
    			$row_array['sub'] = $row['Title'];
		    	array_push($return_arr, $row_array);
			} 
			echo json_encode($return_arr);
	  	}
     }


?>
