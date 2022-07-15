<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 include 'connection.php';
  $name = $_POST['name'];
  $msr_id = $_POST['msr_id'];
  $on_range = $_POST['on_range'];
  $address = $_POST['address'];
  $fathername = $_POST['fathername'];
  $adhar_no = $_POST['adhar_no'];
  $class = $_POST['class'];
  $contact = $_POST['contact'];
  $working = $_POST['working'];

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $sql=" INSERT INTO `staff`(`name`, `address`, `contact`, `father`, `msr`, `adhar`, `class`, `onrange`, `inrange`) VALUES  ( '$name', '$address', '$contact', '$fathername', '$msr_id', '$adhar_no', '$class', '$on_range', '$working')";

   if ($conn->query($sql) === TRUE){

      ?>
            <div >
              <center>
                <h2 style=" background-color: green; font-weight: bolder; color: white; width: 200px;padding: 10px;
                margin-top: 20%;">REGISTRATION<br>SUCCESSFULL</h2>
                <label><a style=" width: 100px; height: 60px; padding: 10px; color: green;border: 1px solid green; font-weight: bold; text-decoration: none;"  href="staff.html" >Continue</a></label>
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