<?php 

include 'connection.php';


$sql= "CREATE TABLE special(sp varchar(50),admn_num varchar(20),
       FOREIGN KEY (admn_num) REFERENCES student_reg_list(admn_num)) ";

 mysqli_query($conn,$sql);



?>