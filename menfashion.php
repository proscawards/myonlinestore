<?php
    require "header.php";
	require "includes/dbh.inc.php";

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>

<html>
    <head>
        <title>Men's Fashion</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="mTitle">Men's Fashion</h1>
        <p id="mDesc">Beginning in March 2017, clothing inspired by 1990s Britpop, mod revival and early 1970s fashion became popular among young men in the US, UK, Australia, Canada, Ireland, Italy, Hong Kong, and France, especially in beige, cream, sand, orange, blue, brown, dark green, ecru, red, pistachio, and complementary neutral tones. Desirable items included suede cowboy boots and winklepickers, stone grey suits with Teddy Boy inspired velvet shawl collars, retro black and red sneakers, Chelsea boots with contrasting red and blue elastic, striped dress shirts, sailor T shirts with vertical navy blue stripes, tropical print shirts, navy and red track jackets, two button cream trenchcoats, corduroy sportcoats worn with turtle neck sweaters, double breasted navy blue or herringbone tweed overcoats with shawl collars, six button polo shirts, natural suede chukka boots, sunflower print button-down shirts, white T shirts with orange and blue color blocks, turquoise dip dye swimshorts, military chic parkas, wool overcoats, red Superdry parkas with fur hoods, navy blue straw trilby hats, short sleeved cardigans, red Doc Martens, houndstooth or Prince of Wales check sportcoats, pants with a contrasting red stripe, lightweight nautical inspired navy peacoats, embroidered silk souvenir jackets featuring birds, skulls, dragons or tigers, bomber jackets with orange linings, Converse modern sneakers in silver, red, royal blue, or green muted Aloha shirts worn over plain T shirts, brown flying jackets, corduroy pants, beige anoraks, pale denim slim-fit jeans and chinos, checked button down shirts in pink, blue, orange, red, and white with oversized Cuban collars, cropped black high waisted pants, Henley shirts, grey T shirts, preppy striped polo shirts with wider collars, double strap combat boots, claret, teal, electric blue, or navy blue velvet tuxedo jackets, and psychedelic floral print shirts frequently worn tucked into the pants.
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
					<a><button name="CatCloth" class="filterBtn">Clothing</button></a>
					<a><button name="CatPants" class="filterBtn">Pants</button></a>
					<a><button name="CatShoes" class="filterBtn">Shoes</button></a>				
				</div>
			</div>	
			</form>
		</div>
		<div class="displayFiltered">
			<?php require "filter_men.php";?>
		</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
