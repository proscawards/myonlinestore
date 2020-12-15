<?php
    require "header.php";
?>

<html>
    <head>
        <title>Electronic Accessories & Devices</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="wTitle">Electronic Accessories & Devices</h1>
        <p id="wDesc">Consumer electronics or home electronics are electronic (analog or digital) equipment intended for everyday use, typically in private homes. Consumer electronics include devices used for entertainment, communications and recreation. In British English, they are often called brown goods by producers and sellers, to distinguish them from "white goods" which are meant for housekeeping tasks, such as washing machines and refrigerators, although nowadays, these would be considered brown goods, some of these being connected to the Internet. In the 2010s, this distinction is absent in large big box consumer electronics stores, which sell both entertainment, communication, and home office devices and kitchen appliances such as refrigerators. The highest selling consumer electronics products are Compact discs.
        </p>
        <center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="elec_desklap.php" class="womenFashion-btn"><img src="images/elec_lapdesk.jpg"/></a>
				<div class="overlay">Computers & Laptops</div>
			</div>
			<div class="container">			
				<a href="item3003.php" class="womenFashion-btn"><img src="images/elec_smartphone.jpg"/></a>
				<div class="overlay">Smartphones</div>
			</div>	
			<div class="container">				
				<a href="item3004.php" class="womenFashion-btn"><img src="images/elec_tv.jpg"/></a>	
				<div class="overlay">Televisions</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<!--Desklaps-->
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
            <!--Smartphone-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item3003.php"><img src="images/item3003_300px.jpg"/></a>
				</div>
				<a href="item2014.php" class="salesLabel">HP ENVY x360 Laptop 13.3 Inch (8GB RAM/512GB SSD/AMD R5-4500U)</a><br/>
				<a>RM 6899</a>
                <img style="width:4%;" src = "images/menacc_silver1.jpg" title="Silver1"/>
				<img style="width:4%;" src = "images/menacc_mgreen.jpg" title="Midnight Green"/>
                <img style="width:4%;" src = "images/menacc_sgray.jpg" title="Space Grey"/>
                <img style="width:4%;" src = "images/menacc_gold1.jpg" title="Gold1"/>			
			</div>
            <!--Televisions-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item3004.php"><img src="images/item3004_300px.jpg"/></a>
                    <a href="item3004.php" id="secondImg"><img src="images/item3004_2_300px.jpg"/></a>
				</div>
				<a href="item2014.php" class="salesLabel">Panasonic 65-Inch 4K Smart UHD TV PSN-TH65GX740K</a><br/>
				<a id="offerLabel"><strike>RM 5899</strike></a><a> now RM4199</a>
                <img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>			
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
