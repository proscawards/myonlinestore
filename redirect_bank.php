<?php
	session_start();
?>

	<main>
		<head>
			<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" href="images/ipay88.ico">
		</head>
		<center>
		<section style="padding:50px;">
			<?php 
				echo "<img src='images/loadirect.gif' style='width:70%'/>";
				echo "<h1> You are now redirecting to Bank Server!</h1>";
				echo "<h1> Please Do Not Close This Tab</h1>";
				header ("refresh:3; url=fpx.php");
			?>
		</section>
		</center>
	</main>
