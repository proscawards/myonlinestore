<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 6001;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="sport.php">Sport & Lifestyles</a>/<a href="sport_indoor.php">Indoor</a>/<a href="#">Musical Instruments</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item6001_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item6001_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6001_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6001_3.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Fender</div>
				<div class="itemSubTitle">Fender Custom Shop 1958 Journeyman Relic Stratocaster Electric Guitar, Aged White Blonde</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 999 Ratings
				</span><br/>
				<span class="itemPrice">RM 15420.00</span>
				<div class="itemDesc">
				<a>Specifically engineered to capture and express the creative prowess and energy of the 1950’s
                made Fender Stratocaster, this Fender Custom Shop 1958 Journeyman Relic Strat is an exceptional
                instrument to add to your collection. The lightweight solid body electric guitar is effortless
                to play, while the hardware and electronics of this guitar deliver some awesome grinding sounds
                and ultra-low noise that is sure to impress. Product comes in Aged White Blonde. </br>
				For more information, please visit <a href="https://www.sweelee.com.my/products/fender-custom-shop-1958-journeyman-relic-stratocaster-electric-guitar-aged-white-blonde">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Fender<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specifications: </label><br/>
					<a>Series/Shape: Stratocaster, Solid Body</br>
                    Body Wood: Ash</br>
                    Bridge: 6-Saddle vintage style synchronized tremolo</br>
                    Electronics: Vintage style tuners, Handwound Fat ‘50s Single Coil (Neck, Bridge), Reverse wound/reverse-polarity Single Coil (Middle)</br>
                    Fingerboard: Maple</br>
                    Fingerboard: Radius	9.5”</br>
                    Frets: 21</br>
                    Neck Wood: Tinted Maple</br>
                    Hardware: Nickel</br>
                    Scale Length: 25.5” </br>
                    Nut Width: 1.65”</br>
                    Hard Case / Bag: Not included</br>
                    Number Of Strings: 6</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ["Blonde White"];
							$image_D = ["images/menacc_bwhite.jpg"];
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
