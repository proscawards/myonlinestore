<?php
    require "header.php";
?>

<html>
    <head>
        <title>Desktops & Laptops</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="elec_access_dev.php">Electronic Accessories & Devices</a>/<a href="elec_desklap.php">Desktops & Laptops</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item3001.php" class="womenFashion-btn"><img src="images/elec_desktop.jpg"/></a>
				<div class="overlay">Desktops</div>
			</div>
			<div class="container">
				<a href="item3002.php" class="womenFashion-btn"><img src="images/elec_laptop.jpg"/></a>
				<div class="overlay">Laptops</div>
			</div>	
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item3001.php"><img src="images/item3001_300px.jpg"/></a>
					<a href="item3001.php" id="secondImg"><img src="images/item3001_2_300px.jpg"/></a>
				</div>
				<a href="item3001.php" class="salesLabel">Apple iMac 21.5" 3.6GHZ 1TB with Retina 4K Display MRT32ZP/A</a><br/>
				<a>RM 5599</a>
				<img style="width:4%;" src = "images/menacc_silver.jpg" title="Silver"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item3002.php"><img src="images/item3002_300px.jpg"/></a>
					<a href="item3002.php" id="secondImg"><img src="images/item3002_2_300px.jpg"/></a>
				</div>
				<a href="item2014.php" class="salesLabel">HP ENVY x360 Laptop 13.3 Inch (8GB RAM/512GB SSD/AMD R5-4500U)</a><br/>
				<a>RM 3799</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
                <img style="width:4%;" src = "images/menacc_tan.jpg" title="Tan"/>
                <img style="width:4%;" src = "images/menacc_photon.jpg" title="Photon"/>			
			</div>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
