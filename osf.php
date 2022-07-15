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
    background-color:white;
    font-weight: bold;
    color: black;
    padding: 2px;
    border: 1px solid black;
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
        background: #C6DEFF;

    }
</style>
<body>
<center>
<main style="padding: 0px;max-width: 1000px;">
    <section class="header" style="padding: 0px;">
        <div class="header_nav" style="background: #007bff; margin-top: -20px;">
        <div class="menu_list">
            <ul style="padding-left: 20px;">
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li style="float: left;"><a href="reg_search.html">Search</a></li>
            <li style="float: left;"><a href="staff.html">Staff</a></li>
            <li style="float: left;"><a href="special.html">Red Marks</a> </li>
            <li><a>OSF TABLE</a></li>
       </ul>
        </div>
        </div>
    </section> 

    <table>
        <th>NAME</th>
        <th>SKIMVB ID</th>
        <th>ADMN NO</th>
        <th>FATHER</th>
        <th>D-O-B</th>
        <th>HOUSE NAME</th>
        <th>PLACE</th>
        <th>CONTACT</th>
        <th>ADMISSION YEAR</th>
          <th>---</th>
 



<?php 
include 'connection.php';
$sql = "SELECT * FROM `student_reg_list` WHERE class='0' ORDER BY `year_of_admn`  ";
   if ($result=mysqli_query($conn,$sql))
                        {

                     while ($row=mysqli_fetch_row($result))
                      { 
                     ?> <tr>
                     <td><?php echo $row[0] ; ?></td>
                     <td><?php echo $row[1] ; ?></td>
                     <td><?php echo $row[9] ; ?></td>
                     <td><?php echo $row[3] ; ?></td>
                     <td><?php echo $row[4] ; ?></td>
                     <td><?php echo $row[2] ; ?></td>
                     <td><?php echo $row[6] ; ?></td>
                     <td><?php echo $row[7] ; ?></td>
                     <td><?php echo $row[8] ; ?></td>
                    <td style="background:#DE3163;"><a style="color: white;text-decoration: none;" href="delete.php?osf=<?= $row[9];?>"> delete</a></td>
                   </tr>

                     <?php
                       }} 
                      ?>

</table>
</body>
</html>