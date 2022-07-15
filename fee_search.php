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
    background-color: blue;
    font-weight: bold;
    color: white;
    padding: 2px;
}

tr:nth-child(even) 
{background-color: #E6E6FA;
}
</style>
    <a href="home.php" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;position: sticky;top: 50px;left: 20px;padding: 10px;">Home</a>

</div><center>
    <table>
        <th>NAME</th>
        <th>ADMN NO</th>      
        <th>CLASS</th>      
        <th>PAID MONTH</th>
        <th>DATE</th>
        <th>TOTAL</th>
        <th>RCPT-NO</th>



<?php
                   include 'connection.php';
                    $field = $_POST['field'];
                    $sel=$_POST['searchname'];

                     $sql = "SELECT * FROM `rcv` where `$field` = '$sel' ";
                    if ($result=mysqli_query($conn,$sql))
                        {

                            while ($row=mysqli_fetch_row($result))
                                { 
                     ?> <tr>
                     
                     <td><?php echo $row[1] ; ?></td>
                     <td><?php echo $row[2] ; ?></td>                   
                     <td><?php echo $row[3] ; ?></td>
                     <td><?php echo $row[7] ; ?></td>
                     <td><?php echo $row[4] ; ?></td>                   
                     <td><?php echo $row[5] ; ?></td>
                     <td><?php echo $row[6] ; ?></td>
                     
                    
                   </tr>
                     <?php
                               }} 
                               ?>

</table>
</body>
</html>