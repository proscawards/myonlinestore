<?php
	require "searchDb.php";
	session_start();
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<title>myOnlineStore</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles/header.css" type="text/css"/>
		<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Bebas Neue'/>
		<link rel="icon" href="images/logo.ico">
		<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
	</head>
	<header>
		<section class="menu">
			<div class="menuBar">
				<a href="index.php" class="logo"><img src ="images/logo_only_white.png"/></a>
				<a href="index.php" class="home">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="trackOrder.php" class="trackOrder">Track Your Order</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="privacy.php" class="privacy">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;	
				<a href="faq.php" class="faq">FAQ's</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
					if (!isset($_SESSION['success'])){
						echo "<a href='cart.php' class='cart'><i class='fas fa-shopping-cart'></i>Shopping Cart (0)</a>&nbsp;&nbsp;&nbsp;&nbsp;";
					}
					else{
							echo "<a href='cart.php' class='cart'><i class='fas fa-shopping-cart'></i>Shopping Cart (";
							echo $_SESSION['cartNo']; 
							echo ")</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
					}
				?>
				<a class="userInput">
					<form action="searchResults.php" method="post">
						<div class="searchContainer">
							<i class="fas fa-search searchIcon"></i>
							<input type="text" class="searchBox" id="searchBar" minlength="3" placeholder="Search..." name="search" size = "70"/>
						</div>
					</form>
				</a>
			</div>
		</section>
	</header>
</html>