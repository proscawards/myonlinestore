<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 2005;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_clothing.php">Women's Clothing</a>/<a href="#">Jogger</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
            <div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2005_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2005_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2005_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2005_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2005_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Calvin Klein</div>
				<div class="itemSubTitle">A-Outline Logo Jogger</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 3; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 99 Ratings
				</span><br/>
				<span class="itemPrice">RM 549.95</span>
				<div class="itemDesc">
					<a>Brand print cropped joggers. Mid rise. Regular fit. Elasticised waist. Side pockets. Cotton
                    For more information, please click
                    <a href="https://www.zalora.com.my/calvin-klein-a-outline-logo-jogger-calvin-klein-jeans-black-2287159.html">here</a>.
                    </a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Calvin Klein<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: 100% Cotton<br/>
                    Size: Model wears a S and is 175cm tall
					</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black'];
							$image_D = ["images/mencloth_black.jpg"];
							$size_D = ["exSmall","small","medium","large","exLarge"];
							form_data($color_D,$image_D,$size_D, $itemID);
						 ?>
				</form>
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
