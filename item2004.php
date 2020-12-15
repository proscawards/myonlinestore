<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 2004;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_clothing.php">Women's Clothing</a>/<a href="#">Jeans</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
            <div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2004_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2004_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2004_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2004_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2004_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Guess</div>
				<div class="itemSubTitle">Jennifer Lopez x Guess Gwen Super High Rise Corset Jeans</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 98 Ratings
				</span><br/>
				<span class="itemPrice">RM 599.95</span>
				<div class="itemDesc">
					<a>Button detail corset style denim skinny jeans. Part of the Jennifer Lopez Edit collection.
                    High rise. Unlined. Skinny fit. Back zip fastening. Cotton blend.
                    For more information, please click
                    <a href="https://www.zalora.com.my/guess-jennifer-lopez-x-guess-gwen-super-high-rise-corset-jeans-white-2203768.html">here</a>.
                    </a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Guess<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: 78% Cotton, 15% Lyocell, 5% Polyester, 2% Elastane<br/>
					</a>
				</div>
					<div>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<?php $color_D = ['White'];
								$image_D = ["images/menpants_white.jpg"];
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
