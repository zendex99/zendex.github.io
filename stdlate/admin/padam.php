<?php 
include ('config.php');

$no_matrik=$_GET['no_matrik'];
$result=mysqli_query($connect,"DELETE FROM late WHERE no_matrik='$no_matrik'");
header("location:lateRecords.php");
?>