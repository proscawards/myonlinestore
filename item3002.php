<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 3002;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="elec_access_dev.php">Electronic Accessories & Devices</a>/<a href="elec_desklap.php">Desktops & Laptops</a>/<a href="#">Laptops</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item3002_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item3002_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item3002_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item3002_3.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item3002_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">HP</div>
				<div class="itemSubTitle">HP ENVY x360 Laptop 13.3 Inch (8GB RAM/512GB SSD/AMD R5-4500U)</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 50 Ratings
				</span><br/>
				<span class="itemPrice">RM 3799.00</span>
				<div class="itemDesc">
				<a>Ready whenever inspiration strikes. Bring true-to-life, vibrant visuals to your screen
                anywhere, anytime with this versatile, convertible PC with long battery life. Simultaneously
                use the touch and pen input to capture every detail of your sketches and rest easy knowing your
                creations are under wraps until you’re ready to share them.</br>

                <b>The power to bring your creations to life</b></br>
                With an AMD Ryzen Series Processor[1] with Radeon Graphics, a long battery life, ample SSD
                storage and HP Command Center, you get performance to meet your creative needs.</br>

                <b>Thoughtfully designed</b></br>
                Ideas come to life in vibrant color with the high definition, micro-edge display. The 360
                degree hinge adapts so can capture every intricate sketch with precision.</br>

                <b>Privacy for your peace of mind</b></br>
                Keep it confidential with an unhackable camera shutter and dedicated microphone mute button.</br>
				For more information, please visit <a href="https://www.senheng.com.my/hp-envy-x360-laptop-13-3-inch-8gb-ram-512gb-ssd-amd-r5-4500u.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Hewlett-Packard<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>13.3-inch</br>
                    8GB RAM</br>
                    512GB SSD</br>
                    AMD R5-4500U
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black'];
							$image_D = ["images/menacc_black.jpg"];
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
	<button class="choice-btn"  type="submit" name="choice-btn" title="Black"><img src = "images/menacc_black.jpg"/></button>
						<button class="choice-btn"  type="submit" name="choice-btn" title="Tan"><img src = "images/menacc_tan.jpg"/></button>
						<button class="choice-btn"  type="submit" name="choice-btn" title="Photon"><img src = "images/menacc_photon.jpg"/></button>
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
