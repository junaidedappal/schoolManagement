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
    <a href="reg_search.html" style="background: #007bff;color: white;text-decoration: none;font-weight: bold;position: sticky;top: 50px;left: 20px;padding: 10px;margin-left: 10px;">Back</a>

</div><center>
    <table>
        <th>NAME</th>
        <th>SKIMVB ID</th>
        <th>ADMN NO</th>
        <th>FATHER</th>
        <th>DATE - BIRTH</th>
        <th>CLASS</th>
        <th>HOUSE NAME</th>
        <th>PLACE</th>
        <th>CONTACT</th>
        <th>ADMISSION YEAR</th>
          <th>---</th>

<?php
                    include 'connection.php';

                    $field = $_POST['field'];
                    $sel=$_POST['searchname'];

                     $sql = "SELECT * FROM `student_reg_list` where `$field` = '$sel' ";
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
                     <td><?php echo $row[5] ; ?></td>
                     <td><?php echo $row[2] ; ?></td>
                     <td><?php echo $row[6] ; ?></td>
                     <td><?php echo $row[7] ; ?></td>
                     <td><?php echo $row[8] ; ?></td>
                    <td style="background: red;"><a style="color: white;text-decoration: none;" href="delete.php?delete=<?= $row[9];?>"> delete</a></td>
                   </tr>
                     <?php
                               }} 
                               ?>

</table>
</body>
</html>