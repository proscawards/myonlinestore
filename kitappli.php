<?php
    require "header.php";
?>

<html>
    <head>
        <title>Kitchen Appliance & Utensils</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="wTitle">Kitchen Appliance & Utensils</h1>
        <p id="wDesc">A home appliance, domestic appliance or household appliance, is a device which assists in household functions such as cooking, cleaning and food preservation. Appliances are divided into three types: small appliances; major appliances, or white goods; and consumer electronics, or brown goods. This categorization is reflected in the maintenance and repair of these types of products. Brown goods typically require high technical knowledge and skills (which get more complex with time, such as going from a soldering iron to a hot-air soldering station), while white goods may need more practical skills and force to manipulate the devices and heavy tools required to repair them.
        </p>
        <center>
		<button class="catView" onclick="displayCatView()" title="Category View"><img src="images/catView.png" /></button>
		<button class="itemView" onclick="displayItemView()" title="View All Products"><img src="images/itemView.png" /></button>
		<section class="womenSelection" id="catView">
			<div class="container">
				<a href="item4001.php" class="womenFashion-btn"><img src="images/kitappli_refrigerator.jpg"/></a>
				<div class="overlay">Refrigerators</div>
			</div>
			<div class="container">			
				<a href="item4002.php" class="womenFashion-btn"><img src="images/kitappli_stove.jpg"/></a>
				<div class="overlay">Cooking</div>
			</div>	
			<div class="container">				
				<a href="item4003.php" class="womenFashion-btn"><img src="images/kitappli_ricecooker.jpg"/></a>	
				<div class="overlay">Cookers</div>
			</div>
		</section>
		<section class="itemSelection" id="itemView">
			<!--Refrigerator-->
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item4001.php"><img src="images/item4001_300px.jpg"/></a>
					<a href="item4001.php" id="secondImg"><img src="images/item4001_2_300px.jpg"/></a>
				</div>
				<a href="item4001.php" class="salesLabel">Samsung 630L Side-by-Side Flexzone Refrigerator SAM-RS63R5591B4</a><br/>
				<a id="offerLabel"><strike>RM 5599</strike></a><a> now RM5399</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>		
			</div>
            <!--Cookings-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item4002.php"><img src="images/item4002_300px.jpg"/></a>
					<a href="item4002.php" id="secondImg"><img src="images/item4002_2_300px.jpg"/></a>
				</div>
				<a href="item4002.php" class="salesLabel">Elba EGH-E9522G(GR) 2 Burners Built in Glass Hob</a><br/>
				<a id="offerLabel"><strike>RM 1099</strike></a><a> now RM963</a>
                <img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
			</div>
            <!--Cookers-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item4003.php"><img src="images/item4003_300px.jpg"/></a>
                    <a href="item4003.php" id="secondImg"><img src="images/item4003_2_300px.jpg"/></a>
				</div>
				<a href="item4003.php" class="salesLabel">Xiaomi 1.6L Mi Mijia Smart Rice Cooker Non Stick App Control</a><br/>
				<a>RM 409</a>
                <img style="width:4%;" src = "images/menacc_white.jpg" title="White"/>			
			</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
