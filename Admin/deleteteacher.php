<?php
 $conn=mysqli_connect("localhost","root","","alvas");
 $a=mysqli_query($conn,"DELETE FROM `teacher` WHERE tid='$_GET[sid]'");
 if ($a) {
 echo "<script>
     alert('Deleted');
    window.location = 'View_teacher.php';
    </script>";  
 }
 else{
 	 echo "<script>
     alert('Error');
    window.location = 'View_teacher.php';
    </script>";  
 }
?>