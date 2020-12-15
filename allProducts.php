<?php
	require "header.php";
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<title>myOnlineStore</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
		<link rel="stylesheet" href="styles/header.css" type="text/css"/>		
		<link rel="stylesheet" href="styles/footer.css" type="text/css"/>		
		<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Bebas Neue'/>
		<link rel="icon" href="images/logo.ico">
	</head>
	<body>
		<h1>All Products</h1>
		<center>
		<section>
		<div class="filterSelection">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<button class="dropbtn" name="Section">Section</button>
			<div class="dropdown">
				<button class="dropbtn">Name</button>
				<div class="dropdown-content">
					<a><button name="NameAsc" class="filterBtn">Ascending Order</button></a>
					<a><button name="NameDesc" class="filterBtn">Descending Order</button></a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Price</button>
				<div class="dropdown-content">
					<a><button name="PriceAsc" class="filterBtn">Low To High</button></a>
					<a><button name="PriceDesc" class="filterBtn">High To Low</button></a>
					<a class="glow"><button name="PricePromo" class="filterBtn">Promotion</button></a>					
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Colour Family</button>
				<div class="dropdown-content">
					<a><button name="ColourBlack" class="filterBtn">Black</button></a>
					<a><button name="ColourWhite" class="filterBtn">White</button></a>
					<a><button name="ColourGreen" class="filterBtn">Green</button></a>
					<a><button name="ColourNavy" class="filterBtn">Navy</button></a>	
					<a><button name="ColourPink" class="filterBtn">Pink</button></a>					
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Categories</button>
				<div class="dropdown-content">
					<a><button name="CatAcc" class="filterBtn">Accessories</button></a>
					<a><button name="CatApp" class="filterBtn">Appliances</button></a>					
					<a><button name="CatCloth" class="filterBtn">Clothing</button></a>
					<a><button name="CatDev" class="filterBtn">Devices</button></a>
					<a><button name="CatIndoor" class="filterBtn">Indoor</button></a>					
					<a><button name="CatMed" class="filterBtn">Medicines</button></a>
					<a><button name="CatOutdoor" class="filterBtn">Outdoor</button></a>
					<a><button name="CatPants" class="filterBtn">Pants</button></a>
					<a><button name="CatShoes" class="filterBtn">Shoes</button></a>				
				
				</div>
			</div>			
			</form>
		</div>
		<div class="displayFiltered">
			<?php require "filter_allProducts.php";?>
		</div>
		</section>
		</center>
	</body>
</html>

<?php
	require "footer.php";
?>