<?php
    require "header.php";
?>

<html>
    <head>
        <title>Health & Beauty</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="wTitle">Health & Beauty</h1>
        <p id="wDesc">Health and beauty encompasses a variety of products, including fragrances, makeup, hair care and coloring products, sunscreen, toothpaste, and products for bathing, nail care, and shaving. The industry overlaps with other markets like chemical, health care, and petroleum. The latter is important as personal care product raw materials, such as propylene glycol, come from petroleum products. The slow recovering economy has had some impact on skin care sales, as well as the entire HBC category. However, skin care is an extremely high penetration category with products that generate frequent and continued usage, which helps insulate the category to some degree. The global personal care products industry is concentrated, with the EU, US, UK, Brazil and Russia dominating the industry. Just as consumer awareness leads to a trend towards organic and herbal products, greater corporate awareness means companies are committing to environmental protection by reducing packaging, conserving water, reducing carbon emissions and stressing recycling. As a result, companies have built eco-smart facilities, and research and distribution buildings.
        </p>
        <center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item5001.php" class="womenFashion-btn"><img src="images/health_bonesjoints.jpg"/></a>
				<div class="overlay">Bones & Joints</div>
			</div>
			<div class="container">			
				<a href="item5002.php" class="womenFashion-btn"><img src="images/health_whitening.jpg"/></a>
				<div class="overlay">Whitening</div>
			</div>	
			<div class="container">				
				<a href="item5003.php" class="womenFashion-btn"><img src="images/health_omegafish.jpg"/></a>	
				<div class="overlay">Omega & Fish Oils</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<!--Bones&Joints-->
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item5001.php"><img src="images/item5001_300px.jpg"/></a>
				</div>
				<a href="item5001.php" class="salesLabel">Calcimate Plus 800 (240 tablets)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a>RM 204.90</a>
			</div>
            <!--Whitening-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item5002.php"><img src="images/item5002_300px.jpg"/></a>
				</div>
				<a href="item5002.php" class="salesLabel">L-Glutathione 50mg (50 vegetabs)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a>RM 80.90</a>
			</div>
            <!--Ikan Oil-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item5003.php"><img src="images/item5003_300px.jpg"/></a>
				</div>
				<a href="item5003.php" class="salesLabel">Fish Oil Plus CoQ-10 (60 Enteric-Coated Softgel)</a><br/>
				<a id="offerLabel"><strike>RM 294.25</strike></a><a> now RM250</a>
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
