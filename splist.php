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
    background-color: lightgreen;
    font-weight: bold;
    color: black;
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
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li style="float: left;"><a href="reg_search.html">Search</a></li>
            <li style="float: left;"><a href="staff.html">Staff</a></li>
            <li style="float: left;"><a href="special.html">Red Marks</a> </li>
            <li><a>SELECTED STUDENTS</a></li>
       </ul>
        </div>
        </div>
    </section> 
<table>
<th>ADMISSION NO</th>
<th>NAME</th>
<TH>CLASS</TH>
<th>PLACE</th>
<th>----</th>

<?php
 include 'connection.php';
$spcl=$_POST['sp'];
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$splist=" SELECT * FROM special LEFT JOIN student_reg_list ON special.admn_num=student_reg_list.admn_num WHERE sp='$spcl' ";
$run=mysqli_query($conn,$splist);

$spcont = " SELECT count(*) AS total FROM special WHERE sp='$spcl'  ";
$sresult=mysqli_query($conn,$spcont);
$svalues=mysqli_fetch_assoc($sresult);
$srows=$svalues['total'];



 if ($result=mysqli_query($conn,$splist))
                        {
                          echo  " <h3>  " .$spcl. " catagory are listed below [ ".$srows." ] </h3>" ;
                     while ($row=mysqli_fetch_row($result))
                      { 
                     ?> <tr>
                     <td><?php echo $row[1] ; ?></td>
                     <td><?php echo $row[3] ; ?></td>
                     <td><?php echo $row[8] ; ?></td>
                     <td><?php echo $row[9]; ?></td>
                     <td style="background: red;"><a style="color: white;text-decoration: none;" href="delete.php?sp=<?= $row[2];?>"> delete</a></td>

                      </tr>

                     <?php
                       }} 
                      ?>

<?php 
mysqli_close($conn);

?>


</body>
</html>