<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 4002;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="kitappli.php">Kitchen Appliance & Utensils</a>/<a href="#">Cookings</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item4002_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item4002_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item4002_2.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Elba</div>
				<div class="itemSubTitle">Elba EGH-E9522G(GR) 2 Burners Built in Glass Hob</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 4; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 351 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 1099.00</strike><span class="glow" title="Offer Price!"><a class="glowText"> RM 963.00</a></span></span>
				<div class="itemDesc">
				<a>Safety Valve</br>
                High Quality Tempered Glass</br>
                Embraced Aluminium Frame Protection</br>
				For more information, please visit <a href="https://www.senheng.com.my/elba-egh-e9522g-gr-2-burners-built-in-glass-hob.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Elba<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Number of burner: 2</br>
                    Pan Support: Cast Iron</br>
                    Wok Stand: Cast Iron</br>
                    Safety Valve: Yes</br>
                    Glass Material: Tempered Glass</br>
                    Aluminium Frame: Yes</br>
                    Product Dimension (mm): (W x D) 860 x 500</br>
                    Built in Dimension  (mm): (W x D) 750 x 470
                    </a>
				</div><br/>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<?php $color_D = ['Black'];
						$image_D = ["images/menacc_black.jpg"];
						$size_D = ["One Size Only"];
						form_data($color_D,$image_D,$size_D,$itemID);
					 ?>
			</form>
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
