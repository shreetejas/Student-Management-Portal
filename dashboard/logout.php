<?php
session_start();
session_destroy();
echo "<script>alert('logout success');
window.location='../index.php';</script>";
?>