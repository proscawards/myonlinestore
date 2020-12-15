<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 2001;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_clothing.php">Women's Clothing</a>/<a href="#">Sweatshirt</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2001_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2001_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2001_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2001_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2001_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Superdry</div>
				<div class="itemSubTitle">Premium Block Portland Crew Sweatshirt</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 3; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 150 Ratings
				</span><br/>
				<span class="itemPrice">RM 299.95</span>
				<div class="itemDesc">
					<a>Graphic front print sweatshirt.Round neckline.Unlined.Regular fit.Slip on style.Cotton blend For more information, please click
                    <a href="https://www.zalora.com.my/superdry-premium-block-portland-crew-sweatshirt-pink-2162833.html">here</a>.
                    </a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Zalora<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: 80% Cotton, 20% Polyester<br/>
					Size: Model wears an S and is 174cm tall</a>
					<div>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<?php $color_D = ['Pink'];
								$image_D = ["images/mencloth_pink.jpg"];
								$size_D = ["exSmall","small","medium","large","exLarge"];
								form_data($color_D,$image_D,$size_D, $itemID);
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
