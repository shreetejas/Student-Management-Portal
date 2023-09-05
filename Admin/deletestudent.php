<?php
 $conn=mysqli_connect("localhost","root","","alvas");
 $a=mysqli_query($conn,"DELETE FROM `student` WHERE std_id='$_GET[sid]'");
 if ($a) {
 echo "<script>
     alert('Deleted');
    window.location = 'View_Student.php';
    </script>";  
 }
 else{
 	 echo "<script>
     alert('Error');
    window.location = 'View_Student.php';
    </script>";  
 }
?>