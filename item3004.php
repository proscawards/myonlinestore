<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 3004;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="elec_access_dev.php">Electronic Accessories & Devices</a>/<a href="#">Televisions</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item3004_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item3004_1.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item3004_2.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item3004_3.jpg" onclick="myFunction(this);">
					  </div>
                      <div class="imageColumn">
						<img src="images/item3004_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Panasonic</div>
				<div class="itemSubTitle">Panasonic 65-Inch 4K Smart UHD TV PSN-TH65GX740K</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 35 Ratings
				</span><br/>
				<span class="itemPrice"><strike>RM 5899.00</strike> <span class="glow" title="Offer Price!"><a class="glowText">RM 4199</a></span></span>
				<div class="itemDesc">
				<a><b>Great HDR Performance and Outstanding Sound</b></br>
                This 2019 4K LED TV featuring Hexa Chroma Drive Pro presents amazing 4K HDR pictures.
                Thanks to Dolby Vision™, HDR10+ dynamic metadata technology and Local Dimming this
                TV delivers detailed scenes with accurate colour and contrast</br>
                <b>HCX Processor</b></br>
                The HCX Processor represents the pinnacle of Panasonic image processing. Built
                on colour, black level and brightness know-how learned from our reference-quality
                plasma TVs and professional broadcast equipment, the system has also been tuned by
                a Hollywood colourist to deliver picture quality true to the filmmakers' vision</br>
                <b>Hexa Chroma Drive Pro</b></br>
                Now you're seeing stunning picture quality. Thanks to 6-Colour Reproduction,
                this TV has achieved remarkably high picture quality with Panasonic cinema quality
                know-how throughout. This amazing quality invites you to a memorable viewing experience</br>
                <b>HDR10+/ Dolby Vision Supported</b>
                Our new TVs support playback of both next-generation "Dynamic Metadata" HDR
                standards: HDR10+ and Dolby VisionTM. Of course, they also support conventional
                HDR10 and Hybrid Log-Gamma too, so users can enjoy a variety of HDR content</br>
                <b>Dolby Atmos® Supported</b></br>
                With new support for state-of-the-art audio formats Dolby Atmos,
                the sound pours in from all directions, including overhead. Powerful,
                dynamic sound travels in 3D space to bring you inside an immersive cinematic experience</br>
                <b>Easy TV Operation Without a Remote Control</b>
                Panasonic TVs give you hands-free operation from an Amazon Alexa or your Google Assistant
                enabled device. A variety of operations, such as turning the power on or off and changing the
                channel or volume, can be carried out by your voice without having to use the remote control.
                It's easy to operate the TV with voice commands when you're busy cooking or getting ready to
                leave the house</br>
				For more information, please visit <a href="https://www.senheng.com.my/hp-envy-x360-laptop-13-3-inch-8gb-ram-512gb-ssd-amd-r5-4500u.html">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Panasonic<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>Panel: 4K ULTRA HD IPS LED LCD </br>
                    Screen Size: 65"</br>
                    Bright Panel: Super Bright Panel</br>
                    Screen Resolution: 3,840 (W) x 2,160 (H)</br>
                    Panel Drive: 4K 1500 Hz BMR</br>
                    Picture Mode: Dynamic| Normal| Cinema| True Cinema| Custom| DolbyVision (Vivid/Bright/Dark)| Game</br>
                    Signal Processor: HCX Processor</br>
                    Hexa Chroma Drive: Hexa Chroma Drive PRO</br>
                    4K Upscaling: Yes</br>
                    Smart TV: Yes
                    </a>
				</div><br/>
				<div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<?php $color_D = ['Black'];
							$image_D = ["images/menacc_black.jpg"];
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
<!-- <div class="itemChoice">
	<label>Colour Family: </label><br/>
	<button class="choice-btn"  type="submit" name="choice-btn" title="Black"><img src = "images/menacc_black.jpg"/></button>
</div><br/>
<div class="itemCount">
	<label>Quantity: </label><br/>
	<div class="quantity buttons_added">
	<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
						</div>
</div>
				</br></br></br></br>
<div class="itemPurchase">
	<button class="buyNow-btn" type="submit">Buy Now</button>
	<button class="addToCart-btn" type="submit">Add To Cart</button>
</div> -->
