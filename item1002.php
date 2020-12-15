<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1002;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_clothing.php">Men's Clothing</a>/<a href="#">Formal Wear</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1002_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1002_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1002_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1002_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1002_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Men Black Solid Single-Breasted Formal Blazer</div>
				<div class="itemSubTitle">Slim Fit</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 186.49</span>
				<div class="itemDesc">
				<a>
					Black formal blazer, has a notched lapel, single-breasted with a double-button closure, long sleeves, three pockets, and a double-vented back.
					For more information, please visit <a href="https://www.myntra.com/blazers/peter-england/peter-england-men-black-solid-single-breasted-formal-blazer/2423756/buy">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Peter England<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: 65% Polyester, 35% Viscose Dry-clean<br/>
					Size: The model (height 6') is wearing a size 40.</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black','Burgundy'];
							$image_D = ["images/mencloth_black.jpg","images/mencloth_burgundy.jpg"];
							$size_D = ["exSmall","small","medium","large","exLarge"];
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
