<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 5002;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="health.php">Health & Beauty</a>/<a href="#">Whitening</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item5002.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item5002.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">GNC</div>
				<div class="itemSubTitle">L-Glutathione 50mg (50 vegetabs)</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 55 Ratings
				</span><br/>
				<span class="itemPrice">RM 80.90</span>
				<div class="itemDesc">
				<a>- Anti-aging & whitening</br>
                - Detoxification and antioxidant protection</br>
                - Better immune system function</br>
                <b>50 mg of Glutathione per tablet:</b></br>
                - Glutathione is a tri-peptide (protein molecule) consisting of 3 amino acids: glutamate,
                cysteine, and glysine</br>
                - Glutathione is both supplied by the diet and produced by the body. Liver produces the
                highest amounts because of its central role in detoxification</br>
                - Body’s glutathione may be depleted due to aging especially after 30’s and unhealthy
                lifestyle, ie: smoking, alcohol, etc.</br>
				For more information, please visit <a href="https://www.gnclivewell.com.my/en/gnc-l-glutathione-50mg-for-whitening-00101970.html?catId=beauty_whitening">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>GNC<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Direction of use: </label><br/>
					<a>As a dietary supplement, take one to four tablets daily</a></br>
				</div></br>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = null;
							$image_D = null;
							$size_D = null;
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
<!-- </div><br/>
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
