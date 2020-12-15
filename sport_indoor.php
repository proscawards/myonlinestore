<?php
    require "header.php";
?>

<html>
    <head>
        <title>Indoor</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
		<h1 id="pageHeader"><a href="sport.php">Sport & Lifestyles</a>/<a href="sport_indoor.php">Indoor</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item6001.php" class="womenFashion-btn"><img src="images/sport_music.jpg"/></a>
				<div class="overlay">Musical Instruments</div>
			</div>
			<div class="container">
				<a href="item6002.php" class="womenFashion-btn"><img src="images/sport_swimming.jpg"/></a>
				<div class="overlay">Swimming</div>
			</div>	
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item6001.php"><img src="images/item6001_300px.jpg"/></a>
					<a href="item6001.php" id="secondImg"><img src="images/item6001_2_300px.jpg"/></a>
				</div>
				<a href="item6001.php" class="salesLabel">Fender Custom Shop 1958 Journeyman Relic Stratocaster Electric Guitar</a><br/>
				<a>RM 15420</a>
				<img style="width:4%;" src = "images/menacc_bwhite.jpg" title="Blonde White"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item6002.php"><img src="images/item6002_300px.jpg"/></a>
					<a href="item6002.php" id="secondImg"><img src="images/item6002_2_300px.jpg"/></a>
				</div>
				<a href="item6002.php" class="salesLabel">Aqua Sphere Vista Pro Dark Lens Goggles
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 238.64</strike></a><a> now RM222</a>
				<img style="width:4%;" src = "images/menacc_tblack.jpg" title="Turquiose Black"/>			
			</div>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
