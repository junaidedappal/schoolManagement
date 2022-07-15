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
color: black;
}
th{
    background-color:blue;
    font-weight: bold;
    color: white;
    padding: 2px;
}

tr 
{background-color:white;
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
    tr:hover{
        background:skyblue;

    }
</style>
<body>
<center>
<main style="padding: 0px;max-width: 1000px;">
    <section class="header" style="padding: 0px;">
        <div class="header_nav" style="background:blue; margin-top: -20px;">
        <div class="menu_list">
            <ul style="padding-left: 20px;">
                <li style="background: red;float:left;"><a href="feeunpaid.php">Unpaid all</a></li>
            <li style="float: left;"><a>MONTHLY FEE TABLE</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="reg_search.html">Search</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="special.html">Red Marks</a> </li>
       </ul>
        </div>
        </div>
    </section> 


<center>
    <table>
        <th>ADMN.NO</th>
        <th>NAME</th>
        <th>CLASS</th>
        <th>JAN</th>
        <th>FEB</th>
        <th>MAR</th>
        <th>APR</th>
        <th>MAY</th>
        <th>JUN</th>
        <th>JUL</th>
        <th>AUG</th>
        <th>SEP</th>
        <TH>OCT</TH>
        <TH>NOV</TH>
        <TH>DEC</TH>
        <th>---</th>

    
 



<?php 
include 'connection.php';

$sql=" SELECT * FROM feemon LEFT JOIN student_reg_list ON feemon.admn_num=student_reg_list.admn_num  ORDER BY class";   
      if ($result=mysqli_query($conn,$sql))
                        {

                     while ($row=mysqli_fetch_row($result))
                      { 
                     ?> <tr>
                     <td><?php echo $row[0] ; ?></td>
                     <td><?php echo $row[14] ; ?></td>
                     <td><?php echo $row[19] ; ?></td>
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
                     <td><?php echo $row[11] ; ?></td>
                     <td><?php echo $row[12] ; ?></td>
                     <td style="background: red;"><a style="color: white;text-decoration: none;" href="delete.php?monfee=<?= $row[0];?>"> delete</a></td>


                   </tr>

                     <?php
                       }} 
                      ?>

</table>
</body>
</html>