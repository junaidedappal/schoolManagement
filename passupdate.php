<?php
include 'connection.php';
if(isset($_GET['pass']))
{
$uname=$_GET['username'];
$password =$_GET['password'];
$sql=" SELECT * FROM `user` where username ='".$uname."'AND password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{
$newpassword=$_GET['newpassword'];
$newpassword1=$_GET['newpassword1'];
if($newpassword==$newpassword1)
{
$sqlup="UPDATE `user` SET `password`='$newpassword' WHERE id= '1' ";
$result=mysqli_query($conn,$sqlup);
if ($result){
  header('location:index.php');}}}}