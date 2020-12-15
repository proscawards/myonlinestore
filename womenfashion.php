<?php
    require "header.php";
?>

<html>
    <head>
        <title>Women's Fashion</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="styles/styleNonindex.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
		<script type="text/javascript" src="scripts/changeView.js"></script>
    </head>    
    <body>
        <h1 id="wTitle">Women's Fashion</h1>
        <p id="wDesc">By 2017, it had also become fashionable for younger middle-class women in Britain, Ireland, Norway, Sweden, Australia, New Zealand, Canada, Denmark, and Finland to wear more "grown up" or normcore styles, in reaction to the previous mismatched hipster fashions and the athleisure trend of 2014 which mixed traditional formal wear with high end sportswear. Longer plaid skirts, billowing white blouses, vintage sheer black stockings with garterbelts, bias cut midi skirts, pale blue belted trenchcoats, Argyle sweaters, silk blouses, sensible flat shoes and sandals, straight leg jeans, long powder blue coats worn with matching pillbox hats, traditional style wool or silk scarves, blue or red paisley Nehru collar coats of the type popularised by Zara, nude pantyhose, bows similar to those worn by Margaret Thatcher, black velvet, blush and blue denim mule slippers with bows, and baggy black capri pants became popular in the UK in response to perceived sexualised and misogynistic dress codes in many workplaces (especially the compulsory wearing of high heels), and also due to the influence of Kate Middleton and celebrity early adopters like Victoria Beckham who sought a more professional looking image in the winter of 2016. Skinny jeans began to be replaced by straight leg jeans designed to follow the contours of the body, and other accessories that declined in popularity included chokers, gaudy brand labels, ripped jeans, patches, and pin badges due to their childish connotations.
        </p>
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
			<?php require "filter_women.php";?>
		</div>
		</section>
		</center>
    </body>
</html>

<?php 
    require "footer.php";
?>
