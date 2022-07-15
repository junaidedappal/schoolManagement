<?php
error_reporting(0);
include 'connection.php';
$qry_rcv=" SELECT `rcv_no` FROM `rcv` order by `id` DESC LIMIT 1";
$get_last_rcv= mysqli_query($conn, $qry_rcv);
$data=mysqli_fetch_assoc($get_last_rcv);
$rcv_no=$data['rcv_no'];
$name=$_POST['name'];
$class=$_POST['class'];
$reg_num=$_POST['reg_num'];
$amount=$_POST['fee_amount'];
$donate_amount=$_POST['donate_amount'];
$admission_amount=$_POST['admission_amount'];
$rcv_no++;
$depositer=$_POST['depositer'];
$description=$_POST['description'];
$date=$_POST['date'];
$month="".$_POST['apr']." ".$_POST['may']." ".$_POST['jun']." ".$_POST['jul']." ".$_POST['aug']." ".$_POST['sep']." ".$_POST['oct']." ".$_POST['nov']." ".$_POST['dec']." ".$_POST['jan']." ".$_POST['feb']." ".$_POST['mar'];
$qry =" INSERT INTO `rcv`(`name`, `reg_num`, `class`, `date`, `rcv_no`,`fee_month`, `donate_amount`, `description`) VALUES ('$name','$reg_num','$class','$date','$rcv_no','$month','$donate_amount','$description')";
$run=mysqli_query($conn,$qry);
$get_fee_month=" SELECT `fee_month` FROM `rcv` WHERE `rcv_no`=$rcv_no";
$fee_data=mysqli_query($conn, $get_fee_month);
$fee_fetch=mysqli_fetch_assoc($fee_data);
$fee_string=$fee_fetch['fee_month'];
$fee_string= str_replace(' ', '', $fee_string);
$length=strlen($fee_string);
$no_of_month=$length/3;
?><div align="center">
 	<body style="height: 187mm; width: 122mm; margin-top: 10px;
 	margin-left: 8px;">
 		<table border="" style="padding: 10px;">
 			<tr>
 				<td style="text-align: center; border-width: 0px;" colspan="4"><b style="font-size: 20px;">Manshaul Uloom Madrassa (VKM)</b></td>
 			</tr>
 			<tr>
 				<td colspan="2" style="border-width: 0px;" rowspan="2">Name:<b style="text-transform: uppercase; text-align: right;"><?php echo "".$_POST['reg_num']." / ".$_POST['name'];?></b><br>
 			    class : <?php echo $_POST['class']; ?><br>
 			</td>
 			<td align="right" colspan="2" >Date: <?php echo $_POST['date']; ?></td>
 			</tr>
 		<tr>
 			<td colspan="2" align="right" >Bil.no : <?php echo $rcv_no;?></td>	
 		<tr>
 			<td style="padding-left: 0px;"><b>Particulars</b></td>
 			<td><b>Fee paid in </b></td>
 			<td><b>Total</b></td>
 			<td><b>Balance</b></td>
 		</tr>
 		<tr>
 		<td style="padding-bottom: 150px; max-width: 25ch"><?php
 			if ($_POST['admission_amount'])
 		    {
 			 echo ""."Admission "."".$admission_amount. "<br>";
 			 
 			}
 			if ($_POST['donate_amount'])
 		    {
 			 echo "".$description." ".$donate_amount. "";
 			 
 			}
 			
 			else {
              echo "<br><div align=center>-----<br>";
              echo "-----</div>";
 			}
 			?></td>
<td style="padding-bottom: 150px; max-width:15ch "><?php
 	echo "<div style='text-transform:uppercase'>";
    echo $fee_fetch['fee_month'];
    ?></td>
<td style="padding-bottom: 150px;"><?php echo $amount;?>*<?php echo $no_of_month;?>/-</td>
<td style="padding-bottom: 150px;" align="right"></td>
</tr>
<tr>
	<td colspan="2">Total :</td><td><?php  echo $total=$amount*$no_of_month+$donate_amount;?>/-</td>
	<td align="right"></td></tr></table><input type="button" onclick="window.print()" value="Print" name="" style="margin-top: 8px;" /><a href="payment.php" style="margin-left: 50px; border: 1px solid grey;border-radius: 2px; color: black;text-decoration: none;padding-left: 3px;padding-right: 3px;">Back</a><?php
    $feers=$amount*$no_of_month;
	$qryy = " UPDATE `rcv` SET `total`='$feers' WHERE `rcv_no` ='$rcv_no' ";
	$run = mysqli_query($conn,$qryy);
 

   
if(!empty($_POST['apr'])){
     
     $upapr= " UPDATE `feemon` SET `apr`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }


if(!empty($_POST['may'])){
     
     $upapr= " UPDATE `feemon` SET `may`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }


if(!empty($_POST['jun'])){
     
     $upapr= " UPDATE `feemon` SET `jun`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }


if(!empty($_POST['jul'])){
     
     $upapr= " UPDATE `feemon` SET `jul`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	


if(!empty($_POST['aug'])){
     
     $upapr= " UPDATE `feemon` SET `aug`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	


if(!empty($_POST['sep'])){
     
     $upapr= " UPDATE `feemon` SET `sep`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	
	

if(!empty($_POST['oct'])){
     
     $upapr= " UPDATE `feemon` SET `oct`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	

if(!empty($_POST['nov'])){
     
     $upapr= " UPDATE `feemon` SET `nov`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	

if(!empty($_POST['dec'])){
     
     $upapr= " UPDATE `feemon` SET `dec`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	
      

if(!empty($_POST['jan'])){
     
     $upapr= " UPDATE `feemon` SET `jan`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	

if(!empty($_POST['feb'])){
     
     $upapr= " UPDATE `feemon` SET `feb`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }
	

if(!empty($_POST['mar'])){
     
     $upapr= " UPDATE `feemon` SET `mar`='paid' WHERE `admn_num` ='$reg_num' ";
     $runapr=mysqli_query($conn,$upapr);
    }

if ($_POST['class']) {

$sqlcrdt= "SELECT `credit` FROM staff WHERE class = '$class' ";
$runcrdt=mysqli_query($conn,$sqlcrdt);
$fetch=mysqli_fetch_assoc($runcrdt);
$newcredit=$fetch['credit'];
$newamount = $amount*$no_of_month+$newcredit;
$upcrdt= " UPDATE `staff` SET credit= '$newamount' WHERE class='$class' ";
$runn=mysqli_query($conn,$upcrdt);
}
mysqli_close($conn);