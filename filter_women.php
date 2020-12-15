<?php
	require "includes/dbh.inc.php";
	
	if (isset($_POST['Section'])) {	
		echo"
			<section class='womenSelection'>
				<div class='container'>
					<a href='womenfashion_clothing.php' class='womenFashion-btn'><img src='images/womenfashion_clothing.jpg'/></a>
					<div class='overlay'>Women's Clothing</div>
				</div>
				<div class='container'>			
					<a href='womenfashion_shoes.php' class='womenFashion-btn'><img src='images/womenfashion_shoes.jpg'/></a>
					<div class='overlay'>Women's Shoes</div>
				</div>	
				<div class='container'>				
					<a href='womenfashion_access.php' class='womenFashion-btn'><img src='images/womenfashion_access.jpg'/></a>	
					<div class='overlay'>Women's Accessories</div>
				</div>
			</section>";
	}	
	
	if (isset($_POST['PriceAsc'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' ORDER BY ITEM_PRICE ASC ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName."</a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}	
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}						
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['PriceDesc'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' ORDER BY ITEM_PRICE DESC ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['PricePromo'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_PROMO != 0.00";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['ColourBlack'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_COLOUR LIKE 'Black%' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['ColourWhite'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_COLOUR LIKE 'White%' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}	
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['ColourGreen'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_COLOUR LIKE 'Green%' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['ColourNavy'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_COLOUR LIKE 'Navy%' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}	
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['ColourPink'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_COLOUR LIKE 'Pink%' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}	
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['NameAsc'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' ORDER BY ITEM_NAME ASC ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['NameDesc'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' ORDER BY ITEM_NAME DESC";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['CatCloth'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_SUBSEC = 'Clothing'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['CatShoes'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_SUBSEC = 'Shoes'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['CatPants'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_SUBSEC = 'Pants'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (isset($_POST['CatAcc'])) {	
		$sql = "SELECT * FROM item WHERE ITEM_SECTION = 'Women' AND ITEM_SUBSEC = 'Accessories'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				echo "</div>";
			} 
		}
	}
	if (!isset($_POST['Section']) && !isset($_POST['PriceAsc']) && !isset($_POST['PriceDesc']) && !isset($_POST['PricePromo']) && !isset($_POST['CatCloth']) && !isset($_POST['CatPants']) && !isset($_POST['CatShoes']) && !isset($_POST['CatAcc']) && !isset($_POST['ColourBlack']) && !isset($_POST['ColourPink']) && !isset($_POST['ColourWhite']) && !isset($_POST['NameAsc']) && !isset($_POST['NameDesc']) && !isset($_POST['ColourGreen']) && !isset($_POST['ColourNavy'])){
		$data = "SELECT * FROM item WHERE ITEM_SECTION = 'Women'";
		$result = mysqli_query($conn, $data);
		if (mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$itemName = $row['ITEM_NAME'];
				$itemCat = $row['ITEM_CAT'];
				$itemCode = $row['ITEM_ID'];
				$itemPrice = $row['ITEM_PRICE'];
				$itemPromo = $row['ITEM_PROMO'];
				$itemColour = $row['ITEM_COLOUR'];
				$itemColourExp = explode(", ",$row['ITEM_COLOUR']);
				$itemSubSec = $row['ITEM_SUBSEC'];
				echo"
					<div class='salesContainer'>
						<div class='swapImg'>
							<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
							<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
						</div>
						<a href='item".$itemCode.".php' class='salesLabel'>".$itemName." </a><br/>";
				if ($itemPromo == 0.00){echo "<a>RM ".$itemPrice." </a>";}
				else{
					echo "<a id='offerLabel'><strike>RM ".$itemPrice." </strike></a><a> now RM ".$itemPromo." </a>";
				}		
				$length = count($itemColourExp);
				if ($itemSubSec == "Clothing"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/mencloth_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Pants"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menpants_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}
				if ($itemSubSec == "Shoes"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menshoe_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}	
				if ($itemSubSec == "Accessories"){
					for ($i = 0; $i < $length; $i++){
						echo "<img style='width:4%;' src = 'images/menacc_".$itemColourExp[$i].".jpg'/>&nbsp;";	
					}
				}							
				echo "</div>";
			} 
		}
	}
	
	mysqli_close($conn);
?>