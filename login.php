<?php
	require "header.php";	
	require "includes/dbh.inc.php";
	$emailError = "";
	$passError = "";
	$errors= "";
	 
	// Processing form data when form is submitted
	if (isset($_POST['login-submit'])) {
		$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
		$userPass = mysqli_real_escape_string($conn, $_POST['userPassword']);

		if (empty($userEmail)) {
			$emailError =  "Email is required!";
		}
		if (empty($userPass)) {
			$passError = "Password is required!";
		}

		else {
			$userPass = md5($userPass);
			$query = "SELECT * FROM user WHERE USER_EMAIL = '$userEmail' AND USER_PASS = '$userPass'";
			$results = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_assoc($results)){
				$userFName = $row['USER_FNAME'];	
				$userLName = $row['USER_LNAME'];
				$userOrder = $row['ORDERS_MADE'];				
				$userID = $row['USER_ID'];
				$userSeqQues = $row['USER_SEQQUES'];
				$userSeqAns = $row['USER_SEQANS'];
				$userAddress = $row['USER_ADDRESS'];
				$userPhone = $row['USER_PHONE'];				
			}
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['userName'] = $userFName." ".$userLName;
				$_SESSION['userEmail'] = $userEmail;
				$_SESSION['userFname'] = $userFName;
				$_SESSION['userLname'] = $userLName;
				$_SESSION['userPw'] = $userPass;			
				$_SESSION['userID'] = $userID;
				$_SESSION['userAddress'] = $userAddress;
				$_SESSION['userPhone'] = $userPhone;				
				$_SESSION['userOrder'] = $userOrder;
				$_SESSION['userSeqQues'] = $userSeqQues;	
				$_SESSION['userSeqAns'] = $userSeqAns;
				$_SESSION['success'] = true;
				$_SESSION['cartNo'] = 0;
				$_SESSION['itemID'] = array();				
				$_SESSION['itemName'] = array();
				$_SESSION['itemCost'] = array();
				$_SESSION['itemColour'] = array();
				$_SESSION['itemSize'] = array();
				$_SESSION['itemQuantity'] = array();
				$_SESSION['buyName'] = "";
				$_SESSION['buyCost'] = 0.00;
				$_SESSION['buyColour'] = "";
				$_SESSION['buySize'] = "";
				$_SESSION['buyQuantity'] = 0;
				$_SESSION['Total_price'] = 0.00;
				$_SESSION['bank'] = "";
				$_SESSION['orderID'] = "";
				$_SESSION['redirect'] = "logged in";
				header('location: redirect.php');
			}else {
				$errors =  "Wrong username/password combination";
			}
		}
	}

?>

	<main>
		<head>
			<meta lang="en">
			<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
			<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
			<script type="text/javascript" src="scripts/togglePw.js"></script>				

		</head>
		<center>
		<section class="login">
			<fieldset class="loginMenu">
				<legend style="font-size:20px">Sign In into myOnlineStore</legend>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<label class="userEmailLabel"> E-mail:</label><br/>
					<div class="loginContainer">
						<i class="fas fa-envelope loginIcon"></i>
						<input type="email" class="loginBox" id="searchBar" placeholder="E-mail..." name="userEmail" size = "70"/>
					</div>
					<a style="color:red;"><?php echo $emailError; ?></a><br/>
					<label class="userPasswordLabel"> Password:</label><br/>
					<div class="loginContainer">
						<i class="fas fa-key loginIcon"></i>
						<input type="password" class="loginBox" id="pwInput" placeholder="Password..." name="userPassword" size = "70"/>
						<i class="fas fa-eye eyeIcon" id="eyeIcon" onclick="togglePw()"></i>
					</div>
					<a style="color:red;"><?php echo $passError; ?></a><br/>					
					<input type="submit" class="login-btn" name="login-submit" value="Login"><br/><br/>
					<a style="color:red;"><?php echo $errors; ?></a><br/>
					<a href="forgotPass.php" class="userForgotPass">Forgot Password?</a><br/>
					<br/><br/>Don't have an account? Register a new account
					<a href="registration.php" class="userRegister">here</a><br/>
				</form>
			</fieldset>
		</section>
		</center>
	</main>

<?php
	require "footer.php";
?>
