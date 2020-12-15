<?php

	require "header.php";
	require "includes/dbh.inc.php";
	$error = "";
	
	if (isset($_POST['seq-submit'])){
		$userSeqAns = mysqli_real_escape_string($conn, $_POST['userSeqAns']);
		if (empty($userSeqAns)) {
			$error = "Answer cannot be empty!";
		}
		if ($userSeqAns != $_SESSION['userSeqAns']){
			$error = "The security answer entered is incorrect!";			
		}
		else{
			header("Location: forgotPass2.php");
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
						<label> Security Question:</label>
						<a><?php echo $_SESSION['userSeqQues'];
						?>
						</a><br/>
						<input type="text" class="userEmailInput" name="userSeqAns" placeholder="Answer here..."><br/>
						<a style="color:red;"><?php echo $error; ?></a><br/>	
						<input type="submit" class="seq-btn" name="seq-submit" value="Continue"><br/>
					</form>
				</section>
			</fieldset>
		</section>
		</center>
	</main>
	
<?php
	require "footer.php";
?>