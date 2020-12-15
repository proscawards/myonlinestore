<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 6004;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="sport.php">Sport & Lifestyles</a>/<a href="sport_outdoor.php">Outdoor</a>/<a href="#">Fishing</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item6004_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item6004_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6004_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6004_3.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6004_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">CAPERLAN</div>
				<div class="itemSubTitle">LURE ESSENTIAL TELE 240 LURE FISHING SET  </div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 15 Ratings
				</span><br/>
				<span class="itemPrice">RM 79.00</span>
				<div class="itemDesc">
				<a><b>MADE FOR</b></br>
                Designed for novice anglers lure fishing in the sea or freshwater.</br>
                Compact, this versatile set efficiently casts and animates lures. By adapting the rig, this
                set will also be very efficient for fishing at sea.</br>
				For more information, please visit <a href="https://www.decathlon.my/p/8237127_lure-essential-tele-240-lure-fishing-set.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>CAPERLAN<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specifications: </label><br/>
					<a>Gender: N/A</br>
                    Sport practices: Predator Fishing</br>
                    Rod Type: Telescopic cane</br>
                    Length: 2.4m</br>
                    Morphology: Left-handed, Right-handed</br>
                    Level of Practice: All Levels</br>
                    Place of Practise: Fresh water</br>
                    Features: - Length: 1.80 m - Dismantled length: 0.46 m - Casting weight: 10 g - 20 g -
                    Weight: 110 g (rod) - Line retrieve per crank: 0.64 m - Capacity: 180m x 30/100</br>
                    Composition: - telescopic - 6 sections - fibreglass rod - Structure : 100.0% Glass - Fiber (FG)</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ["Red Black"];
							$image_D = ["images/menacc_redblack.jpg"];
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
