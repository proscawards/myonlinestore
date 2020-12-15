<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 6002;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="sport.php">Sport & Lifestyles</a>/<a href="sport_indoor.php">Indoor</a>/<a href="#">Swimming</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item6002_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item6002_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6002_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item6002_3.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Aqua Shpere</div>
				<div class="itemSubTitle">Aqua Sphere Vista Pro Dark Lens Goggles - Turquoise / Black</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 99 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 238.64</strike><span class="glow" title="Offer Price!"><a class="glowText"> RM 222</a></span></span>
				<div class="itemDesc">
				<a>The new Aqua Sphere Vista Goggles in turquoise and black offer a superior, streamlined fit
                as well as distortion free vision.
                The goggles are engineered with curved lens technology which gives an expanded field of vision
                allowing better visibility, they provide a a 180 degree visibility.
                The dark lens is designed to reduce glare and brightness, best suited for outdoor use.
                The goggles have a very ergonomic design, they feature a one touch, quick fit buckle system
                which ensures the perfect fit with simple adjustments even whilst wearing them.</br>
				For more information, please visit <a href="https://www.proswimwear.co.uk/aqua-sphere-vista-pro-dark-lens-goggles-turquoise-black.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Aqua Shpere<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specifications: </label><br/>
					<a>-</a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ["Turquiose Black"];
							$image_D = ["images/menacc_tblack.jpg"];
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
