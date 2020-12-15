<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 5003;
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
        <legend class="itemOrigin"><a href="index.php">Home</a>/<a href="health.php">Health & Beauty</a>/<a href="#">Omega & Fish Oils</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item5003.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item5003.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">GNC</div>
				<div class="itemSubTitle">Fish Oil Plus CoQ-10 (60 Enteric-Coated Softgel)</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 59 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 294.25</strike><span class="glow" title="Offer Price!"><a class="glowText"> RM 250</a></span></span>
				<div class="itemDesc">
				<a><b>Features</b></br>
                - Each capsule provides 500mg of Omega 3 fatty acids.</br>
                - EPA: 367 mg</br>
                - DHA: 133 mg</br>
                - Formulated with 50mg Coenzyme Q-10, an essential component for the heart’s energy/ strength</br>
                - Highly purified to ensure it is free of heavy metal harm</br>
                - Enteric-coated for optimum absorption and reduce fishy burps</br>
                <b>Benefits</b></br>
                - Normalize cholesterol and blood pressure.</br>
                - Anti-inflammatory support.</br>
                - Maintain a healthy brain and visual functions.</br>
                - Increases good cholesterol and improves triglycerides level.</br>
                - Reduces the risk of recurrent cardiovascular diseases.</br>
                - Relieve inflammatory symptoms such as pain or swelling.</br>
                - DHA helps to delay age-related brain & vision function decline.</br>
                - Supports better concentration, attention span, and better mood.</br>
				For more information, please visit <a href="https://www.gnclivewell.com.my/en/vitamins-and-supplements_cardiovascular-health/gnc/fish-oil-plus-coq-10-00108420.html?catId=vitamins-and-supplements_omega-n-fish-oils">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>GNC<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Direction of use: </label><br/>
					<a>As a health supplement, adult to take two softgel capsules once daily with food.</a></br>
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
