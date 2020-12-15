<?php
	require "header.php";
	require "includes/dbh.inc.php";
	$itemID = 2014;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_access.php">Women's Accessories</a>/<a href="#">Ring</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item2014_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item2014_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2014_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2014_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item2014_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Swarovski</div>
				<div class="itemSubTitle">Swarovski Attract Motif Ring</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 184 Ratings
				</span><br/>
				<span class="itemPrice">RM 499.00</span>
				<div class="itemDesc">
				<a>-Dazzling ring with brilliant square-cut stone<br/>
                -Rhodium plated<br/>
                -Slip on style<br/>
                -Non-adjustable<br/>
				For more information, please visit <a href="https://www.zalora.com.my/swarovski-attract-motif-ring-white-2052168.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Swarovski<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>
                    Material: Rhodium Plated
                    Made in Thailand
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Silver'];
							$image_D = ["images/menacc_silver.jpg"];
							$size_D = ["One Size Only"];
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
