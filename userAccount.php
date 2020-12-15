<?php
	require "header.php";
	require "includes/dbh.inc.php";
	$errors = '';
	$update = "";
	$userID = $_SESSION['userID'];
	
    if((!$_SESSION['success'] === true))
    {
      header("location:login.php");
    }
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userName']);
		header("location: login.php");
	}
	
	// My Account Update Information
	if (isset($_POST['save-submit'])) {
		$userFName = mysqli_real_escape_string($conn, $_POST['userFName']);
		$userLName = mysqli_real_escape_string($conn, $_POST['userLName']);
		$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
		$userPhone = mysqli_real_escape_string($conn, $_POST['userPhone']);

		if ($userFName != preg_match("/^[a-zA-Z-' ]*$/",$userFName)){ $errors= "Only letters and white space are allowed!";}
		if ($userLName != preg_match("/^[a-zA-Z-' ]*$/",$userLName)){ $errors = "Only letters and white space are allowed!";}	
		
		if (empty($userFName)){
			$userFName = $_SESSION['userFname'];
		}		
		if (empty($userLName)){
			$userLName = $_SESSION['userLname'];
		}		
		if (empty($userEmail)){
			$userEmail = $_SESSION['userEmail'];
		}
		if (empty($userPhone)){
			$userPhone = $_SESSION['userPhone'];
		}
		
		$query = "UPDATE user SET USER_FNAME = '$userFName', USER_LNAME = '$userLName', USER_EMAIL = '$userEmail', USER_PHONE = '$userPhone' where USER_ID = '$userID'";
		$results = mysqli_query($conn, $query);
		$_SESSION['userName'] = $userFName." ".$userLName;		
		$_SESSION['userFname'] = $userFName;
		$_SESSION['userLname'] = $userLName;	
		$_SESSION['userEmail'] = $userEmail;
		$update = "Information Updated!";
		$errors = "";
	}
	
	
	// Change Password
	if (isset($_POST['pw-submit'])) {
		$userOldPassword = mysqli_real_escape_string($conn, $_POST['userOldPassword']);
		$userPassword = mysqli_real_escape_string($conn, $_POST['userPassword']);
		$userRePassword = mysqli_real_escape_string($conn, $_POST['userRePassword']);
		$oldPw = $_SESSION['userPw'];

		if (empty($userOldPassword)){
			$errors = "Current password is required!";
		}
		
		if ($userOldPassword != $oldPw)	{
			$errors = "Current password is incorrect!";
		}
		
		if (empty($userPassword)){
			$errors = "New password is required!";
		}	
		
		if (empty($userRePassword)){
			$errors = "Please retype the new password!";
		}

		if (($userOldPassword == $userPassword) && ($userOldPassword && $userPassword != NULL)){
			$errors = "Current password cannot be the same as new password!";
		}		
		
		if ($userPassword != $userRePassword){
			$errors = "The two passwords do not match!";
		}		
		
		else{
			$newPassword = md5($userPassword);
			$query = "UPDATE user SET USER_PASS = '$newPassword' where USER_ID = '$userID'";
			$results = mysqli_query($conn, $query);
			$update = "Password Changed!";
			$errors = "";
		}	
		
	}
	
	//Add Address
	if (isset($_POST['add-submit'])) {
		$userAddress1 = mysqli_real_escape_string($conn, $_POST['userAddress1']);
		$userAddress2 = mysqli_real_escape_string($conn, $_POST['userAddress2']);
		$userPostcode = mysqli_real_escape_string($conn, $_POST['userPostcode']);
		$userCity = mysqli_real_escape_string($conn, $_POST['userCity']);
		$userState = mysqli_real_escape_string($conn, $_POST['userState']);		
		
		if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){ $errors = "Only letters and white space are allowed!";}
		if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){ $errors = "Only letters and white space are allowed!";}		
		if (empty($userAddress1)){
			$errors = "Address cannot be empty!";
		}
		if (empty($userPostcode)){
			$errors = "Postcode is required!";
		}
		if (empty($userCity)){
			$errors = "City/District is required!";
		}
		if (empty($userState)){
			$errors = "State is required!";
		}		
		
		else{
			if (empty($userAddress2)){
				$userAddress = $userAddress1." ".$userPostcode.", ".$userCity.", ".$userState.".";
			}
			else{
				$userAddress = $userAddress1." ".$userAddress2." ".$userPostcode.", ".$userCity.", ".$userState.".";				
			}
			
			if ($userAddress == $_SESSION['userAddress']){
				$errors = "New address cannot be the same as the existing address!";
			}
			else{
				$query = "UPDATE user SET USER_ADDRESS = '$userAddress' where USER_ID = '$userID'";
				$results = mysqli_query($conn, $query);
				$_SESSION['userAddress'] = $userAddress;		
				$update = "Address Updated!";
				$errors = "";
			}	
		}
	}
	
?>

<html>
	<head>
		<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
		<script type="text/javascript" src="scripts/changeUserView.js"></script>
		<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/togglePw.js"></script>		
		<!-- jquery for data-mask-->
		<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
		<script src="scripts/jquery.mask.min.js"></script>
		<script type="text/javascript">
			jQuery(function($){
				$(".postcode").mask("00000");
				$(".phoneNo").mask("+6000 00000000");
			});
		</script>
		<!-- -->
	</head>
	<body>
		<center><h1>Welcome, <?php echo $_SESSION['userName']; ?>!</h1>
		<table class="userTable">
		<thead>
			<tr>
				<td class="userBtn"><button class="innerBtn" id="accBtn" onclick="displayMyAccount();">My Account</button></td>
				<td class="userView" rowspan="4">
				<div id="userMain" style="display:none;">
					<a id="sectionLabel">My Account</a>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="titleLabel">First Name:</label><br/>
						<div class="regContainer">
							<i class="fas fa-user regIcon"></i>
							<input type="text" class="regBox" id="searchBar" placeholder="<?php echo $_SESSION['userFname']; ?>" name="userFName"/>
						</div><br/>
						<label class="titleLabel">Last Name:</label><br/>
						<div class="regContainer">
							<i class="fas fa-user regIcon"></i>
							<input type="text" class="regBox" id="searchBar" placeholder="<?php echo $_SESSION['userLname']; ?>" name="userLName"/>
						</div><br/>	
						<label class="titleLabel">E-Mail:</label><br/>
						<div class="regContainer">
							<i class="fas fa-envelope regIcon"></i>
							<input type="email" class="regBox" id="searchBar" placeholder="<?php echo $_SESSION['userEmail']; ?>" name="userEmail"/>
						</div><br/>
						<label class="titleLabel">Phone No.:</label><br/>
						<div class="regContainer">
							<i class="fas fa-phone regIcon"></i>
							<input type="text" class="phoneNo" id="searchBar" placeholder="<?php echo $_SESSION['userPhone']; ?>" name="userPhone"/>
						</div><br/>						
						<label class="titleLabel">Total Orders: <?php echo $_SESSION['userOrder']; ?></label><br/>
						<input type="submit" class="userOrder-btn" name="save-submit" value="Save Information"><br/>
					</form>
				</div>
				<div id="userAddBook" style="display:none;">
					<a id="sectionLabel">Address Book</a>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="titleLabel">Current Address:</label><br/>	
						<a><?php echo $_SESSION['userAddress']; ?></a><br/><br/>
						<label class="titleLabel">Update Existing Address:</label><br/>
						<input type="text" class="userEmailInput" name="userAddress1" placeholder="MMU, Persiaran Multimedia," size="60"><br/>						
						<input type="text" class="userEmailInput" name="userAddress2" placeholder="Address Line 2 Here..." size="60"><br/>
						<input type="text" id="userAddress" class="postcode" name="userPostcode" placeholder="00000">					
						<input type="text" id="userAddress" name="userCity" placeholder="Cyberjaya" >					
						<input type="text" id="userAddress" name="userState" placeholder="Selangor" ><br/>							
						<input type="submit" class="userOrder-btn" name="add-submit" value="Save"><br/>	
					</form>	
	
				</div>
				<div id="userChangePw" style="display:none;">
					<a id="sectionLabel">Change Password</a>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<label class="titleLabel">Current Password:</label><br/>
						<div class="regContainer">
							<i class="fas fa-key regIcon"></i>
							<input type="password" class="regBox" id="pwOlInput" placeholder="Current Password..." name="userOldPassword"/>
							<i class="fas fa-eye eyeIconOl" id="eyeIconOl" onclick="togglePw()"></i>
						</div><br/><br/>
						<label class="titleLabel">New Password:</label><br/>
						<div class="regContainer">
							<i class="fas fa-key regIcon"></i>
							<input type="password" class="regBox" id="pwInput" placeholder="Password..." name="userPassword"/>
							<i class="fas fa-eye eyeIcon" id="eyeIcon" onclick="togglePw()"></i>
						</div><br/><br/>
						<label class="titleLabel">Retype Password:</label><br/>
						<div class="regContainer">
							<i class="fas fa-key regIcon"></i>
							<input type="password" class="regBox" id="pwReInput" placeholder="Retype Password..." name="userRePassword"/>
							<i class="fas fa-eye eyeIconRe" id="eyeIconRe" onclick="togglePw()"></i>
						</div><br/><br/>
						<input type="submit" class="userOrder-btn" name="pw-submit" value="Save"><br/>						
					</form>	
				</div>
				<div id="userTrack"  style="display:none;">
					<a id="sectionLabel">View My Order(s)</a>
					<div class="viewAllOrder">
					<?php 
						$query = "SELECT * FROM orders WHERE USER_ID = '$userID'";
						$results = mysqli_query($conn, $query);	
						if (mysqli_num_rows($results) > 0){
							while($row = mysqli_fetch_assoc($results)){
								$orderID = $row['ORDER_ID'];
								$orderDate = $row['ORDER_DATE'];
								$unitPrice = $row['UNIT_PRICE'];
								$quantity = $row['QUANTITY'];
								$totalPrice = $row['TOTAL_PRICE'];	
								$itemID = $row['ITEM_ID'];
								$paymentID = $row['PAYMENT_ID'];
								if ($paymentID == 1){$paymentMeth = "Credit Card/Debit Card";}
								if ($paymentID == 2){$paymentMeth = "Bank Transfer";}
								
								$nquery = "SELECT ITEM_NAME FROM item WHERE ITEM_ID = '$itemID'";
								$nresults = mysqli_query($conn, $nquery);	
								while($nrow = mysqli_fetch_assoc($nresults)){
									$itemName = $nrow['ITEM_NAME'];
								}
								echo 
									"<div class='smallItem' style='border:1px solid white;padding:2px;'>
									<a>Purchased on ".$orderDate."</a><br/>
									<table><tr>
									<td style='border:none;width:20%;'>
									<img src='images/item".$itemID."_1.jpg' style='width:100%;'/></td>
									<a>Order ID: ".$orderID."</a><br/>
									<td style='border:none;width:100%;'><a style='font-family:Bebas Neue;font-size:20px;'>".$itemName."</a><br/>
									<a>Unit Price: RM".$unitPrice."</a><br/>
									<a>Quantity: ".$quantity."</a><br/>
									<a>Total Price: RM".$totalPrice."</a><br/>
									<a>Payment Method: ".$paymentMeth."</a><br/>
									<a href='item".$itemID.".php' style='text-decoration:none;color:black;'><button class='userOrder-btn' style='float:right;'>View Item</button></a>
									<br/></td>								
									</tr></table>
									</div>";							
							}
						}	
					?>
					</div>
				</div>
				</td>
			</tr>
			<tr>
				<td class="userBtn"><button class="innerBtn" id="addBtn" onclick="displayAddressBook();">Address Book</button></td>
			</tr>
			<tr>
				<td class="userBtn"><button class="innerBtn" id="pwBtn" onclick="displayChangePw();">Change Password</button></td>
			</tr>
			<tr>
				<td class="userBtn"><button class="innerBtn" id="trackBtn" onclick="displayTrackOrder();">View My Order(s)</button></td>
			</tr>
			<tr><td class="userBtn" colspan="2" style="text-align:center;">
			<?php 
				if ($update != ""){
					echo "<a id='updateLabel'>".$update."</a>";
				}
				else{
					echo "<a id='updateLabel' style='color:red;'>".$errors."</a>";
				}
			?></td></tr>
		</thead>
		</table>
		</center>
	</body>
</html>

<?php require "footer.php"; ?>