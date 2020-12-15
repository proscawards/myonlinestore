<?php

	require "header.php";
	require "includes/dbh.inc.php";
	$error = "";
	
	if (isset($_POST['cont-submit'])){
		$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
		if (empty($userEmail)) {
			$error = "Email is required!";
		}
		
		$query = "SELECT * FROM user WHERE USER_EMAIL = '$userEmail'";
		$results = mysqli_query($conn, $query);	
		if(mysqli_num_rows($results) > 0){
			while($row = mysqli_fetch_assoc($results)){	
				$_SESSION['userID']= $row['USER_ID'];
				$_SESSION['userSeqQues'] = $row['USER_SEQQUES'];
				$_SESSION['userSeqAns'] = $row['USER_SEQANS'];
				$_SESSION['userPass'] = $row['USER_PASS'];
			}
			header("Location: forgotPass1.php");
		}
		else{
			$error = "E-mail not found!";
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
						<label class="userEmailLabel"> E-mail:</label><br/>
						<div class="loginContainer">
							<i class="fas fa-envelope loginIcon"></i>
							<input type="text" class="loginBox" id="searchBar" minlength="10" placeholder="E-mail..." name="userEmail" size = "70"/>
						</div>
						<a style="color:red;"><?php echo $error; ?></a><br/>	
						<input type="submit" class="cont-btn" name="cont-submit" value="Continue"><br/>
					</form>
				</section>
			</fieldset>
		</section>
		</center>
	</main>
	
<?php
	require "footer.php";
?>