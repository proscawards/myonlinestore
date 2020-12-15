<?php
	require "header.php";
	require "includes/dbh.inc.php";
	$itemID = 1001;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_clothing.php">Men's Clothing</a>/<a href="#">Hoodie</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1001_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1001_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1001_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1001_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1001_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Men Plain Hoodie</div>
				<div class="itemSubTitle">Relaxed Fit</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 74.95</span>
				<div class="itemDesc">
					<a>
					Hoodie in soft sweatshirt fabric.
					Relaxed fit with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem.
					Soft brushed inside. For more information, please visit <a href="https://www2.hm.com/en_asia4/productpage.0685814061.html">here</a>.</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>H&M<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
					Composition: Shell: Polyester 60%, Cotton 40% Hood lining: Polyester 60%, Cotton 40%<br/>
					Size: The model is 188cm/6'2" and wears a size M.</a>
					<div>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<?php $color_D = ['Green','Pigeon Blue','White','Black','Burgundy','Pink'];
								$image_D = ["images/mencloth_green.jpg","images/mencloth_piblue.jpg","images/mencloth_white.jpg","images/mencloth_black.jpg","images/mencloth_burgundy.jpg","images/mencloth_pink.jpg"];
								$size_D = ["exSmall","small","medium","large","exLarge"];
								form_data($color_D,$image_D,$size_D, $itemID);
							 ?>
					</form>
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

<!-- <label>Colour Family: </label><br/>
<button class="choice-btn" type="submit" name="choice-btn" title="Green"><img src = "images/mencloth_green.jpg"/></button>
<button class="choice-btn" type="submit" name="choice-btn" title="Pigeon Blue"><img src = "images/mencloth_piblue.jpg"/></button>
<button class="choice-btn" type="submit" name="choice-btn" title="White"><img src = "images/mencloth_white.jpg"/></button>
<button class="choice-btn"  type="submit" name="choice-btn" title="Black"><img src = "images/mencloth_black.jpg"/></button>
<button class="choice-btn" type="submit" name="choice-btn" title="Burgundy"><img src = "images/mencloth_burgundy.jpg"/></button>
<button class="choice-btn" type="submit" name="choice-btn" title="Pink"><img src = "images/mencloth_pink.jpg"/></button>
</div><br/>
<div class="itemSize">
<label>Size:</label><br/>
<select class="itemSizeInput">
	<option class="exSmall">XS</option>
	<option class="small">S</option>
	<option class="medium">M</option>
	<option class="large">L</option>
	<option class="exLarge">XL</option>
</select><br/> -->
