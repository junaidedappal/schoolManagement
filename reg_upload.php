<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'connection.php';
  $name = $_POST['name'];
  $skimvb_id = $_POST['skimvb_id'];
  $admn_num = $_POST['admn_num'];
  $address = $_POST['address'];
  $fathername = $_POST['fathername'];
  $dob = $_POST['dob'];
  $class = $_POST['class'];
  $place = $_POST['place'];
  $contact = $_POST['contact'];
  $year_of_admn = $_POST['year_of_admn'];

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $sql=" INSERT INTO `student_reg_list`(`name`, `skimvb_id`, `address`, `father`, `dob`, `class`, `place`, `contact`, `year_of_admn`, `admn_num`) VALUES  ( '$name', '$skimvb_id', '$address', '$fathername', '$dob', '$class', '$place', '$contact', '$year_of_admn','$admn_num')";

 $feereg=" INSERT INTO `feemon` (`admn_num`)  VALUES  ('$admn_num')";
 mysqli_query($conn,$feereg);

   if ($conn->query($sql) === TRUE){

      ?>
            <div >
              <center>
                <h2 style=" background-color: green; font-weight: bolder; color: white; width: 200px;padding: 10px;
                margin-top: 20%;">REGISTRATION<br>SUCCESSFULL</h2>
                <label><a style=" width: 100px; height: 60px; padding: 10px; color: green;border: 1px solid green; font-weight: bold; text-decoration: none;"  href="registration.html" >Continue</a></label>
               <label ><a style="width: 100px; height: 60px; padding: 10px; color: green;border: 1px solid green; font-weight: bold;text-decoration: none;"  href="home.php" >Home</a></label>

              </center>
              
            </div>

      <?php
         
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    } 
// Close connection
mysqli_close($conn);
?>

</body>
</html>