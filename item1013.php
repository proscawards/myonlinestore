<?php
require "header.php";
require "includes/dbh.inc.php";
$itemID = 1013;
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
			<legend class="itemOrigin"><a href="index.php">Home</a>/<a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_shoes.php">Men's Shoes</a>/<a href="#">Football Shoes</a></legend>
			<table class="itemTable">
			<tr>
			<td rowspan="10">
				<div class="itemImage">
					<div class="imageContainer">
					  <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
					  <img src="images/item1013_1.jpg" onclick="myFunction(this);" id="expandedImg">
					</div>
					<div class="imageRow">
					  <div class="imageColumn">
						<img src="images/item1013_1.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1013_2.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1013_3.jpg" onclick="myFunction(this);">
					  </div>
					  <div class="imageColumn">
						<img src="images/item1013_4.jpg" onclick="myFunction(this);">
					  </div>
					</div>
				</div>
			</td>
			<tr>
			<td>
				<div class="itemTitle">Nike Phantom Vision Elite</div>
				<div class="itemSubTitle">Custom Firm Ground</div>
				<span class="itemRating">
					<?php
						for ($i = 0; $i < 5; $i++){
							echo "<img src = 'images/star-orange.png'/>";
						}
					?> 100 Ratings
				</span><br/>
				<span class="itemPrice">SOLD OUT</span>
				<div class="itemDesc">
				<a>
					The Nike Phantom Vision Elite By You Football Boot gives you an unrivalled fit and excellent boot-to-ball connection. It's built for players who need precision and control on the pitch. Represent your country's club with a flag graphic under the Swoosh, then customise the colours and choose the traction that works best for your game.
					For more information, please visit <a href="https://www.nike.com/my/u/phantom-vision-elite-id-45006/295633772">here</a>.
				</a>
				</div><br/>
				<div class="itemBrand">
					<label>Brand: </label><br/>
					<a>Nike<br/></a>
				</div><br/>
				<div class="itemSpec">
					<label>Specification: </label><br/>
					<a>-</a>
				</div><br/>
				<div class="itemSize">
					<label>Size:</label><br/>					
					<select class="itemSizeInput" disabled>
						<option class="shoeSize">28</option>
						<option class="shoeSize">29</option>
						<option class="shoeSize">30</option>
						<option class="shoeSize">31</option>
						<option class="shoeSize">32</option>
						<option class="shoeSize">33</option>
						<option class="shoeSize">34</option>
						<option class="shoeSize">35</option>
						<option class="shoeSize">36</option>
						<option class="shoeSize">37</option>
						<option class="shoeSize">38</option>
						<option class="shoeSize">39</option>
						<option class="shoeSize">40</option>						
					</select><br/>
					<a href="#">Size Guide</a>				
				</div>
				<div class="itemCount">
					<label>Quantity: </label><br/>
					<div class="quantity buttons_added">
					<input type="button" value="-" class="minus" disabled><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" disabled><input type="button" value="+" class="plus" disabled>
					</div>
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
