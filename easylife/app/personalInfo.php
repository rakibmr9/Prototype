<?php require_once "../service/validation_service.php"; ?>
<?php require_once "../data/member_data_access.php"; ?>

<?php
	$memberId=$_GET['memberID'];
	$member=getMemberByIdFromDB($memberId)
?>
<?php 

?>
<html>
	<head>
		<title>Personal Information</title>
	</head>
	<body>
		<table  width="100%" bgcolor="Gainsboro">
			<tr>
				<td align="center">Trusted Online Shopping Site In Bangladesh</td>
				<td align="center"><img src="resources/contact.jpg" height="30" width="30"/>01851-851405,01759-833364(10am-10pm)</td>
				<td align="center"><a href="howToBuy.php">How To Buy</a></td>
				
			</tr>
			<tr>
				<td align="center" colspan="3">
					<table  width="100%" bgcolor="WhiteSmoke" height="80" >
						<tr>
							<td align="center"><a href="home.php"><img src="resources/e.jpg" height="60" width="120" /></a></td>
							<td align="center"><input type="text"/><input type="submit" value="Search Here"/></td>
							<td align="center">(0)items<a href="shoppingCart.php"><img src="resources/c.jpg" height="30" width="30"/></a></td>
							<td align="center"><a href="trackProduct.php">Track Product</a></td>
							<td align="center">
								<table >
									<tr rowspan="2">
										<td><img src="resources/m.jpg" height="30" width="30"/></td>
										<td><a href="Registration.php">Registartion</a></td>
									</tr>
									<tr>
										<td><a href="home.php">Log Out</a></td>
										<td><a href="logIn.php">Log In</a></td>
									</tr>
									
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="600" >
				<td colspan="3" align="center">
				<fieldset>
					<legend><b>Personal Info</b></legend>
					
					<table height="500">
						<tr>
							<td >Name </td>
							<td colspan="2"> <label> <?=$member['Name']?></label> </td>
						</tr>
						
						<tr>
							<td >Email </td>
							<td colspan="2"> <label><?=$member['Email']?></label> </td>
						</tr>
						<tr>
							<td >Status </td>
							<td colspan="2"> <label><?=$member['Status']?></label> </td>
						</tr>
						<tr>
							<td >Registered </td>
							<td colspan="2"> <label><?=explode(" ",$member['Member_Since'])[0]?></label> </td>
						</tr>
						
						
						<tr>
							<td ><a href="personalInfoChange.php?memberID=<?=$member['Member_ID']?>"><button>Edit</button></a></td>
							<td ><a href="changePassword.php?memberID=<?=$member['Member_ID']?>"><button>Change Password</button></a></td>
							<td ><a href="home.php?memberID=<?=$member['Member_ID']?>"><button>Change Password</button></a></td>
						</tr>
					
					</table>
				</fieldset>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"  bgcolor="WhiteSmoke ">
					<table>
						<tr>
							<td ><a href="https://www.facebook.com/"><img src="resources/f.jpg" height="30" width="30" /></a>
							<a href="https://www.instagram.com/"><img src="resources/i.jpg" height="30" width="30" /></a>
							<a href="https://twitter.com/"><img src="resources/t.jpg" height="30" width="30" /></a>
							<a href="https://www.youtube.com/"><img src="resources/y.jpg" height="30" width="30" /></a></td>
							
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<table width="100%">
						<tr>
							<td align="center">
								<p><b>Information</b></p>
								<a href="aboutUs.php">About Us</a></br>
								<a href="contactUs.php">Contact Us</a>
							</td>
							<td align="center">
								<p><b>Customer Serviece</b></p>
								<a href="securityPolicy.php">Security Policy</a></br>
								<a href="shipping.php">Shipping & Replacement</a></br>
								<a href="privacyPolicy.php">Privacy Policy</a></br>
								<a href="termsOfuse.php">Terms Of Use</a>
							</td>
							<td align="center">
								<p><b>My Account</b></p>
								<a href="personalInfo.php">Personal Info</a></br>
								
								<a href="order.php">Orders</a></br>
								<a href="shoppingCart.php">Shopping Cart</a></br> <a href="report.php">Report</a></br>
							</td>
							<td align="center">
								<p><b>Visit Us</b></p>
								<img src="resources/l.jpg" height="20" width="20" />Dhanmondi, Dhaka-1205 </br>
								<img src="resources/mail.jpg" height="20" width="20" />admin@easylife.com </br>
								<img src="resources/mobile.jpg" height="20" width="20" />09636-102030
								
							</td>
						</tr>
						
					</table>
						<tr>
							<td align="center" colspan="3"><img src="resources/bkash.jpg" height="40" width="40" />
							<img src="resources/rocket.jpg" height="40" width="40" /></td>
						</tr>
						<tr>
							<td align="center">Powered By easylife</td>
							<td></td>
							<td align="center">Copyright &copy 2017 easylife.com. All rights reserved. 2017 </td>
						</tr>
				</td>
			</tr>
		
		</table>
	</body>

</html>

