<?php
    require "header.php";
?>

<html>
    <head>
        <title>Women's Clothing</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="womenfashion.php">Women's Fashion</a>/<a href="womenfashion_clothing.php">Women's Clothing</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item2000.php" class="womenFashion-btn"><img src="images/womenfashion_formal.jpg"/></a>
				<div class="overlay">Formal Wear</div>
			</div>
			<div class="container">
				<a href="item2002.php" class="womenFashion-btn"><img src="images/womenfashion_hoodies.jpg"/></a>
				<div class="overlay">Hoodie</div>
			</div>
			<div class="container">
				<a href="item2003.php" class="womenFashion-btn"><img src="images/womenfashion_jacket.jpg"/></a>
				<div class="overlay">Jacket</div>
			</div>		
			<div class="container">
				<a href="item2004.php" class="womenFashion-btn"><img src="images/womenfashion_jeans.jpg"/></a>
				<div class="overlay">Jeans</div>
			</div>
			<div class="container">
				<a href="item2005.php" class="womenFashion-btn"><img src="images/womenfashion_jogger.jpg"/></a>
				<div class="overlay">Jogger</div>
			</div>
			<div class="container">
				<a href="item2006.php" class="womenFashion-btn"><img src="images/womenfashion_outerwear.jpg"/></a>
				<div class="overlay">Outerwear</div>
			</div>
			<div class="container">
				<a href="item2001.php" class="womenFashion-btn"><img src="images/womenfashion_sweatshirt.jpg"/></a>
				<div class="overlay">Sweatshirt</div>
			</div>
			<div class="container">
				<a href="item2007.php" class="womenFashion-btn"><img src="images/womenfashion_tops.jpg"/></a>
				<div class="overlay">Tops</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2000.php"><img src="images/item2000_300px.jpg"/></a>
					<a href="item2000.php" id="secondImg"><img src="images/item2000_2_300px.jpg"/></a>
				</div>
				<a href="item2000.php" class="salesLabel">DP Seafoam Edge To Edge Blazer</a><br/>
				<a>RM 199</a>
				<img style="width:4%;" src = "images/mencloth_green.jpg" title="Green"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2001.php"><img src="images/item2001_300px.jpg"/></a>
					<a href="item2001.php" id="secondImg"><img src="images/item2001_2_300px.jpg"/></a>
				</div>
				<a href="item2001.php" class="salesLabel">Premium Block Portland Crew Sweatshirt</a><br/>
				<a>RM 299.95</a>
				<img style="width:4%;" src = "images/mencloth_pink.jpg" title="Pink"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2002.php"><img src="images/item2002_300px.jpg"/></a>
					<a href="item2002.php" id="secondImg"><img src="images/item2002_2_300px.jpg"/></a>
				</div>
				<a href="item2002php" class="salesLabel">Gucci Stars And Moon Print Hoodie</a><br/>
				<a>RM 16720</a>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2003.php"><img src="images/item2003_300px.jpg"/></a>
					<a href="item2003.php" id="secondImg"><img src="images/item2003_2_300px.jpg"/></a>
				</div>
				<a href="item2003.php" class="salesLabel">Calvin Klein Flower Bomber Jacket</a><br/>
				<a>RM 1039</a>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>				
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2004.php"><img src="images/item2004_300px.jpg"/></a>
					<a href="item2004.php" id="secondImg"><img src="images/item2004_2_300px.jpg"/></a>
				</div>
				<a href="item2004.php" class="salesLabel">J.L. x Guess Super High Rise Corset Jeans</a><br/>
				<a>RM 599.95</a>
				<img style="width:4%;" src = "images/menpants_white.jpg" title="White"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2005.php"><img src="images/item2005_300px.jpg"/></a>
					<a href="item2005.php" id="secondImg"><img src="images/item2005_2_300px.jpg"/></a>
				</div>
				<a href="item2005.php" class="salesLabel">Calvin Klein A-Outline Logo Jogger</a><br/>
				<a>RM 549.95</a>
				<img style="width:4%;" src = "images/menpants_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2006.php"><img src="images/item2006_300px.jpg"/></a>
					<a href="item2006.php" id="secondImg"><img src="images/item2006_2_300px.jpg"/></a>
				</div>
				<a href="item2006.php" class="salesLabel">Fendi Oversized black rabbit fur Black Coat</a><br/>
				<a>RM 44840</a>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2007.php"><img src="images/item2007_300px.jpg"/></a>
					<a href="item2007.php" id="secondImg"><img src="images/item2007_2_300px.jpg"/></a>
				</div>
				<a href="item2007.php" class="salesLabel">Mango Ruffled Cotton Shirt</a><br/>
				<a>RM 150.90</a>
				<img style="width:4%;" src = "images/mencloth_white.jpg" title="White"/>			
			</div>			
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
