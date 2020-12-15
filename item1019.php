<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1019;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_access.php">Men's Accessories</a>/<a href="#">Waist Bag</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1019_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1019_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1019_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1019_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1019_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Nike Tech Hip Pack</div>
				<div class="itemSubTitle"></div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 165</span>
				<div class="itemDesc">
				<a>
					The Nike Tech Hip Pack lets you easily access and carry your gear. It features 2 zip pockets to store your stuff and an adjustable strap allowing you to customise your fit.
					For more information, please visit <a href="https://www.nike.com/my/t/tech-hip-pack-CXfVh3/BA5751-010">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Nike<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Dimensions: 53cm L x 13cm W x 20cm H<br/>
					Materials: 100% polyester<br/>
					Spot clean<br/>
					Imported<br/>
					Colour Shown: Black/Black/Anthracite<br/>
					Style: BA5751-010<br/>
					Country/Region of Origin: Vietnam,China</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black/Black/Anthracite','Pistachio Frost/Pistachio Frost/White','Night Maroon/Night Maroon/White','Pacific Blue/Pacific Blue/Photon Dust','Dusty Olive'];
							$image_D = ["images/menacc_black.jpg","images/menacc_frost.jpg","images/menacc_maroon.jpg","images/menacc_photon.jpg","images/menacc_olive.jpg"];
							$size_D = ["One Size Only"];
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
