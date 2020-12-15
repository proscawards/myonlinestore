<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1009;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_shoes.php">Men's Shoes</a>/<a href="#">Running Shoes</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1009_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1009_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1009_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1009_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1009_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">ULTRABOOST 20 SHOES</div>
				<div class="itemSubTitle">TOUCH DOWN WITH CONTROL, RIDE WITH COMFORT.</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 780</span>
				<div class="itemDesc">
				<a>
					A new day. A new run. Make it your best. These high-performance shoes feature a foot-hugging knit upper. Stitched-in reinforcement is precisely placed to give you support in the places you need it most. The soft elastane heel delivers a more comfortable fit. Responsive cushioning returns energy to your stride with every footstrike for that I-could-run-forever feeling.
					For more information, please visit <a href="https://www.adidas.com.my/en/ultraboost-20-shoes/EG0694.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Adidas Performance<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: Stretchweb outsole with Continental™ Rubber<br/>
					Weight: 310 g (size UK 8.5)<br/>
					Midsole drop: 10 mm (heel 22 mm / forefoot 12 mm)<br/></a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Dash Grey/Grey Five','Signal Green/Core Black','Royal Blue/Cloud White/Scarlet','Core Black'];
							$image_D = ["images/menshoe_grey2.jpg","images/menshoe_green2.jpg","images/menshoe_blue&red.jpg","images/menshoe_black.jpg"];
							$size_D = ["28","29","30","31","32","33","34","35","36","37","38","39","40"];
														form_data($color_D,$image_D,$size_D,$itemID);
						 ?>
				</form>
				</div>
				<?php
					include "data_item.php";
				?>
			</table>
		</center>
		</fieldset>
		</div>
	</section>
</html>

<?php
	require "footer.php";
?>
