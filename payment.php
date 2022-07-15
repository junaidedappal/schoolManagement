<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="paymentstyle.css">
	
</head>

<style>
	.leftlist li{
		text-decoration: none;
		font-weight: bold;
		padding: 5px;
		color: white;
		display: flex;
		border-bottom:  1px solid white;
		padding: 10px;
}
.leftlist li:hover{
	color: black;
}
	input[type="submit"],input[type="reset"]{
		padding: 5px;
		margin-top: 50px;
		width: 100px;
		font-weight: bold; 
		background-color: firebrick; 
        color: white;
        border-radius: 4px;

	}
	a{
		text-decoration: none;
	}
</style>

<body style="max-width: 1100px;margin :auto">
	<div class="top" style="background-color:silver;padding: 5px;">   
	    <div class="topleft">
				<p style="padding: 3px;font-size: 20px;color:firebrick;font-weight: bold;padding: 10px;">ACCOUNTS</p>
		</div>
			<div class="topright" style="position: absolute;top: 0px;">
			       <img src="Samastha_Flag.png" style="height: 75px;width: 140px;padding: 5px;">

			</div>
	</div>

	<nav class="navbar" style="background-color: brown;margin-top: -15px;">
	<ul class="navul">
		<li class="navli"><a href="home.php" class="anone">Home</a></li>
		<li class="navli"><a href="staff.html" class="anone">Staff</a></li>
		<li class="navli"><a href="special.html" class="anone">Red Marks</a></li>
	</ul>
	</nav>

	<div class="containerbody">
		<div class="containerbodyleft" style="background-color: brown;">
			<ul class="leftul leftlist" style="padding: 30px;margin-top: 20px;display: inline-block;">
        	<a href="reg_search.html"><li>Search</li></a>
	       <a href="allfeemon.php"><li>Monthly Fee Info</li></a>
       	<a href="allfee.php"><li> Received Fees</li></a>
        	<a href="donationlist.php"><li>Received Donation</li></a>

     </ul>
		</div>  
		<div class="containerbodyright" style="background-color: silver;">
<style>
	.formitem input[type="text"]
	{
		margin-bottom: 4px;
    }


.month_checkbox input[type="checkbox"]
{
	margin-left: 15px;
	margin-bottom: 5px;
}
td{
	padding-left: 20px;
}


</style>
<body>
<form method="POST" action="fee.php">
		<table style="margin-top: 25px;">
					<th>ADMN. No</th>
					<th>Name</th>				
				    <th>Class</th>
					<th>Date</th>
					<tr>
		<td style="padding: 10px;"><input type="number" name="reg_num" placeholder="Reg No" required=""></td>
		<td><input type="text" name="name" placeholder="Name" ></td>
		<td ><select name="class" style="width: 100px;"><option selected=""></option>
		<option value="1">1</option>	
		<option value="2">2</option>
		<option value="3">3</option>	
		<option value="4">4</option>	
		<option value="5">5</option>	
		<option value="6">6</option>	
		<option value="7">7</option>	
		<option value="8">8</option>	
		<option value="9">9</option>	
		<option value="10">10</option>	
		<option value="11">11</option>
		<option value="12">12</option>	
     	</select>
		</td>
		<td style="padding-left: 30px;"><input type="text" name="date" value="<?php echo date("d-m-Y"); ?>"></td>
		</tr>

<tr>
	<td colspan="4"><hr style="border: 0.1px solid white;"></td>
</tr>


<tr>
			<div style=" margin-left: 20px;"><td>
			<label style="font-weight: bold;">Monthly Fee</label></td><td><input type="number" name="fee_amount" placeholder="amount per mon"></td><br>

<td colspan="2">
			<div class="month_checkbox" style="background: white;margin-top: 20px;">
			
			<legend style="font-weight: bolder;">Select Month</legend>
			<input type="checkbox" name="apr" value="apr"><label>Apr</label>
			<input type="checkbox" name="may" value="may"><label>May</label>
			<input type="checkbox" name="jun" value="jun"><label>Jun</label>
			<input type="checkbox" name="jul" value="jul"><label>Jul</label><br>
			<input type="checkbox" name="aug" value="aug"><label>Aug</label>
			<input type="checkbox" name="sep" value="sep"><label>Sep</label>
			<input type="checkbox" name="oct" value="oct"><label>Oct</label>
			<input type="checkbox" name="nov" value="nov"><label>Nov</label><br>
			<input type="checkbox" name="dec" value="dec"><label>Dec</label>
			<input type="checkbox" name="jan" value="jan"><label>Jan</label>
			<input type="checkbox" name="feb" value="feb"><label>Feb</label>
			<input type="checkbox" name="mar" value="mar"><label>Mar</label>
	</div></td></tr>
<tr>
	<td colspan="4"><hr style="border: 0.5px solid white;"></td>
</tr>





<tr>
	<td><label><b>Donation</b></label></td><td><input type="number" name="donate_amount" placeholder="Amount" ></td>
    <tr><td><b>For</b></td><td colspan="2"><textarea name="description" placeholder="Purpose" style="width: 170px;"></textarea></td></tr>
    <tr><td colspan="2"></td><td>

<center>
      <input type="submit" name="" value="Submit"></center></td><td><center>
      <input type="reset" name="" value="Reset"></center></td>
    </td>
    </tr>
</div> </table> </form>                                     
</div>          
</div>

</body>

</html>