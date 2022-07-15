<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


  <style >
        
td{
padding: 5px;
border-bottom: 1px solid #b6b6b4;
font-weight: bold;
color:#00008B;
}
th{
    
    font-weight: bold;
    color:black;
    padding: 2px;
}

/* tr:nth-child(even) {
  background-color: #D6EEEE;
} */
li{
  text-decoration: none;
  display: flex;
  padding-left:  10px;
}
</style>
<center>
<body>
  <ul style=" background:#007bff ;display: flex;max-width: 1000px;">
<li>
    <a href="home.php" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;padding: 10px;height:20px;">Home</a></li><br>
<li>
    <a href="staff.html" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;padding: 10px;">Staff Register</a></li><br>
  <li>  <a href="staff_update.html" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;padding: 10px;">Staff Update</a></li></ul>
    <table>
      <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT NO</th>
        <th>FATHER</th>
        <th>MSR </th>
        <th>ADHAR</th>
        <th>CLASS</th>
        <th>OWN RANGE</th>
        <th>WOR. RANGE</th>
        <th>CREDIT</th>
          <TH ></TH>
 <th ></th>



<?php 
                   include 'connection.php';
                   $sql = "SELECT * FROM `staff` order by id ";
   if ($result=mysqli_query($conn,$sql))
                        {

                     while ($row=mysqli_fetch_row($result))
                      { 
                     ?> <tr>
                     <td><?php echo $row[0] ; ?></td>
                     <td><?php echo $row[1] ; ?></td>
                     <td><?php echo $row[2] ; ?></td>
                     <td><?php echo $row[3] ; ?></td>
                     <td><?php echo $row[4] ; ?></td>
                     <td><?php echo $row[5] ; ?></td>
                     <td><?php echo $row[6] ; ?></td>
                     <td><?php echo $row[7] ; ?></td>
                     <td><?php echo $row[8] ; ?></td>
                     <td><?php echo $row[9] ; ?></td>
                     <td><?php echo $row[10] ; ?></td>
                  <td style="background: #4CAF50;width: 100px;text-align: center;"><a style="color: white;text-decoration: none;" href="delete.php?staffdeb=<?= $row[0];?>"> PAID</td></a>
                 <td style="background: RED;"><a style="color: white;text-decoration: none;" href="delete.php?delstaff=<?= $row[0];?>"> Delete</a></td>

                   </tr>

                     <?php
                       }} 
                      ?>

</table>
</body>
</html>