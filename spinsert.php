 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'connection.php';
  $sp = $_POST['sp'];
  $admn_num = $_POST['admn_num'];

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $sql=" INSERT INTO `special`(`sp`, `admn_num`) VALUES ( '$sp', '$admn_num')";

   if ($conn->query($sql) === TRUE){

      ?>
            <div >
              <center>
                <h2 style=" background-color: green; font-weight: bolder; color: white; width: 200px;padding: 10px;
                margin-top: 20%;">SPECIALISATION<br>SUCCESSFULL</h2>
                <label><a style=" width: 100px; height: 60px; padding: 10px; color: green;border: 1px solid green; font-weight: bold; text-decoration: none;"  href="special.html" >Continue</a></label>
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