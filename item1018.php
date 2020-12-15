<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1018;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_access.php">Men's Accessories</a>/<a href="#">Wallet</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1018_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1018_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1018_2.jpg" onclick="myFunction(this);">
					  </div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">3-IN-1 WALLET</div>
				<div class="itemSubTitle"></div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">RM 1250</span>
				<div class="itemDesc">
				<a>
					Crafted of rugged sport calf leather, this double billfold style has a removable id insert that can be used on its own—ideal for days and nights when you only need to carry a few cards.
					For more information, please visit <a href="https://malaysia.coach.com/goods/97739">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Coach<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Sport calf leather<br/>
					Eight credit card slots<br/>
					Full-length bill compartments<br/>
					Removable insert with ID window and two credit card slots<br/>
					Dimension: 11cm (L) x 9.5cm (H) x 2cm (W)</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Saddle','Black'];
							$image_D = ["images/menacc_saddle.jpg","images/menacc_black.jpg"];
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
