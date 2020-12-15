<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 6003;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="sport.php">Sport & Lifestyles</a>/<a href="sport_outdoor.php">Outdoor</a>/<a href="#">Hiking</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item6003_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item6003_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6003_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6003_3.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6003_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">FORCLAZ</div>
				<div class="itemSubTitle">Anti-Shock Mountain Walking Pole - F500AS - Grey</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 55 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 69.00</strike><span class="glow" title="Offer Price!"><a class="glowText"> RM 50</a></span></span>
				<div class="itemDesc">
				<a><b>MADE FOR</b></br>
                We have designed this anti-shock pole for hiking and trekking enthusiasts who practice
                intensively on rough mountain terrain</br>
                Pole with shock absorber to soften the impact on joints. The shock absorber can deactivate
                whenever you want</br>
				For more information, please visit <a href="https://www.decathlon.my/p/8379457_1-anti-shock-mountain-walking-pole-f500as-grey.html#our_promise_banner">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>FORCLAZ<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specifications: </label><br/>
					<a>Gender: Adult</br>
                    Sport practices: Hiking, Trekking several days</br>
                    Suspension: With suspension </br>
                    Tip Type: Tungsten rounded tip</br>
                    Material: Aluminium</br>
                    Kind of Grip: 3D Formed Foam Grip</br>
                    Collapsed Length: 55 to 65 cm</br>
                    Frequency: Regular</br>
					Composition: Shaft: 100.0% Aluminium, Handle: 100.0% Ethylene Vinyl Acetate (EVA)</br>
                    Level of Practice: Intermediate</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ["Grey"];
							$image_D = ["images/menacc_sgray.jpg"];
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
