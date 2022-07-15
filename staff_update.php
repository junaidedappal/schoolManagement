
<?php
 include 'connection.php';
   $id = $_POST['id'];
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

if ($_POST['msr_id'])
{
$sql="UPDATE `staff` SET `msr`='$msr_id' WHERE id='$id' ";
mysqli_query($conn,$sql);
}

if ($_POST['class'])
{
$sql="UPDATE `staff` SET `class`='$class' WHERE id='$id' ";
mysqli_query($conn,$sql);
}
if ($_POST['adhar_no'])
{
$sql="UPDATE `staff` SET `adhar`='$adhar_no' WHERE id='$id' ";
mysqli_query($conn,$sql);
}
if ($_POST['on_range'])
{
$sql="UPDATE `staff` SET `onrange`='$on_range' WHERE id='$id' ";
mysqli_query($conn,$sql);
}
if ($_POST['working'])
{
$sql="UPDATE `staff` SET `inrange`='$working' WHERE id='$id' ";
mysqli_query($conn,$sql);
}




if ($_POST['address'])
{
$sql="UPDATE `staff` SET `address`='$address' WHERE id='$id' ";
mysqli_query($conn,$sql);
}

if ($_POST['contact'])
{
$sql="UPDATE `staff` SET `contact`='$contact' WHERE id='$id' ";
mysqli_query($conn,$sql);
}

   if ($conn->query($sql) === TRUE){

    header('location:stafflist.php');
         
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    } 
mysqli_close($conn);

