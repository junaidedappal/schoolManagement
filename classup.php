<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php 
include 'connection.php';
$admn_num = $_POST['admn_num'];
$class=$_POST['class'];
$sql= "UPDATE `student_reg_list` SET `class`='$class' WHERE admn_num ='$admn_num' ";
$run=mysqli_query($conn,$sql);
 
header('location:classupgrade.html');



 mysqli_close($conn);

?>
</body>
</html>