<?php
    require "header.php";
?>

<html>
    <head>
        <title>Men's Clothing</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>	
		<script type="text/javascript" src="scripts/dropDown.js"></script>		
    </head>    
    <body>
		<h1 id="pageHeader"><a href="menfashion.php">Men's Fashion</a>/<a href="menfashion_clothing.php">Men's Clothing</a></h1>
		<center>
			<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
			<button class="itemView" onclick="displayItemView()" title="Items View"><img src="images/itemView.png" /></button>
		</section>
		<section class="menSelection" id="catView">
			<div class="container">
				<a href="item1002.php" class="menFashion-btn"><img src="images/menfashion_formal.jpg"/></a>
				<div class="overlay">Formal Wear</div>
			</div>
			<div class="container">
				<a href="item1001.php" class="menFashion-btn"><img src="images/menfashion_hoodies.jpg"/></a>
				<div class="overlay">Hoodie</div>
			</div>
			<div class="container">
				<a href="item1003.php" class="menFashion-btn"><img src="images/menfashion_jacket.jpg"/></a>
				<div class="overlay">Jacket</div>
			</div>		
			<div class="container">
				<a href="item1004.php" class="menFashion-btn"><img src="images/menfashion_jeans.jpg"/></a>
				<div class="overlay">Jeans</div>
			</div>
			<div class="container">
				<a href="item1005.php" class="menFashion-btn"><img src="images/menfashion_jogger.jpg"/></a>
				<div class="overlay">Jogger</div>
			</div>
			<div class="container">
				<a href="item1006.php" class="menFashion-btn"><img src="images/menfashion_outerwear.jpg"/></a>
				<div class="overlay">Outerwear</div>
			</div>
			<div class="container">
				<a href="item1000.php" class="menFashion-btn"><img src="images/menfashion_sweatshirt.jpg"/></a>
				<div class="overlay">Sweatshirt</div>
			</div>
			<div class="container">
				<a href="item1007.php" class="menFashion-btn"><img src="images/menfashion_tops.jpg"/></a>
				<div class="overlay">Tops</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1000.php"><img src="images/item1000_300px.jpg"/></a>
					<a href="item1000.php" id="secondImg"><img src="images/item1000_2_300px.jpg"/></a>
				</div>
				<a href="item1000.php" class="salesLabel">Men Plain Sweatshirt</a><br/>
				<a>RM 39.99</a>
				<img style="width:4%;" src = "images/mencloth_green.jpg" title="Green"/>			
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_burgundy.jpg" title="Burgundy"/>
				<img style="width:4%;" src = "images/mencloth_pink.jpg" title="Pink"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1001.php"><img src="images/item1001_300px.jpg"/></a>
					<a href="item1001.php" id="secondImg"><img src="images/item1001_2_300px.jpg"/></a>
				</div>
				<a href="item1001.php" class="salesLabel">Men Plain Hoodie</a><br/>
				<a>RM 74.95</a>
				<img style="width:4%;" src = "images/mencloth_green.jpg" title="Green"/>
				<img style="width:4%;" src = "images/mencloth_piblue.jpg" title="Pigeon Blue"/>				
				<img style="width:4%;" src = "images/mencloth_white.jpg" title="White"/>				
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_burgundy.jpg" title="Burgundy"/>
				<img style="width:4%;" src = "images/mencloth_pink.jpg" title="Pink"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1002.php"><img src="images/item1002_300px.jpg"/></a>
					<a href="item1002.php" id="secondImg"><img src="images/item1002_2_300px.jpg"/></a>
				</div>
				<a href="item1002.php" class="salesLabel">Men Black Solid Formal Blazer</a><br/>
				<a>RM 186.49</a>		
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_burgundy.jpg" title="Burgundy"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1003.php"><img src="images/item1003_300px.jpg"/></a>
					<a href="item1003.php" id="secondImg"><img src="images/item1003_2_300px.jpg"/></a>
				</div>
				<a href="item1003.php" class="salesLabel">The Bomber Jacket | Uniform</a><br/>
				<a id="offerLabel"><strike>RM 880</strike></a><a> now RM387</a>
				<img style="width:4%;" src = "images/mencloth_navy.jpg" title="Navy"/>
				<img style="width:4%;" src = "images/mencloth_slate.jpg" title="Dark Slate"/>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_ochre.jpg" title="Ochre"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1004.php"><img src="images/item1004_300px.jpg"/></a>
					<a href="item1004.php" id="secondImg"><img src="images/item1004_2_300px.jpg"/></a>
				</div>
				<a href="item1004.php" class="salesLabel">502™ TAPER FIT JEANS</a><br/>
				<a>RM 259</a>
				<img style="width:4%;" src = "images/menpants_blue.jpg" title="Sky Blue"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1005.php"><img src="images/item1005_300px.jpg"/></a>
					<a href="item1005.php" id="secondImg"><img src="images/item1005_2_300px.jpg"/></a>
				</div>
				<a href="item1005.php" class="salesLabel">BIG TREFOIL TRACK PANTS</a><br/>
				<a id="offerLabel"><strike>RM 330</strike></a><a> now RM259</a>
				<img style="width:4%;" src = "images/menpants_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1006.php"><img src="images/item1004_300px.jpg"/></a>
					<a href="item1006.php" id="secondImg"><img src="images/item1004_2_300px.jpg"/></a>
				</div>
				<a href="item1006.php" class="salesLabel">WATER-REPELLENT DOUBLE-BREASTED COAT</a><br/>
				<a>RM 559</a>
				<img style="width:4%;" src = "images/mencloth_navy.jpg" title="Navy"/>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1007.php"><img src="images/item1007_300px.jpg"/></a>
					<a href="item1007.php" id="secondImg"><img src="images/item1007_2_300px.jpg"/></a>
				</div>
				<a href="item1007.php" class="salesLabel">MEN Brushed Half Sleeve T-Shirt</a><br/>
				<a>RM 59.90</a>
				<img style="width:4%;" src = "images/mencloth_dkgreen.jpg" title="Dark Green"/>
				<img style="width:4%;" src = "images/mencloth_navy.jpg" title="Navy"/>			
				<img style="width:4%;" src = "images/mencloth_white.jpg" title="White"/>				
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_burgundy.jpg" title="Burgundy"/>
				<img style="width:4%;" src = "images/mencloth_ochre.jpg" title="Mustard"/>
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
