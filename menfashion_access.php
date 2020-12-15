<?php
    require "header.php";
?>

<html>
    <head>
        <title>Men's Accessories</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="pageHeader"><a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_access.php">Men's Accessories</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="Items View"><img src="images/itemView.png" /></button>
		</section>
		<section class="menSelection" id="catView">
			<div class="container">
				<a href="item1014.php" class="menFashion-btn"><img src="images/menfashion_watch.jpg"/></a>
				<div class="overlay">Watches</div>
			</div>
			<div class="container">
				<a href="item1015.php" class="menFashion-btn"><img src="images/menfashion_glass.jpg"/></a>
				<div class="overlay">Sunglasses</div>
			</div>
			<div class="container">
				<a href="item1016.php" class="menFashion-btn"><img src="images/menfashion_tie.jpg"/></a>
				<div class="overlay">Necktie</div>
			</div>		
			<div class="container">
				<a href="item1017.php" class="menFashion-btn"><img src="images/menfashion_belt.jpg"/></a>
				<div class="overlay">Belt</div>
			</div>
			<div class="container">
				<a href="item1018.php" class="menFashion-btn"><img src="images/menfashion_wallet.jpg"/></a>
				<div class="overlay">Wallet</div>
			</div>
			<div class="container">
				<a href="item1019.php" class="menFashion-btn"><img src="images/menfashion_wbag.jpg"/></a>
				<div class="overlay">Waist Bag</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1014.php"><img src="images/item1014_300px.jpg"/></a>
					<a href="item1014.php" id="secondImg"><img src="images/item1014_2_300px.jpg"/></a>
				</div>
				<a href="item1014.php" class="salesLabel">Classic Chronograph Leather Strap Watch</a><br/>
				<a>RM 574.14</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/menacc_rosegold.jpg" title="Rose-Gold-Tone/Brown/Black"/>	
				<img style="width:4%;" src = "images/menacc_navy.jpg" title="Stainless-Steel/Navy"/>
				<img style="width:4%;" src = "images/menacc_tan.jpg" title="Stainless-Steel/Tan"/>						
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1015.php"><img src="images/item1015_300px.jpg"/></a>
					<a href="item1015.php" id="secondImg"><img src="images/item1015_2_300px.jpg"/></a>
				</div>
				<a href="item1015.php" class="salesLabel">ALDO Potoroo Sunglasses</a><br/>
				<a id="offerLabel"><strike>RM 149</strike></a><a> now RM112</a>
				<img style="width:4%;" src = "images/menacc_bronze.jpg" title="Bronze"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1016.php"><img src="images/item1016_300px.jpg"/></a>
					<a href="item1016.php" id="secondImg"><img src="images/item1016_2_300px.jpg"/></a>
				</div>
				<a href="item1016.php" class="salesLabel">Mumu Weddings - Desert Solid Black Tie</a><br/>
				<a>RM 91</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/menacc_navy.jpg" title="Navy"/>
				<img style="width:4%;" src = "images/menacc_arose.jpg" title="Antique Rose"/>	
				<img style="width:4%;" src = "images/menacc_jade.jpg" title="Deep Jade"/>
				<img style="width:4%;" src = "images/menacc_merlot.jpg"  title="Merlot"/>
				<img style="width:4%;" src = "images/menacc_cake.jpg" title="Wedding Cake"/>					
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1017.php"><img src="images/item1017_300px.jpg"/></a>
					<a href="item1017.php" id="secondImg"><img src="images/item1017_2_300px.jpg"/></a>
				</div>
				<a href="item1017.php" class="salesLabel">Leather Automatic Buckle Belt</a><br/>
				<a id="offerLabel"><strike>RM 219</strike></a><a> now RM175.20</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1018.php"><img src="images/item1018_300px.jpg"/></a>
					<a href="item1018.php" id="secondImg"><img src="images/item1018_2_300px.jpg"/></a>
				</div>
				<a href="item1018.php" class="salesLabel">3-IN-1 WALLET</a><br/>
				<a>RM 1250</a>
				<img style="width:4%;" src = "images/menacc_saddle.jpg" title="Saddle"/>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1019.php"><img src="images/item1019_300px.jpg"/></a>
					<a href="item1019.php" id="secondImg"><img src="images/item1019_2_300px.jpg"/></a>
				</div>
				<a href="item1019.php" class="salesLabel">Nike Tech Hip Pack</a><br/>
				<a>RM 165</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black/Black/Anthracite"/>
				<img style="width:4%;" src = "images/menacc_frost.jpg" title="Pistachio Frost/Pistachio Frost/White"/>
				<img style="width:4%;" src = "images/menacc_maroon.jpg" title="Night Maroon/Night Maroon/White"/>
				<img style="width:4%;" src = "images/menacc_photon.jpg" title="Pacific Blue/Pacific Blue/Photon Dust"/>
				<img style="width:4%;" src = "images/menacc_olive.jpg" title="Dusty Olive"/>
			</div>
		</section>
		</center>
    </body>
	
</html>

<?php 
    require "footer.php";
?>
