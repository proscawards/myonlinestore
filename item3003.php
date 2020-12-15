<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 3003;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="elec_access_dev.php">Electronic Accessories & Devices</a>/<a href="#">Smartphones</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item3003.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item3003.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Apple</div>
				<div class="itemSubTitle">Iphone 11 Pro Max</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 57 Ratings
				</span><br/>
				<span class="itemPrice">RM 6899.00</span>
				<div class="itemDesc">
				<a>A transformative triple-camera system that adds lots of capability,
                without complexity. An unprecedented leap in battery life. And a mind‑blowing chip
                that doubles down on machine learning and pushes the boundaries of what a smartphone
                can do. Welcome to the first iPhone powerful enough to be called Pro.
				For more information, please visit <a href="https://www.senheng.com.my/hp-envy-x360-laptop-13-3-inch-8gb-ram-512gb-ssd-amd-r5-4500u.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Apple<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Super Retina XDR display</br>
                    6.5-inch (diagonal) all-screen OLED Multi‑Touch display</br>
                    A13 Bionic chip</br>
                    Third‑generation Neural Engine</br>
                    512GB Storage</br>
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Midnight Green','Space Grey','Silver1','Gold1'];
							$image_D = ["images/menacc_mgreen.jpg","images/menacc_sgray.jpg","images/menacc_silver1.jpg","images/menacc_gold1.jpg"];
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
	<button class="choice-btn"  type="submit" name="choice-btn" title="Midnight Green"><img src = "images/menacc_mgreen.jpg"/></button>
						<button class="choice-btn"  type="submit" name="choice-btn" title="Space Grey"><img src = "images/menacc_sgray.jpg"/></button>
						<button class="choice-btn"  type="submit" name="choice-btn" title="Silver1"><img src = "images/menacc_silver1.jpg"/></button>
						<button class="choice-btn"  type="submit" name="choice-btn" title="Gold1"><img src = "images/menacc_gold1.jpg"/></button>
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
