<?php
	session_start();
?>

	<main>
		<head>
			<meta lang="en">
			<link rel="icon" href="images/logo.ico">
			<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue"/>
			<style>
				main{font-family: Bebas Neue;}
			</style>
		</head>
		<center>
		<section style="padding:50px;">
			<?php 
			if (($_SESSION['redirect'] == "logged in") && $_SESSION['success']){
				echo "<h1>Logged In Successfully! You are now redirecting to Home Page...</h1>";
				echo "<img src='images/loading.gif' style='width:10%'/>";
				header ("refresh:3; url=index.php");
			}
			if (($_SESSION['redirect'] == "password changed") && (!$_SESSION['success'])){
				echo "<h1>Password Changed Successfully! You are now redirecting to Login Page...</h1>";
				echo "<img src='images/loading.gif' style='width:10%'/>";
				session_destroy();
				header ("refresh:3; url=login.php");
			}		
			if (($_SESSION['redirect'] == "registered") && (!$_SESSION['success'])){
				echo "<h1>Registered Successfully! You are now redirecting to Login Page...</h1>";
				echo "<img src='images/loading.gif' style='width:10%'/>";
				session_destroy();
				header ("refresh:3; url=login.php");
			}			
			$_SESSION['redirect'] = "";
			
			?>
		</section>
		</center>
	</main>
