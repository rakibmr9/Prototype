<?php require_once "../../data/product_data_access.php"; ?>

<html>
	<table >
			<tr >
				<td width="40%">
					<p>Search by:<p><select>
						<option>Product Code</option>
						<option>Name</option>
						<option>Price</option>
					</select>
					
				</td>
				<td>
					<input type="text"/><input type="submit" value="Search Product"/>
				</td>
			</tr>
		</table>
		<br>
		<br>
	<fieldset >
							<legend><h3>Products</h3></legend>
								<table border=1 width=100%>
									<tr>
										<th>Product Code</th>
										<th>Product Name</th>
										<th>Total Sells</th>
										<th>Price</th>
										<th>Last Purchase</th>
										<th>Remaining Quantity</th>
									</tr>
							<?php
									$products=getAllProductsFromDB();
									foreach($products as $product)
									
									
							echo	"<tr>
										<td>".$product['Product _Code']."</td>
										<td>".$product['Name']."</td>
										<td>".$product['Total_Sells']."</td>
										<td>".$product['Price']."</td>
										<td>".$product['Last_Sold']."</td>
										<td>".$product['Quantity']."</td>
										<td><a href=\"pdetails.php?ProductCode=".$product['Product _Code']."\">View</td>
										<td><a href=\"pedit.php\">edit</td>
										<td><a href=\"deleteproduct.php\">delete</td>
									</tr>";
							?>
									
								</table>
					</fieldset>
	
	<br>
</html>
