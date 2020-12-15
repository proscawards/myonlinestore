<?php
    require "includes/dbh.inc.php";
	$output = '';
	
	if (isset($_POST['search'])){
		$searchInput = $_POST['search'];
		$searchInput = preg_replace("#[^0-9a-z]#i","",$searchInput);
		
		echo
		"<head lang='en'>
			<title>myOnlineStore</title>
			<meta charset='utf-8'>
			<link rel='stylesheet' href='styles/header.css' type='text/css'/>
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bebas Neue'/>
			<link rel='icon' href='images/logo.ico'>
			<script src='https://kit.fontawesome.com/935200c161.js' crossorigin='anonymous'></script>
		</head>
		<header>
			<section class='menu'>
				<div class='menuBar'>
					<a href='index.php' class='logo'><img src ='images/logo_only_white.png'></a>
					<a href='index.php' class='home'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href='trackOrder.php' class='trackOrder'>Track Your Order</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href='privacy.php' class='privacy'>Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;	
					<a href='faq.php' class='faq'>FAQ's</a>&nbsp;&nbsp;&nbsp;&nbsp;					
					<a href='cart.php' class='cart'>Shopping Cart (0)</a>&nbsp;&nbsp;&nbsp;&nbsp;		
					<div class='userInput'>
						<form action='searchResults.php' method='post'>
							<div class='searchContainer'>
								<i class='fas fa-search searchIcon'></i>
								<input type='text' class='searchBox' id='searchBar' minlength='3' placeholder='Search...' name='search'/>
							</div>
						</form>
					</div>
				</div>
			</section>
		</header>";
		
		if (empty($searchInput)){
			header ("Location: allProducts.php");
		}
		
		else{
			$query = "Select * FROM item WHERE ITEM_NAME LIKE '%$searchInput%' OR ITEM_CAT LIKE '%$searchInput%' OR ITEM_BRAND LIKE '%$searchInput%'";
			$result = mysqli_query($conn, $query);
			
			if (mysqli_num_rows($result) > 0){
				echo "<h1>Search Result(s)</h1>";
				echo "<div>Searched Keyword(s): <a style='color:red;'>".$searchInput."</a></div>";
				echo "<center>";
				while($row = mysqli_fetch_assoc($result)){
					$itemName = $row['ITEM_NAME'];
					$itemCat = $row['ITEM_CAT'];
					$itemCode = $row['ITEM_ID'];
					$itemPrice = $row['ITEM_PRICE'];
					echo 
					"<body>
						<div class='salesContainer'>
							<div class='swapImg'>
								<a href='item".$itemCode.".php'><img src='images/item".$itemCode."_300px.jpg'/></a>
								<a href='item".$itemCode.".php' id='secondImg'><img src='images/item".$itemCode."_2_300px.jpg'/></a>
							</div>
							<a href='item".$itemCode.".php' class='salesLabel'>".$itemName."</a><br/>";
					if ($itemPrice == 99999.99){echo "<a>SOLD OUT </a>";}
					else{echo "<a>RM ".$itemPrice." </a>";}		
					echo "</div>
					</body>";
				}
			echo "</center>";			
			}
		
			else{
				echo 
				"<center>
				<body><br/>
				<img src='images/error404.png' style='padding:20px 0px 20px;'/>			
				<div style='font-size:20px;padding-bottom:180px;'>
					That's an error! You've searched something that's not available in the database!<br/>
					No item(s) matched the search criteria!<br/>
					Searched keyword(s): <a style='color:red;'>".$_POST['search']."</a><br/>
					Return to <a href='index.php'>homepage</a>.
				</div>
				</body></center>";
			}

		}
		echo "<center>
		<section class='footer'>
			<div class='footerMenu'>
				<a href='index.php' class='home'>Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href='trackOrder.php'>Track Your Order</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href='login.php'>Sign In</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href='privacy.php'>Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href='faq.php'>FAQ's</a>
			</div>
			<div class='socialIcon'>
				<a href='http://www.facebook.com'><img src='images/facebook50px.png'/></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='http://www.instagram.com'><img src='images/insta50px.png' /></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='http://www.twitter.com'><img src='images/twitter50px.png' /></a>
			</div>
			<div class='footerCopyright'> Copyright &copy; 2020 under TIS2151 - Web Application Development, Faculty of Computing & Informatics, MMU. All Rights Reserved.
			</div>
		</section></center>";
	}

?>