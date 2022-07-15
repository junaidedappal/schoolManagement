<!DOCTYPE html>
<html>
<head>
	<title>Mnshaululoom Madrassa home-page</title>
</head>
<!-- here the style -->
<style >
	a{
	 text-decoration: none;
	  color: white;

	}	
	li{
		text-decoration: none;
		display: inline-flex;
		padding-right: 20px;
		font-weight: bold;
		padding: 10px;
	}
	li:hover{
        background: #e83e8c;
		}

    .leftlist li:hover{
		background: white;
        color: black;
	}
	.leftlist li{
		text-decoration: none;
		font-weight: bold;
		padding: 5px;
		color: white;
		display: flex;
		border-bottom:  1px solid white;
		padding: 10px;
        }
</style>
<!-- body starts -->
<body >
    <!-- header main -->
	<main style="padding: 0px;max-width: 1000px;margin:auto;">
	<section class="header" style="padding: 0px;">
		<div class="header_poster">
			<img style="width: 100%;" src="vkm.png">
		</div>
        <!-- navbar -->
		<div class="header_nav" style="background: #007bff; margin-top: -20px;">
		<div class="menu_list">
			<ul>
				<li>
				<a href="home.php">Home</a>
			</li>
				<li>
					<a href="payment.php">Payment</a>
				</li>

				<li>
					<a href="staff.html">Staff</a>
				</li>

			
				<li>
					<a href="special.html">Red Marks</a>
				</li>
			</ul>
		</div>
		</div>
	</section>
	

    <!-- main ends here -->
    
    <!-- body container  -->
<div class="container" style="margin-top: -15px;">
    <!-- Left container for menu list -->
	<div class="containerleft" style="width: 25%;float: left;height: 440px;background: #007bff;">
       <ul class="leftlist" style="padding: 10px;">
       	<a href="reg_search.html"><li>Search</li></a>
       	<a href="registration.html"><li> Students Registration</li></a>
       	<a href="classupgrade.html"><li>Class Updation</li></a>
       	<a href="allstud.php"><li>Students Details</li></a>
       	<a href="osf.php"><li>OSF</li></a>
       	<a href="currentpass.php"><li>Change Password</li></a>

       </ul>
	</div>
    <!-- Right container for functional body -->
	<div class="containerright" style="width:75%;height: 440px;float: left;background: url('abc.jpg');background-repeat: no-repeat;background-size: cover;">
<marquee style="font-size: 20px;color: white;">Mansha-UL-Uloom Madrassa Vattamkulam , Reg.No. : 1401 Under Samastha Kerala Islam Matha Vidyabyasa Board</marquee>
</div>
</div>
    <!-- body container  ends here -->



	</main>
</body>
</html>