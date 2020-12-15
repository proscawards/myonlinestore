<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 2013;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_access.php">Women's Accessories</a>/<a href="#">Necklace</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2013_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2013_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2013_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2013_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2013_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Pandora</div>
				<div class="itemSubTitle">Pandora Signature Pave Circle Logo T-bar Heart Necklace</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 156 Ratings
				</span><br/>
				<span class="itemPrice">RM 619.00</span>
				<div class="itemDesc">
				<a> Drape yourself in elegance with the Pavé Circle Logo T-bar Heart Necklace.
                Designed to suit any mood, this adjustable necklace is hand-finished in sterling silver
                and includes sparkling clear cubic zirconia stones. The chain features two spaced-out double
                circles, the smaller micro-beaded circle nested inside the large one, which features cut-out
                hearts, pavé and Pandora logo. The T-bar, which has the logo on three sides and grooved hearts
                at the ends, allows the necklace length to be easily changed..<br/>
				For more information, please visit <a href="https://www.zalora.com.my/pandora-pandora-signature-pave-circle-logo-t-bar-heart-necklace-silver-2254825.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Pandora<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
                    Care Label: STORE jewelry separately in a tarnish-resistant, keep it away from abrasive
                    surfaces.AVOID any strong chemicals.REMOVE jewelry prior any sport activities.
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
