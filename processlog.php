<?php
include 'connection.php';
$uname=$_POST['username'];
	$password =$_POST['password'];
	$sql=" SELECT * FROM `user` where username ='".$uname."'AND password='".$password."' limit 1";
	$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{
  header("Location: home.php");
}

else{
	?><center>
	 <h2 style="margin-top: 100px;color: red;">PASSWORD NOT MATCH</h2>
	 <a href="index.php" style="padding: 10px;background: blue;color: white;text-decoration: none;">GO BACK</a><?php
}


?>