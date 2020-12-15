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
		<h1 id="pageHeader"><a href="sport.php">Sport & Lifestyles</a>/<a href="sport_outdoor.php">Outdoor</a></h1>
		<center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item6003.php" class="womenFashion-btn"><img src="images/sport_hiking.jpg"/></a>
				<div class="overlay">Hiking</div>
			</div>
			<div class="container">
				<a href="item6004.php" class="womenFashion-btn"><img src="images/sport_fishing.jpg"/></a>
				<div class="overlay">Fishing</div>
			</div>	
		</section>
		<section class="itemSelection" id="itemView">
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item6003.php"><img src="images/item6003_300px.jpg"/></a>
					<a href="item6003.php" id="secondImg"><img src="images/item6003_2_300px.jpg"/></a>
				</div>
				<a href="item6003.php" class="salesLabel">FORCLAZ - Anti-Shock Mountain Walking Pole
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 69.00</strike></a><a> now RM50</a>
				<img style="width:4%;" src = "images/menacc_sgray.jpg" title="Gray"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item6004.php"><img src="images/item6004_300px.jpg"/></a>
					<a href="item6004.php" id="secondImg"><img src="images/item6004_2_300px.jpg"/></a>
				</div>
				<a href="item6004.php" class="salesLabel">CAPERLAN - LURE ESSENTIAL TELE 240 LURE FISHING SET</a><br/>
				<a>RM 79</a>
				<img style="width:4%;" src = "images/menacc_redblack.jpg" title="Red Black"/>
			</div>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
