<?php
 $conn=mysqli_connect("localhost","root","","alvas");
 $a=mysqli_query($conn,"DELETE FROM `dept` WHERE deptid='$_GET[sid]'");
 if ($a) {
 echo "<script>
     alert('Deleted');
    window.location = 'View_dept.php';
    </script>";  
 }
 else{
 	 echo "<script>
     alert('Error');
    window.location = 'View_dept.php';
    </script>";  
 }
?>