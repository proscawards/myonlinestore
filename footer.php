<?php
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
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/footer.css" type="text/css"/>
		<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Bebas Neue'/>
		<link rel="icon" href="images/logo.ico">
	</head>
	<footer>
		<center>
		<section class="footer">
			<div class="footerMenu">
				<?php 
					if (!isset($_SESSION['success'])){
						echo "
						<a href='index.php'>Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='trackOrder.php'>Track Your Order</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='login.php'>Sign In</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='privacy.php'>Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='faq.php'>FAQ's</a>";
					}
					else{
						echo "
						<a href='index.php'>Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='trackOrder.php'>Track Your Order</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='index.php?logout='1'' class='userLogout'>Logout</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='privacy.php'>Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href='faq.php'>FAQ's</a>";
					}
				?>
			</div>
			<div class="socialIcon">
				<a href="http://www.facebook.com"><img class="img" src="images/facebook50px.png"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://www.instagram.com"><img class="img" src="images/insta50px.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://www.twitter.com"><img class="img" src="images/twitter50px.png" /></a>
			</div>
		    <div class="footerCopyright"> Copyright &copy; 2020 under TIS2151 - Web Application Development, Faculty of Computing & Informatics, MMU. All Rights Reserved.
			</div>
		</section>
		</center>
	</footer>
</html>