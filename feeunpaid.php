<?php 
include 'connection.php';

$sql= "UPDATE `feemon` SET `jan`=' ',`feb`=' ',`mar`=' ',`apr`=' ',`may`=' ',`jun`=' ',`jul`=' ',`aug`=' ',`sep`=' ',`oct`=' ',`nov`=' ',`dec`=' ' ";
$run=mysqli_query($conn,$sql);
header('location:allfeemon.php');
mysqli_close($conn);

?>