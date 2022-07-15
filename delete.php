<?php 
include 'connection.php';
if(isset($_GET['stud']))
{
$del=$_GET['stud'];
$qry="DELETE FROM student_reg_list WHERE admn_num ='$del' ";
mysqli_query($conn,$qry);
header('location:allstud.php');
}
if(isset($_GET['osf']))
{
$del=$_GET['osf'];
$qry="DELETE FROM student_reg_list WHERE admn_num ='$del' ";
mysqli_query($conn,$qry);
header('location:osf.php');
}
if(isset($_GET['fee']))
{
	$del=$_GET['fee'];
	$qry="DELETE FROM rcv WHERE rcv_no ='$del' ";
    mysqli_query($conn,$qry);
    header('location:allfee.php');
}
if(isset($_GET['don']))
{
	$del=$_GET['don'];
	$qry="DELETE FROM rcv WHERE rcv_no ='$del' ";
    mysqli_query($conn,$qry);
    header('location:donationlist.php');
}
if(isset($_GET['sp']))
{
	$del=$_GET['sp'];
	$qry="DELETE FROM special WHERE id ='$del' ";
    mysqli_query($conn,$qry);
    header('location:special.html');
}
if(isset($_GET['monfee']))
{
	$del=$_GET['monfee'];
	$qry="DELETE FROM feemon WHERE admn_num ='$del' ";
    mysqli_query($conn,$qry);
    header('location:allfeemon.php');
}
if(isset($_GET['staffdeb']))
{
	$del=$_GET['staffdeb'];
	$qry="UPDATE staff SET credit = '0' WHERE id ='$del' ";
    mysqli_query($conn,$qry);
    header('location:stafflist.php');
}
if(isset($_GET['delstaff']))
{
	$del=$_GET['delstaff'];
	$qry="DELETE FROM staff WHERE id ='$del' ";
    mysqli_query($conn,$qry);
    header('location:stafflist.php');
}

if(isset($_GET['newpass']))
{
$newpassword=$_GET['newpassword'];
$newpassword1=$_GET['newpassword1'];
if($newpassword==$newpassword1)
{
$sqlup="UPDATE `user` SET `password`='$newpassword' WHERE id= '1' ";
$result=mysqli_query($link,$sqlup);
header('location:index.php');
}}