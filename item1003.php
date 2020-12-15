<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1003;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_clothing.php">Men's Clothing</a>/<a href="#">Jacket</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1003_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1003_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1003_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1003_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1003_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">The Bomber Jacket | Uniform</div>
				<div class="itemSubTitle">Fits true to size</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 880</strike> <span class="glow" title="Offer Price!"><a class="glowText">RM 387</a></span></span>
				<div class="itemDesc">
				<a>
					A new take on the MA-1 flight jacket style.
					Ours is made of a recycled, water-resistant polyester blend and complete with magnetic closure pockets and a two-way zipper.
					For more information, please visit <a href="https://www.everlane.com/products/mens-uniform-bomber-jacket-navy?utm_source=pepperjam&utm_medium=2-112671&utm_campaign=120661&clickId=3272206063">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Everlane<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: 68% Cotton, 32% Recycled Polyester<br/>
					Size: Model is 6′0″. Wearing size S.</a>
				</div><br/>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<?php $color_D = ['Navy','Dark Slate','Black','Ochre'];
						$image_D = ["images/mencloth_navy.jpg","images/mencloth_slate.jpg","images/mencloth_black.jpg","images/mencloth_ochre.jpg"];
						$size_D = ["exSmall","small","medium","large","exLarge"];
						form_data($color_D,$image_D,$size_D, $itemID);
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
