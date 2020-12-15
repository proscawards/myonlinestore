<?php
    require "header.php";
?>

<html>
    <head>
        <title>Sports & Lifestyles</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="wTitle">Sports & Lifestyles</h1>
        <p id="wDesc">Lifestyle sports refers to a range of mostly individualised activities, from established sports like climbing and surfing to newer activities like kite-surfing and parkour. While each lifestyle sport has its own history and development pattern, there are commonalities in their ethos, ideologies and increasingly the transnational consumer industries that produce the commodities that underpin their cultures. For example, snowboarding, skateboarding, windsurfing and kite-surfing are all influenced by surfing. Many of these sports originated in North America and were then imported to Europe and beyond. With their roots in the counter-cultural social movement of the 1960s and 1970s, many have characteristics that are different to the rule-bound, competitive and masculine cultures of dominant sports. They often take place in spaces lacking regulation and control, and have forms that diverge from traditional rule-bound, competitive and institutionalised sport and consequently have been characterised by their challenge to Western ‘achievement sport’.
        </p>
        <center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="sport_indoor.php" class="womenFashion-btn"><img src="images/sport_indoor.jpg"/></a>
				<div class="overlay">Indoor</div>
			</div>
			<div class="container">			
				<a href="sport_outdoor.php" class="womenFashion-btn"><img src="images/sport_outdoor.jpg"/></a>
				<div class="overlay">Outdoor</div>
			</div>	
		</section>
		<section class="itemSelection" id="itemView">
			<!--Indoor-->
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
            <!--Outdoor-->
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
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
