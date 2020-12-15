<?php

	require "header.php";
	require "includes/dbh.inc.php";
	$userID = $_SESSION['userID'];
	$error = "";
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userName']);
		header("location: login.php");
	}
	
	if (isset($_POST['seq-submit'])){
		$userPass = mysqli_real_escape_string($conn, $_POST['userPassword']);
		$userRePass = mysqli_real_escape_string($conn, $_POST['userRePassword']);		
		if (empty($userPass)) {
			$error = "Password is required!";
		}
		if (empty($userRePass)) {
			$error = "Please retype the password!";
		}		
		if ($userPass == $_SESSION['userPass']){
			$error = "The new password is the same as the old password!";			
		}
		else{
			$userPass = md5($userPass);
			$query = "UPDATE user SET USER_PASS = '$userPass' WHERE USER_ID = '$userID'";
			$results = mysqli_query($conn, $query);
			$_SESSION['redirect'] = "password changed";	
			$_SESSION['success'] = false;
			header("Location: redirect.php");
		}
	}
	
?>

	<main>
		<head>
			<meta lang="en">
			<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
		</head>
		<center>
		<section class="login">
			<fieldset class="loginMenu">
				<legend style="font-size:20px">Reset Password</legend>
				<section class="inputEmail">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="pwlLabel" style="padding-right:250px;"> New Password:</label><br/>
						<div class="loginContainer">
							<i class="fas fa-key loginIcon"></i>
							<input type="password" class="loginBox" id="searchBar"  placeholder="Password..." name="userPassword" size = "70"/>
						</div><br/>
						<label class="userRePasswordLabel"> Retype Password:</label><br/>
						<div class="regContainer">
							<i class="fas fa-key regIcon"></i>
							<input type="password" class="regBox" id="searchBar"  placeholder="Retype Password..." name="userRePassword" size = "70"/>
						</div><br/>					
						<a style="color:red;"><?php echo $error; ?></a><br/>	
						<input type="submit" class="seq-btn" name="seq-submit" value="Save"><br/>
					</form>
				</section>
			</fieldset>
		</section>
		</center>
	</main>
	
<?php
	require "footer.php";
?>