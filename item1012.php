<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1012;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_shoes.php">Men's Shoes</a>/<a href="#">Basketball Shoes</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1012_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1012_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1012_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1012_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1012_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Nike Air Zoom BB NXT</div>
				<div class="itemSubTitle"></div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 749</span>
				<div class="itemDesc">
				<a>
					Keep your focus on the game in the new Air Zoom BB NXT from Nike Basketball. It's designed to help players feel light, secure and responsive. You get energy back with every step, helping to turn your force into momentum when it matters most.
					For more information, please visit <a href="https://www.nike.com/my/t/air-zoom-bb-nxt-basketball-shoe-wRmJMz/CK5707-001">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Nike<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Three layers of Nike React foam consist of two layers in the midsole and a sockliner.</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black/Lime Green','White/Flash Crimson/Hyper Violet'];
							$image_D = ["images/menshoe_black&lime.jpg","images/menshoe_white&purple.jpg"];
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
