<?php
    require "header.php";
?>

<html>
    <head>
        <title>Women's Accessories</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_shoes.php">Women's Accessories</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item2013.php" class="womenFashion-btn"><img src="images/womenfashion_pendant.jpg"/></a>
				<div class="overlay">Pendant</div>
			</div>
			<div class="container">
				<a href="item2014.php" class="womenFashion-btn"><img src="images/womenfashion_ring.jpg"/></a>
				<div class="overlay">Ring</div>
			</div>
			<div class="container">
				<a href="item2015.php" class="womenFashion-btn"><img src="images/womenfashion_earring.jpg"/></a>
				<div class="overlay">Earring</div>
			</div>		
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2013.php"><img src="images/item2013_300px.jpg"/></a>
					<a href="item2013.php" id="secondImg"><img src="images/item2013_2_300px.jpg"/></a>
				</div>
				<a href="item2013.php" class="salesLabel">Pandora Pave Circle T-Bar Heart Necklace</a><br/>
				<a>RM 619</a>
				<img style="width:4%;" src = "images/menacc_silver.jpg" title="Silver"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2014.php"><img src="images/item2014_300px.jpg"/></a>
					<a href="item2014.php" id="secondImg"><img src="images/item2014_2_300px.jpg"/></a>
				</div>
				<a href="item2014.php" class="salesLabel">Swarovski Attract Motif Ring</a><br/>
				<a>RM 449</a>
				<img style="width:4%;" src = "images/menacc_silver.jpg" title="Silver"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2015.php"><img src="images/item2015_300px.jpg"/></a>
					<a href="item2015.php" id="secondImg"><img src="images/item2015_2_300px.jpg"/></a>
				</div>
				<a href="item2015.php" class="salesLabel">Diva Glitzy Glam Disco Ball Earrings</a><br/>
				<a>RM 840</a>
				<img style="width:4%;" src = "images/menacc_gold.jpg" title="Gold"/>			
			</div>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
