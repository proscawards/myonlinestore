<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 3001;
if (!isset($_SESSION['success']) || $_SESSION['success'] != true){}
else{$cartNo = $_SESSION['cartNo'];}
include "data_item.php";
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="elec_access_dev.php">Electronic Accessories & Devices</a>/<a href="elec_desklap.php">Desktops & Laptops</a>/<a href="#">Desktops</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item3001_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item3001_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item3001_2.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Apple</div>
				<div class="itemSubTitle">Apple iMac 21.5" 3.6GHZ 1TB with Retina 4K Display MRT32ZP/A</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 590 Ratings
				</span><br/>
				<span class="itemPrice">RM 5599.00</span>
				<div class="itemDesc">
				<a>The all-in-one for all. If you can dream it, you can do it on iMac.
                It’s beautifully designed, incredibly intuitive and packed with powerful tools that
                let you take any idea to the next level. And the new 27‑inch model elevates the experience
                in every way, with faster processors and graphics, expanded memory and storage, enhanced audio
                and video capabilities, and an even more stunning Retina 5K display. It’s the desktop that
                does it all — better and faster than ever.</br>
				For more information, please visit <a href="https://www.apple.com/my/shop/buy-mac/imac/21.5-inch-3.6ghz-quad-core-processor-256gb#">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Apple<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>3.6GHz quad-core 8th-generation Intel Core i3 processor</br>
                    8GB DDR4 memory</br>
                    Radeon Pro 555X with 2GB of GDDR5 memory</br>
                    256GB SSD storage</br>
                    Magic Mouse 2</br>
                    Magic Keyboard - US English
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Silver'];
							$image_D = ["images/menacc_silver.jpg"];
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
	<button class="choice-btn"  type="submit" name="choice-btn" title="Silver"><img src = "images/menacc_silver.jpg"/></button>
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
