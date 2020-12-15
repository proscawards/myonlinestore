<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 2012;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_shoes.php">Women's Shoes</a>/<a href="#">Slippers</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2012_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2012_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2012_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2012_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2012_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">BALENCIAGA</div>
				<div class="itemSubTitle">Balenciaga Logo Printed Women's Flip Flops in Black</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 3 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 3420.00</strike> <span class="glow" title="Offer Price!"><a class="glowText">RM 2310</a></span></span>
				<div class="itemDesc">
				<a>Please notice that Photos and Measurements are for reference only, colors may
                have chromatic aberration and the measurements may vary according to brand and style.
                The real object should be considered as final.
                For more information, please visit <a href="https://www.zalora.com.my/balenciaga-balenciaga-logo-printed-women-s-flip-flops-in-black-black-2145667.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>BALENGIAGA<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Material: Leather</br>
                    Made in Italy</br>
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black'];
							$image_D = ["images/menshoe_Black.jpg"];
							$size_D = ["28","29","30","31","32","33","34","35","36","37","38","39","40"];
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
