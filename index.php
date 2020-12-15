<?php
	require "searchDb.php";
	
	session_start(); 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userName']);
		header("location: login.php");
	}
?>

<html>
	<head lang="en">
		<title>myOnlineStore</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<link rel="icon" href="images/logo.ico">
		<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/slideshow.js"></script>
		<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
		<script>
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
				document.getElementById("header").style.border-radius = "10px";
			  } 
			  else {
				document.getElementById("header").style.border-radius = "0px";
				document.getElementById("header").style.transtion = "0.3s";	
			  }
			}
		</script>
	</head>
	<header id="header">
		<section class="topSection">
			<div class="menu">
				<?php 
					if (!isset($_SESSION['success'])){
						echo "
						<a href='login.php' class='userLogin'>Sign In</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href='trackOrder.php' class='trackOrder'>Track Your Order</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href='privacy.php' class='privacy'>Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;	
						<a href='faq.php' class='faq'>FAQ's</a>&nbsp;&nbsp;&nbsp;&nbsp;";
					}
					else{
						echo "
						<a href='userAccount.php' class='userName'>".$_SESSION['userName']."</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href='trackOrder.php' class='trackOrder'>Track Your Order</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href='privacy.php' class='privacy'>Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;	
						<a href='faq.php' class='faq'>FAQ's</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href='index.php?logout='1'' class='userLogout'>Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;";
					}
				?>
			</div>
		</section>
		<section class="midSection">
			<div class="logo"> 
				<a href ='index.php'> <img src="images/logo_white.png" /></a>
			</div>
			<div class="userInput">
				<form action="searchResults.php" method="post">
					<div class="searchContainer">
						<i class="fas fa-search searchIcon"></i>
						<input type="text" class="searchBox" id="searchBar" minlength="3" placeholder="Search..." name="search" size = "70"/>
					</div>
				</form>
			</div>
		   <div class="checkCart">
				<?php 
					if (!isset($_SESSION['success'])){
						echo "<button class='addToCart-btn' type='submit'><a href='cart.php' class='cart'><i class='fas fa-shopping-cart'></i><label class='cartLabel'>Shopping Cart (0)</label></a></button>&nbsp;&nbsp;&nbsp;&nbsp;";
					}
					else{
						echo "<button class='addToCart-btn' type='submit'><a href='cart.php' class='cart'><i class='fas fa-shopping-cart'></i> <label class='cartLabel'>Shopping Cart (";
						echo $_SESSION['cartNo']; 
						echo ")</label></a></button>&nbsp;&nbsp;&nbsp;&nbsp;";	
					}
				?>
		   </div>
		</section>
	</header>
	<center>
	<body>
		<section class="categories">
			<div class="dropDown-menu">
				<button class="dropDown-btn">Categories</button>
				<div class="dropDown-content">
					<div class="row">
							<div class="column">
							    <a href="menfashion.php" class="columnHeader">Men's Fashion</a>
							    <a href="menfashion_clothing.php">Men's Clothing</a>
							    <a href="menfashion_shoes.php">Men's Shoes</a>
							    <a href="menfashion_access.php">Men's Accessories</a>
							</div>
							<div class="column">
							    <a href="womenfashion.php" class="columnHeader">Women's Fashion</a>
							    <a href="womenfashion_clothing.php">Women's Clothing</a>
							    <a href="womenfashion_shoes.php">Women's Shoes</a>
							    <a href="womenfashion_access.php">Women's Accessories</a>
							</div>
							<div class="column">
							    <a href="elec_access_dev.php" class="columnHeader">Electronic Accessories & Devices</a>
							    <a href="elec_desklap.php">Desktops & Laptops</a>
							    <a href="item3003.php">Smartphones</a>
							    <a href="item3004.php">Televisions</a>
							</div>
							<div class="column">
							    <a href="kitappli.php" class="columnHeader">Kitchen Appliances & Utensils</a>
							    <a href="item4001.php">Refrigerator</a>
							    <a href="item4002.php">Cookings</a>
							    <a href="item4003.php">Cookers</a>
							</div>
							<div class="column">
								<a href="health.php" class="columnHeader">Health & Beauty</a>
								<a href="item5001.php">Bones & Joints</a>
								<a href="item5002.php">Whitening</a>
								<a href="item5003.php">Omega & Fish Oils</a>
							</div>
							<div class="column">
								<a href="sport.php" class="columnHeader">Sports & Lifestyle</a>
								<a href="sport_indoor.php">Indoor</a>
								<a href="sport_outdoor.php">Outdoor</a>
							</div>
						<div class="special"><a class="columnHeader" href="allProducts.php">View All Products</a></div>
					</div>				
			</div>
		</section>
		<section class="quickSelection">
		<table class="selectionContainer"><thead>
		<tr>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_men.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="menfashion.php">Men's Fashion</a></div>
					</div>
				</div>
			</td>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_women.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="womenfashion.php">Women's Fashion</a></div>
					</div>
				</div>
			</td>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_elec.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="elec_access_dev.php">Electronic Accessories & Devices</a></div>
					</div>
				</div>
			</td>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_kitchen.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="kitappli.php">Kitchen Appliances & Utensils</a></div>
					</div>
				</div>
			</td>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_health.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="health.php">Health & Beauty</a></div>
					</div>
				</div>
			</td>
			<td>
				<div class="container">
					<a alt="Avatar" class="image"><img src="images/home_sport.jpg"/></a>
					<div class="overlay">
						<div class="text"><a href="sport.php">Sports & Lifestyle</a></div>
					</div>
				</div>
			</td>
		</tr>
		</thead>
		</table>
		</section>
		<section class="sales">
			<div class="salesTitle"><div class="glow"><a class="glowText">Item On Sales</a></div></div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1003.php"><img src="images/item1003_300px.jpg"/></a>
					<a href="item1003.php" id="secondImg"><img src="images/item1003_2_300px.jpg"/></a>
				</div>
				<a href="item1003.php" class="salesLabel">The Bomber Jacket | Uniform
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 880</strike></a><a> now RM387</a>
				<img style="width:4%;" src = "images/mencloth_navy.jpg" title="Navy"/>
				<img style="width:4%;" src = "images/mencloth_slate.jpg" title="Dark Slate"/>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>
				<img style="width:4%;" src = "images/mencloth_ochre.jpg" title="Ochre"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1005.php"><img src="images/item1005_300px.jpg"/></a>
					<a href="item1005.php" id="secondImg"><img src="images/item1005_2_300px.jpg"/></a>
				</div>
				<a href="item1005.php" class="salesLabel">BIG TREFOIL TRACK PANTS
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 330</strike></a><a> now RM259</a>
				<img style="width:4%;" src = "images/menpants_black.jpg" title="Black"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1013.php"><img src="images/item1013_300px.jpg"/></a>
					<a href="item1013.php" id="secondImg"><img src="images/item1013_2_300px.jpg"/></a>
				</div>
				<a href="item1013.php" class="salesLabel">Nike Phantom Vision Elite
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a>SOLD OUT</a>
				<img style="width:4%;" src = "images/menshoe_black&gold.jpg" title="Black/Gold"/>
				<img style="width:4%;" src = "images/menshoe_customizable.jpg" title="Customizable"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1015.php"><img src="images/item1015_300px.jpg"/></a>
					<a href="item1015.php" id="secondImg"><img src="images/item1015_2_300px.jpg"/></a>
				</div>
				<a href="item1015.php" class="salesLabel">ALDO Potoroo Sunglasses
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 149</strike></a><a> now RM112</a>
				<img style="width:4%;" src = "images/menacc_bronze.jpg" title="Bronze"/>
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item1017.php"><img src="images/item1017_300px.jpg"/></a>
					<a href="item1017.php" id="secondImg"><img src="images/item1017_2_300px.jpg"/></a>
				</div>
				<a href="item1017.php" class="salesLabel">Leather Automatic Buckle Belt
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 219</strike></a><a> now RM175.20</a>
				<img style="width:4%;" src = "images/menacc_black.jpg" title="Black"/>
			</div>
			<!--Women Fashion-->
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2002.php"><img src="images/item2002_300px.jpg"/></a>
					<a href="item2002.php" id="secondImg"><img src="images/item2002_2_300px.jpg"/></a>
				</div>
				<a href="item2002php" class="salesLabel">Gucci Stars And Moon Print Hoodie
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 16720</strike></a><a> now RM10217</a>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2006.php"><img src="images/item2006_300px.jpg"/></a>
					<a href="item2006.php" id="secondImg"><img src="images/item2006_2_300px.jpg"/></a>
				</div>
				<a href="item2006.php" class="salesLabel">Fendi Oversized black rabbit fur Black Coat
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 44840</strike></a><a> now RM16008</a>
				<img style="width:4%;" src = "images/mencloth_black.jpg" title="Black"/>			
			</div>
			<div class="salesContainer">
				<div class="swapImg">
					<a href="item2012.php"><img src="images/item2012_300px.jpg"/></a>
					<a href="item2012.php" id="secondImg"><img src="images/item2012_2_300px.jpg"/></a>
				</div>
				<a href="item2012.php" class="salesLabel">Balenciaga Logo Printed Women's Flip Flops
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br/>
				<a id="offerLabel"><strike>RM 3420</strike></a><a> now RM2310</a>
				<img style="width:4%;" src = "images/menshoe_black.jpg" title="Black"/>				
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
			<!--Ikan Oil-->
            <div class="salesContainer">
				<div class="swapImg">
					<a href="item5003.php"><img src="images/item5003_300px.jpg"/></a>
				</div>
				<a href="item5003.php" class="salesLabel">Fish Oil Plus CoQ-10 (60 Enteric-Coated Softgel)</a><br/>
				<a id="offerLabel"><strike>RM 294.25</strike></a><a> now RM250</a>
			</div>
			<!--Fishing-->
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
			<!--Swimming-->
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
		</section>
	</body>
	</center>
</html>

<?php
	require "footer.php";
?>
