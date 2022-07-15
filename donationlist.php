<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


  <style >
        
td{
padding: 5px;
border-bottom: 1px solid #b6b6b4;
font-weight: bold;
color: black;
}
th{
    background-color: green;
    font-weight: bold;
    color: white;
    padding: 2px;
}

tr:nth-child(even) 
{background-color: #E6E6FA;
}
 a{
        text-decoration: none;
      color: white;

    }
    
    li{
        text-decoration: none;
        display: inline-flex;
        font-weight: bold;
        padding: 10px;
    }
    li:hover{
        background: #e83e8c;
    }
</style>

<center>
<main style="padding: 0px;max-width: 1000px;">
    <section class="header" style="padding: 0px;">
        <div class="header_nav" style="background: #007bff; margin-top: -20px;">
        <div class="menu_list">
            <ul style="padding-left: 20px;">
            <li style="float: left;"><a>DONATED TABLE</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="reg_search.html">Search</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="special.html">Red Marks</a> </li>
       </ul>
        </div>
        </div>
    </section> 
    <table>
        <TH>RECP.NO</TH>
        <th>DATE</th>
        <th>NAME</th>
        <th>DONATION</th>
        <th>PURPOSE</th>
        <th>ADMN NO</th>
        <th>CLASS</th>
        <th>---</th>
 



<?php 
include 'connection.php';

$sql = "SELECT * FROM `rcv` WHERE `donate_amount` != ' ' ORDER BY Date DESC ";


$qry = "SELECT SUM(donate_amount) AS count 
        FROM rcv ";
$res = $conn->query($qry);
$total = 0;
$rec = $res->fetch_assoc();
$total = $rec['count'];
   if ($result=mysqli_query($conn,$sql))
                        {
                           echo"<h3> Total Amount =  ".$total."  Rupees";
                     while ($row=mysqli_fetch_row($result))
                      { 
                     ?> <tr>
                    <td><?php echo $row[6] ; ?></td>
                    <td><?php echo $row[4] ; ?></td>
                      <td><?php echo $row[1] ; ?></td>
                      <td><?php echo $row[8] ; ?></td>
                      <td><?php echo $row[9] ; ?></td>
                      <td><?php echo $row[2] ; ?></td>
                      <td><?php echo $row[3] ; ?></td>
                                      <td style="background: red;"><a style="color: white;text-decoration: none;" href="delete.php?don=<?= $row[6];?>"> delete</a></td>
                   </tr>

                     <?php
                       }} 
                      ?>

</table>
</body>
</html>