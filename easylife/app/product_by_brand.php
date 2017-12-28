<?php session_start(); ?>
<?php require_once "../service/product_serviec.php"; ?>
<?php
	$brand=$_GET['brand'];
	$products=getProductsByBrand($brand);

	if(isset($_COOKIE['user_qty']))
	{

		$noOfProduct=count($_COOKIE['user_qty']);
	}
	else
	{
		$noOfProduct=0;
	}
	if(isset($_SESSION['member_name']))
	{
		$memberName=$_SESSION['member_name'];
		$memberID=$_SESSION['member_id'];
	}
	else
	{
		$memberID="";
	}
?>

<html>
	<head>
		<title>Men</title>
	</head>
	<body>
		<table   width="100%" bgcolor="Gainsboro" >
			<tr height="20">
				<td align="center">Trusted Online Shopping Site In Bangladesh</td>
				<td align="center"><img src="resources/contact.jpg" height="30" width="30"/>01851-851405,01759-833364(10am-10pm)</td>
				<td align="center"><a href="howToBuy.php">How To Buy</a></td>
				
			</tr>
			<tr height="80">
				<td align="center" colspan="3">
					<table   width="100%" bgcolor="WhiteSmoke " height="80">
						<tr>
							<td align="center"><a href="home.php"><img src="resources/e.jpg" height="60" width="150" /></a></td>
							<td align="center"><input size="40" name="search" placeholder="Search products"/><input type="submit" value="Search"/></td>
							<td align="center">(<?=$noOfProduct?>)items<a href="shoppingCart.php"><img src="resources/c.jpg" height="30" width="30"/></a></td>
							<td align="center"><a href="trackProductSearch.php"><button>Track Product</button></a></td>
							<td align="center">
								<table  >
									<tr>
										<td><img src="resources/m.jpg" height="30" width="30"/></td>
										
										<?php if($memberID=="") { ?>
										<td><a href="Registration.php">Registartion</a></td>
										<?php } ?>
										<?php if($memberID!="") { ?>
										<td><a href="personalInfo.php?memberID=<?=$memberID?>"><?=$memberName?></a></td>
										<?php } ?>
										
									</tr>
									<tr align="right">
										<?php if($memberID!="") { ?>
										<td colspan="2"><a href="LogOut.php">Log Out</a></td>
										<?php } ?>
										
										<?php if($memberID=="") { ?>
										<td colspan="2"><a href="logIn.php">Log In</a></td>
										<?php } ?>
									</tr>
									
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<table width="100%">
						<tr>
							<td width="20%" valign="top">
								<table height="400" width="100%" valign="top" bgcolor="LightCoral    ">
								<tr height="50">
									<td><h2><?=$brand?></h2><hr/></td>
								</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;" >
												<option value="home.php">Winter Collection</option>
												<option value="product_by_category.php?catagory=Gents Winter Collection">Gents Winter Collection</option>
												<option value="product_by_category.php?catagory=Ladies Winter Collection">Ladies Winter Collection</option>
												<option value="product_by_category.php?catagory=Kids Winter Collection">Kids Winter Collection</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_category.php?catagory=Womens Clothing">Womens Clothing</option>
												<option value="product_by_category.php?catagory=Hijab And Dupatta">Hijab And Dupatta</option>
												<option value="product_by_category.php?catagory=Saree">Saree</option>
												<option value="product_by_category.php?catagory=Three Piece">Three Piece</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_category.php?catagory=Mens Clothing">Mens Clothing</option>
												<option value="product_by_category.php?catagory=Shirt">Shirt</option>
												<option value="product_by_category.php?catagory=Panjabi">Panjabi</option>
												<option value="product_by_category.php?catagory=Pant">Pant</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_category.php?catagory=T-Shirt">T-Shirt</option>
												<option value="product_by_category.php?catagory=T-Shirt">T-Shirt</option>
												<option value="product_by_category.php?catagory=Trouser">Trouser</option>
												<option value="product_by_category.php?catagory=Cap">Cap</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_category.php?catagory=Accessories">Accessories</option>
												<option value="product_by_category.php?catagory=Ear Rings">Ear Rings</option>
												<option value="product_by_category.php?catagory=Money Bag">Money Bag</option>
												<option value="product_by_category.php?catagory=Watch">Watch</option>
												<option value="product_by_category.php?catagory=Necklace">Necklace</option>
												<option value="product_by_category.php?catagory=Sunglass">Sunglass</option>
												<option value="product_by_category.php?catagory=Bag">Bag</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_category.php?catagory=Footwear">Footwear</option>
												<option value="product_by_category.php?catagory=Mens Footwear">Mens Footwear</option>
												<option value="product_by_category.php?catagory=Womens Footwear">Womens Footwear</option>
												<option value="product_by_category.php?catagory=Kids Footwear">Kids Footwear</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="product_by_brand.php?brand=Brand" <?php if($brand=="Brand"){ ?> selected <?php } ?>>Brand</option>
												<option value="product_by_brand.php?brand=Easy" <?php if($brand=="Easy"){ ?> selected <?php } ?>>Easy</option>
												<option value="product_by_brand.php?brand=Eacstasy" <?php if($brand=="Eacstasy"){ ?> selected <?php } ?>>Eacstasy</option>
												<option value="product_by_brand.php?brand=Aarong" <?php if($brand=="Aarong"){ ?> selected <?php } ?>>Aarong</option>
												<option value="product_by_brand.php?brand=Yellow" <?php if($brand=="Yellow"){ ?> selected <?php } ?>>Yellow</option>
											</select>
										</td>
									</tr>
								</table>
								
							</td>
							<td align="center" width="80%">
								<table width="100%">
									<tr>
										<td >
											
										</td>
									</tr>
									<tr>
										<td width="800">
											<table align="center" width="100%" bgcolor="white">
											<?php $count=0; ?>
											
											<?php  for($p=1;$p<=(count($products)/3);$p++) { ?>
												<tr>
												<?php for($q=1;$q<=3;$q++) { ?>
													<td align="center" height="300" width="33%" <?php if($q==1) {?> bgcolor="PaleGreen"  <?php } ?>  <?php if($q==2) {?> bgcolor="DarkSalmon"  <?php } ?>  <?php if($q==3) {?> bgcolor="SkyBlue"  <?php } ?>  >
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
													<?php $count++; } ?>
												</tr>
											<?php } ?>
												
												
											<?php if(((count($products)%3)==1)|| count($products)==1) {?>
												<tr>
													<td align="center" height="300" width="33%" bgcolor="PaleGreen">
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
												</tr>
											<?php } ?>
												
												
											<?php if(((count($products)%3)==2)||count($products)==2) {?>
												<tr>
													<?php for($q=1;$q<=2;$q++) { ?>
													<td align="center" height="300" width="33%" <?php if($q==1) {?> bgcolor="PaleGreen"  <?php } ?> <?php if($q==2) {?> bgcolor="DarkSalmon"  <?php } ?> >
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
													<?php $count++; } ?>
												</tr>
												<?php } ?>
												
											
											<?php if((count($products))==0){?>
												<tr>
													<td align="center" height="300" width="33%">
														<h2>Sorry!!!There has no product in this section.</h2>
														
													</td>
												</tr>
											<?php } ?>											
												
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
			<tr bgcolor="WhiteSmoke ">
				<td colspan="3" align="center">
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
								<a href="<?php if($memberID!="") { ?>personalInfo.php<?php } ?><?php if($memberID=="") { ?>login.php<?php } ?>">Personal Info</a></br>
								
								<a href="order.php">Orders</a></br>
								<a href="shoppingCart.php">Shopping Cart</a></br>
								<a href="<?php if($memberID!="") { ?>report.php<?php } ?><?php if($memberID=="") { ?>login.php<?php } ?>">Report</a></br>
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