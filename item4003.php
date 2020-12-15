<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 4003;
if (!isset($_SESSION['success']) || $_SESSION['success'] != true){}
else{$cartNo = $_SESSION['cartNo'];}
include "form_item.php";
?>

<html>
	<head>
		<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
		<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/itemQuantity.js"></script>
		<script type="text/javascript" src="scripts/viewImage.js"></script>
	</head>
	<section class="item">
		<div class="itemLink">
		<center>
		<fieldset class="itemField">
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="kitappli.php">Kitchen Appliance & Utensils</a>/<a href="#">Cookers</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item4003_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item4003_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item4003_2.jpg" onclick="myFunction(this);">
                      </div>
                      <div class="imageColumn">
						<img src="images/item4003_3.jpg" onclick="myFunction(this);">
                      </div>
                      <div class="imageColumn">
						<img src="images/item4003_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Xiaomi</div>
				<div class="itemSubTitle">Xiaomi 1.6L Mi Mijia Smart Rice Cooker Non Stick App Control DFB201CM XMI-INRICECOOKER</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 3; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 358 Ratings
				</span><br/>
				<span class="itemPrice">RM 409.00</span>
				<div class="itemDesc">
				<a>1.6L Capacity</br>
                400W Power</br>
                Daikin PFA Non-stick Coating</br>
                APP Intelligent Linkage</br>
				For more information, please visit <a href="https://www.senheng.com.my/xiaomi-1.6l-mi-mijia-smart-rice-cooker-non-stick-app-control-dfb201cm.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Xiaomi<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a><b>Product Details</b></br>
                    Inner Material: Alloy</br>
                    Voltage / Rated Frequency: 220V / 50Hz</br>
                    Heating Method: Heating Plate Heating</br>
                    Wireless Connections: Wi-Fi IEEE802.11b/g/n2.4GHz</br>
                    Function: App Linkage</br>
                    <b>Weight & Dimensions</b></br>
                    Product weight: 2.12 kg</br>
                    Product size: 23.9 x 21.0 x 18.6 cm</br>
                    Package weight: 2.89kg</br>
                    Package size: 24.50 x 22.50 x 20.00 cm
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['White'];
							$image_D = ["images/menacc_white.jpg"];
							$size_D = ["One Size Only"];
							form_data($color_D,$image_D,$size_D,$itemID);
						 ?>
				</form>
				</div>
				<?php
					include "data_item.php";
				?>
			</td>
			</tr>
			</table>
		</center>
		</fieldset>
		</div>
	</section>
</html>

<?php
	require "footer.php";
?>

<!-- <div class="itemChoice">
	<label>Colour Family: </label><br/>
	<button class="choice-btn"  type="submit" name="choice-btn" title="White"><img src = "images/menacc_white.jpg"/></button>
</div><br/>
<div class="itemCount">
	<label>Quantity: </label><br/>
	<div class="quantity buttons_added">
	<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
						</div>
</div>
				</br></br></br></br>
<div class="itemPurchase">
	<button class="buyNow-btn" type="submit">Buy Now</button>
	<button class="addToCart-btn" type="submit">Add To Cart</button>
</div> -->
