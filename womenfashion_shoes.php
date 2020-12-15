<?php
    require "header.php";
?>

<html>
    <head>
        <title>Women's Shoes</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_shoes.php">Women's Shoes</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item2008.php" class="womenFashion-btn"><img src="images/womenfashion_formal_shoes.jpg"/></a>
				<div class="overlay">Formal</div>
			</div>
			<div class="container">
				<a href="item2009.php" class="womenFashion-btn"><img src="images/womenfashion_hiheels.jpg"/></a>
				<div class="overlay">High Heels</div>
			</div>
			<div class="container">
				<a href="item2010.php" class="womenFashion-btn"><img src="images/womenfashion_slippers.jpg"/></a>
				<div class="overlay">Slippers</div>
			</div>		
			<div class="container">
				<a href="item2011.php" class="womenFashion-btn"><img src="images/womenfashion_boots.jpg"/></a>
				<div class="overlay">Boots</div>
			</div>
			<div class="container">
				<a href="item2012.php" class="womenFashion-btn"><img src="images/womenfashion_sneakers.jpg"/></a>
				<div class="overlay">Sneakers</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2008.php"><img src="images/item2008_300px.jpg"/></a>
					<a href="item2008.php" id="secondImg"><img src="images/item2008_2_300px.jpg"/></a>
				</div>
				<a href="item2008.php" class="salesLabel">Mango Classic Leather Pumps</a><br/>
				<a>RM 229.00</a>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2009.php"><img src="images/item2009_300px.jpg"/></a>
					<a href="item2009.php" id="secondImg"><img src="images/item2009_2_300px.jpg"/></a>
				</div>
				<a href="item2009.php" class="salesLabel">ALDO Caraa Heels</a><br/>
				<a>RM 659.00</a>
				<img style="width:4%;" src = "images/menshoe_pink.jpg" title="Pink"/>				
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2010.php"><img src="images/item2010_300px.jpg"/></a>
					<a href="item2010.php" id="secondImg"><img src="images/item2010_2_300px.jpg"/></a>
				</div>
				<a href="item2010.php" class="salesLabel">Therapy Ashby Boots</a><br/>
				<a>RM 255.00</a>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>				
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2011.php"><img src="images/item2011_300px.jpg"/></a>
					<a href="item2011.php" id="secondImg"><img src="images/item2011_2_300px.jpg"/></a>
				</div>
				<a href="item2011.php" class="salesLabel">Balenciaga Triple S Women's Sneakers</a><br/>
				<a>RM 6545</a>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>				
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2012.php"><img src="images/item2012_300px.jpg"/></a>
					<a href="item2012.php" id="secondImg"><img src="images/item2012_2_300px.jpg"/></a>
				</div>
				<a href="item2012.php" class="salesLabel">Balenciaga Logo Printed Women's Flip Flops</a><br/>
				<a>RM 3420</a>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>				
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
