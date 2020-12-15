<?php
    require "header.php";
?>

<html>
    <head>
        <title>Men's Shoes</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_shoes.php">Men's Shoes</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="Items View"><img src="images/itemView.png" /></button>
		</section>
		<section class="menSelection" id="catView">
			<div class="container">
				<a href="item1008.php" class="menFashion-btn"><img src="images/menfashion_leather.jpg"/></a>
				<div class="overlay">Leather Shoes</div>
			</div>
			<div class="container">
				<a href="item1009.php" class="menFashion-btn"><img src="images/menfashion_running.jpg"/></a>
				<div class="overlay">Running Shoes</div>
			</div>
			<div class="container">
				<a href="item1010.php" class="menFashion-btn"><img src="images/menfashion_slipper.jpg"/></a>
				<div class="overlay">Slippers</div>
			</div>		
			<div class="container">
				<a href="item1011.php" class="menFashion-btn"><img src="images/menfashion_sneaker.jpg"/></a>
				<div class="overlay">Sneakers</div>
			</div>
			<div class="container">
				<a href="item1012.php" class="menFashion-btn"><img src="images/menfashion_basketball.jpg"/></a>
				<div class="overlay">Basketball Shoes</div>
			</div>
			<div class="container">
				<a href="item1013.php" class="menFashion-btn"><img src="images/menfashion_football.jpg"/></a>
				<div class="overlay">Football Shoes</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1008.php"><img src="images/item1008_300px.jpg"/></a>
					<a href="item1008.php" id="secondImg"><img src="images/item1008_2_300px.jpg"/></a>
				</div>
				<a href="item1008.php" class="salesLabel">Polished-Leather Derby Shoes</a><br/>
				<a>RM 2100</a>
				<img style="width:4%;" src = "images/menshoe_burgundy.jpg" title="Burgundy"/>	
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1009.php"><img src="images/item1009_300px.jpg"/></a>
					<a href="item1009.php" id="secondImg"><img src="images/item1009_2_300px.jpg"/></a>
				</div>
				<a href="item1009.php" class="salesLabel">ULTRABOOST 20 SHOES</a><br/>
				<a>RM 780</a>
				<img style="width:4%;" src = "images/menshoe_grey2.jpg" title="Dash Grey/Grey Five"/>
				<img style="width:4%;" src = "images/menshoe_green2.jpg" title="Signal Green/Core Black"/>
				<img style="width:4%;" src = "images/menshoe_blue&red.jpg" title="Royal Blue/Cloud White/Scarlet"/>				
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Core Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1010.php"><img src="images/item1010_300px.jpg"/></a>
					<a href="item1010.php" id="secondImg"><img src="images/item1010_2_300px.jpg"/></a>
				</div>
				<a href="item1010.php" class="salesLabel">ARIZONA BIRKO FLOR - STONE</a><br/>
				<a>RM 296</a>
				<img style="width:4%;" src = "images/menshoe_stone.jpg" title="Stone"/>
				<img style="width:4%;" src = "images/menshoe_brown.jpg" title="Cocoa Brown"/>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>				
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1011.php"><img src="images/item1011_300px.jpg"/></a>
					<a href="item1011.php" id="secondImg"><img src="images/item1011_2_300px.jpg"/></a>
				</div>
				<a href="item1011.php" class="salesLabel">Chuck Taylor All Star</a><br/>
				<a>RM 227</a>
				<img style="width:4%;" src = "images/menshoe_white.jpg" title="White"/>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/menshoe_navy.jpg" title="Navy"/>					
				<img style="width:4%;" src = "images/menshoe_pink.jpg" title="Pink"/>	
				<img style="width:4%;" src = "images/menshoe_purple.jpg" title="Electric Purple"/>	
				<img style="width:4%;" src = "images/menshoe_charcoal.jpg" title="Charcoal"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1012.php"><img src="images/item1012_300px.jpg"/></a>
					<a href="item1012.php" id="secondImg"><img src="images/item1012_2_300px.jpg"/></a>
				</div>
				<a href="item1012.php" class="salesLabel">Nike Air Zoom BB NXT</a><br/>
				<a>RM 749</a>
				<img style="width:4%;" src = "images/menshoe_black&lime.jpg" title="Black/Lime Green"/>
				<img style="width:4%;" src = "images/menshoe_white&purple.jpg" title="White/Flash Crimson/Hyper Violet"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1013.php"><img src="images/item1013_300px.jpg"/></a>
					<a href="item1013.php" id="secondImg"><img src="images/item1013_2_300px.jpg"/></a>
				</div>
				<a href="item1013.php" class="salesLabel">Nike Phantom Vision Elite</a><br/>
				<a>SOLD OUT</a>
				<img style="width:4%;" src = "images/menshoe_black&gold.jpg" title="Black/Gold"/>
				<img style="width:4%;" src = "images/menshoe_customizable.jpg" title="Customizable"/>
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
