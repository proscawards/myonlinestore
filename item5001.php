<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 5001;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="health.php">Health & Beauty</a>/<a href="#">Bones & Joints</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item5001.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item5001.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">GNC</div>
				<div class="itemSubTitle">Calcimate Plus 800 (240 tablets)</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 38 Ratings
				</span><br/>
				<span class="itemPrice">RM 204.90</span>
				<div class="itemDesc">
				<a>- Calcimate Plus™ features calcium citrate malate, a highly absorbable form of calcium</br>
                - Supplies 800 mg of high absorbable calcium to supplement daily calcium need adults</br>
                - This advanced mineral formula combines other bone-strengthening nutrients such as 200
                IU of Vitamin D and 100 mg of magnesium for bone supplementation</br>
                - Helps improve bone density.  Adequate calcium in a healthy diet may reduce the
                risk of osteoporosis later in life.</br>
                - All GNC mineral amounts shown are elemental (i.e. nett mineral yield)</br>
                - Calcimate Plus™ benefits those who lack of calcium in their diet, as well as sports enthusiasts .</br>
				For more information, please visit <a href="https://www.gnclivewell.com.my/en/gnc-calcimate-plus-800-for-bone-health-00102280.html?catId=vitamins-and-supplements_bones-n-joints">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>GNC<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Direction of use: </label><br/>
					<a>As a health supplement, adult to take two tablets at breakfast and two tablets at
                    dinner for a total of four tablets daily.
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = null;
							$image_D = null;
							$size_D = null;
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
