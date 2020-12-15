<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1016;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_access.php">Men's Accessories</a>/<a href="#">Necktie</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1016_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1016_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1016_2.jpg" onclick="myFunction(this);">
					  </div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Mumu Weddings - Desert Solid Black Tie</div>
				<div class="itemSubTitle"></div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>

				<span class="itemPrice">RM 91</span>
				<div class="itemDesc">
				<a>
					For more information, please visit <a href="https://www.thetiebar.com/product/31960sk">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Tie Bar<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Material: Handmade of 100% Woven Silk<br/>
					Size Guideline: Skinny - 2.5 in. wide x 58 in. long</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black','Navy','Antique Rose','Deep Jade','Merlot','Wedding Cake'];
							$image_D = ["images/menacc_black.jpg","images/menacc_navy.jpg","images/menacc_arose.jpg","images/menacc_jade.jpg","images/menacc_merlot.jpg","images/menacc_cake.jpg"];
							$size_D = ["One Size Only"];
														form_data($color_D,$image_D,$size_D,$itemID);
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
