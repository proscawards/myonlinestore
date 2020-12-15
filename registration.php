<?php
	require "header.php";
	require 'includes/dbh.inc.php';
	$emailError = "";
	$passError = "";
	$passReError = "";
	$fNameError = ""; 
	$lNameError = ""; 
	$ansError = ""; 	
	$termsError = "";
	
	if (isset($_POST['register-submit'])) {
		// receive all input values from the form
		$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
		$userPassword = mysqli_real_escape_string($conn, $_POST['userPassword']);	
		$userRePassword = mysqli_real_escape_string($conn, $_POST['userRePassword']);	
		$userFName = mysqli_real_escape_string($conn, $_POST['userFName']);		
		$userLName = mysqli_real_escape_string($conn, $_POST['userLName']);
		$userOption = mysqli_real_escape_string($conn, $_POST['seqQues']);
		$userSeqAns = mysqli_real_escape_string($conn, $_POST['userSeqAns']);	
		
		//check if all criteria matches
		if (empty($userFName)) { $fNameError = "First name is required!"; }
		if (empty($userLName)) { $lNameError = "Last name is required!"; }
		if (empty($userSeqAns)) { $ansError = "Security answer is required!"; }
		if (empty($userEmail)) { $emailError = "Email is required!"; }
		if (empty($userPassword)) { $passError = "Password is required!"; }
		if (empty($userRePassword)) { $passReError = "Please retype the password!"; }		
		if ($userPassword != $userRePassword) {
			$passError = "The two passwords do not match!";
		}
		if (!isset($_POST['userTerms'])){
			$termsError = "(Please Read the Terms & Condition first!)";			
		}

		// first check the database to make sure 
		// a user does not already exist with the same username and/or email
		$user_check_query = "SELECT * FROM user WHERE USER_EMAIL='$userEmail' LIMIT 1";
		$results = mysqli_query($conn,  $user_check_query);
		$checkUser = mysqli_fetch_assoc($results);  
		while($checkUser = mysqli_fetch_assoc($results)){
			if ($userEmail == $checkUser['USER_EMAIL']) {
				$emailError = "E-mail already existed!";
			}
		}
		if ($emailError == "" && $passError == "" && $passReError == "" && $fNameError == "" &&	$lNameError == "" && $ansError == ""){
			$userLoadID = "SELECT USER_ID FROM user";
			$getID = mysqli_query($conn,  $userLoadID);		
			while($row = mysqli_fetch_assoc($getID)){
				$userID = intval($row['USER_ID']);	
			}
			$newID = strval($userID + 1);

			$password = md5($userPassword);//encrypt the password before saving in the database
			$query = "Insert into user (USER_ID, USER_FNAME, USER_LNAME, USER_EMAIL, USER_PASS, USER_SEQQUES, USER_SEQANS, ACC_TYPE, ORDERS_MADE) VALUES ('$newID','$userFName','$userLName','$userEmail','$userPassword','$userOption','$userSeqAns','0',0)";
			mysqli_query($conn, $query);
			$_SESSION['redirect'] = "registered";	
			$_SESSION['success'] = false;	
			header('location: redirect.php');
		  }
	}
?>

	<main>
		<head>
			<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
			<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
			<!--<script type="text/javascript" src="scripts/validateInput.js"></script>-->
			<script>
				function openNav() {
					location.replace('terms.php');	  
				}
			</script>
		</head>
		<center>
		<section class="registration">
			<fieldset class="registerMenu">
				<legend style="font-size:20px">Create a new account in myOnlineStore</legend>
				<form action="registration.php" method="post"><br/>
					<label class="userFNameLabel"> First Name:</label><br/>
					<div class="regContainer">
						<i class="fas fa-user regIcon"></i>
						<input type="text" class="regBox" id="searchBar" minlength="2" placeholder="First Name..." name="userFName" size = "70" onblur="checkFName();"/>
					</div>					
					<a id="fNameError" style="color:red;"><?php echo $fNameError; ?></a><br/>	
					<label class="userLNameLabel"> Last Name:</label><br/>					
					<div class="regContainer">
						<i class="fas fa-user regIcon"></i>
						<input type="text" class="regBox" id="searchBar" minlength="2" placeholder="Last Name..." name="userLName" size = "70" onblur="checkLName();"/>
					</div>
					<a id="lNameError" style="color:red;"><?php echo $lNameError; ?></a><br/>
					<label class="userEmailLabel"> E-mail:</label><br/>
					<div class="regContainer">
						<i class="fas fa-envelope regIcon"></i>
						<input type="text" class="regBox" id="searchBar" placeholder="E-mail..." name="userEmail" size = "70" onblur="checkEmail();"/>
					</div>
					<a id="emailError" style="color:red;"><?php echo $emailError; ?></a><br/>
					<label class="userPasswordLabel"> Password:</label><br/>
					<div class="regContainer">
						<i class="fas fa-key regIcon"></i>
						<input type="password" class="regBox" id="searchBar" minlength="15" placeholder="Password..." name="userPassword" size = "70"/>
					</div>
					<a style="color:red;"><?php echo $passError; ?></a><br/>
					<label class="userRePasswordLabel"> Retype Password:</label><br/>
					<div class="regContainer">
						<i class="fas fa-key regIcon"></i>
						<input type="password" class="regBox" id="searchBar" minlength="15" placeholder="Retype Password..." name="userRePassword" size = "70"/>
					</div>
					<a style="color:red;"><?php echo $passReError; ?></a><br/>
					<label class="seqQuesLabel"> Security Question:</label><br/>
					<select class="seqQuesInput" name="seqQues">
						<option name="favFood">What is your favorite food?</option>
						<option name="maidName">What is your mother's maiden name?</option>
						<option name="favColor">What is your favorite color?</option>
						<option name="sculName">What is your secondary school's name?</option>
						<option name="favPet">What is your favorite animal?</option>
					</select>
					<input type="text" class="userSeqQuesInput" name="userSeqAns" placeholder="Answer..."></br>	
					<a style="color:red;"><?php echo $ansError; ?></a><br/><br/>
					<input type="checkbox" name="userTerms"> I agree to the <span style="cursor:pointer" onclick="openNav()">Terms and Condition</span>. <a style="color:red;"><?php echo $termsError; ?></a><br/><br/>
					<button type="submit" class="register-btn" name="register-submit">Register</button>
				</form>
			</fieldset>
		</section>
		</center>
	</main>
<?php
	require "footer.php";
?>