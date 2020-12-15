<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1011;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_shoes.php">Men's Shoes</a>/<a href="#">Sneakers</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1011_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1011_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1011_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1011_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1011_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Chuck Taylor All Star</div>
				<div class="itemSubTitle">UNISEX HIGH TOP SHOE</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 227</span>
				<div class="itemDesc">
				<a>
					Created in 1917, the Chuck Taylor All Star sneaker was the original basketball shoe. Its use has changed over the years, but it’s still perfect in its simplicity. With its timeless silhouette, vulcanized rubber sole and unmistakable ankle patch, the Chuck is ready for you to make it your own.
					For more information, please visit <a href="https://www.converse.com/shop/p/chuck-taylor-all-star-unisex-high-top-shoe/M7650.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Converse<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>-</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['White','Black','Navy','Pink','Electric Purple','Charcoal'];
							$image_D = ["images/menshoe_white.jpg","images/menshoe_black.jpg","images/menshoe_navy.jpg","images/menshoe_pink.jpg","images/menshoe_purple.jpg","images/menshoe_charcoal.jpg"];
							$size_D = ["28","29","30","31","32","33","34","35","36","37","38","39","40"];
														form_data($color_D,$image_D,$size_D,$itemID);
						 ?>
				</form>
				</div>
				<?php
					include "data_item.php";
				?>
			</div>
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
