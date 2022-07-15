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
</style>
    <a href="home.php" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;position: sticky;top: 50px;left: 20px;padding: 10px;">Home</a>

</div><center>
    <table>
        <th>ADMN NO</th>
               <th>NAME</th>
        <th>FATHER</th>
        <th>PLACE</th>
        <th>CONTACT</th>

<?php
include 'connection.php';

                    $month = $_POST['month'];
                    $class=$_POST['class'];

                     $sql=" SELECT * FROM feemon LEFT JOIN student_reg_list ON feemon.admn_num=student_reg_list.admn_num where class ='$class' and `$month`= ' ' ";   
                    if ($result=mysqli_query($conn,$sql))
                        {
                            
                            echo "<h3>class ". $class." /  ". $month." </h3>";

                            

                            while ($row=mysqli_fetch_row($result))
                                { 
                     ?> <tr>
                     <td><?php echo $row[0] ; ?></td>
                     <td><?php echo $row[14] ; ?></td>
                     <td><?php echo $row[17] ; ?></td>
                     <td><?php echo $row[20] ; ?></td>
                     <td><?php echo $row[21] ; ?></td>
                  </tr>
                     <?php
                               }} 
                               ?>

</table>
</body>
</html>