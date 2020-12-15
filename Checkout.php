<?php
    require "header.php";
    require "includes/dbh.inc.php";
	$errors = "";
    if((!$_SESSION['success'] === true))
    {
      header("location:login.php");
    }
     $total = 0;
	 $deliveryfee = 20.00;
	 $nodeliveryfee = 0.00;
	 
    function calculate_Total_cost($quantity)
    {
      global  $total;
      $total = $total + $quantity;
      return $total;
    }
	
	if (isset($_POST['bank-btn'])){
		$userName =  mysqli_real_escape_string($conn, $_POST['userName']);
		$userPhone =  mysqli_real_escape_string($conn, $_POST['userPhoneNo']);	
		$userEmail =  mysqli_real_escape_string($conn, $_POST['userEmail']);
		$userAdd1 =  mysqli_real_escape_string($conn, $_POST['useradd1']);
		$userAdd2 =  mysqli_real_escape_string($conn, $_POST['useradd2']);
		$userAddress = mysqli_real_escape_string($conn, $_POST['userAddress']);;
		$userPostcode =  mysqli_real_escape_string($conn, $_POST['userPostcode']);	
		$userCity =  mysqli_real_escape_string($conn, $_POST['userCity']);
		$userState =  mysqli_real_escape_string($conn, $_POST['userState']);
		$userCountry =  mysqli_real_escape_string($conn, $_POST['userCountry']);
		//billing address
		$userBAdd1 =  mysqli_real_escape_string($conn, $_POST['userBillAdd1']);
		$userBAdd2 =  mysqli_real_escape_string($conn, $_POST['userBillAdd2']);
		$userBAddress = "";
		$userBPostcode =  mysqli_real_escape_string($conn, $_POST['userBillPostcode']);	
		$userBCity =  mysqli_real_escape_string($conn, $_POST['userBillCity']);
		$userBState =  mysqli_real_escape_string($conn, $_POST['userBillState']);
		$userBCountry =  mysqli_real_escape_string($conn, $_POST['userBillCountry']);
		$shipAdd = false; $billAdd = false;
		if (isset($_POST['shipAdd'])){$shipAdd = true;}
		if (isset($_POST['billAdd'])){$billAdd = true;}
		$checkAllTrue = false;
		
		//check 4 inputs
		if (!$shipAdd && $billAdd){
			//if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			if (empty($userAddress)){
				$userAddress = $_SESSION['userAddress'];
			}
			
			else{$checkAllTrue = true;}
		}	
		
		//check all but address need to seperate
		if ($shipAdd && !$billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}
			if ($userBState != preg_match("/^[a-zA-Z-' ]*$/",$userBState)){$errors = "Only letters and white space are allowed!";}
			if ($userBCity != preg_match("/^[a-zA-Z-' ]*$/",$userBCity)){$errors = "Only letters and white space are allowed!";}
			if ($userBCountry != preg_match("/^[a-zA-Z-' ]*$/",$userBCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			else if (empty($userAddress1) && empty($userPostcode) && empty($userState) && empty($userCity) && empty($userCountry)){
				$errors = "Please fill in the required details (Shipping Address)! Address Line 1, Postcode, City, State, Country.";
				//echo "<script type='text/javascript'> checkShipAdd(); checkBillAdd(); </script>";
			}
			else if (empty($userAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userState)){
				$errors = "State is required!";
			}	
			else if (empty($userCity)){
				$errors = "City is required!";
			}	
			else if (empty($userCountry)){
				$errors = "Country is required!";
			}
			else if (empty($userBAddress1) && empty($userBPostcode) && empty($userBState) && empty($userBCity) && empty($userBCountry)){
				$errors = "Please fill in the required details (Billing Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userBAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userBState)){
				$errors = "State is required!";
			}	
			else if (empty($userBCity)){
				$errors = "City is required!";
			}	
			else if (empty($userBCountry)){
				$errors = "Country is required!";
			}				
			else{
				if (empty($userAddress2)){
					$userAddress = $userAddress1." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";
				}
				else{
					$userAddress = $userAddress1." ".$userAddress2." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";				
				}
				if (empty($userBAddress2)){
					$userBAddress = $userBAddress1." ".$userBPostcode.", ".$userBCity.", ".$userBState.", ".$userBCountry.".";
				}
				else{
					$userBAddress = $userBAddress1." ".$userBAddress2." ".$userBPostcode.", ".$userBCity.", ".$userState.", ".$userBCountry.".";				
				}
				$newShipAdd = "UPDATE user SET USER_ADDRESS = '$userAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newShipAdd);
				$_SESSION['userAddress'] = $userAddress;
				$checkAllTrue = true;
			}	
		}
		
		//check all input, shipAdd only
		if ($shipAdd && $billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			else if (empty($userAddress1) && empty($userPostcode) && empty($userState) && empty($userCity) && empty($userCountry)){
				$errors = "Please fill in the required details (Shipping Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userState)){
				$errors = "State is required!";
			}	
			else if (empty($userCity)){
				$errors = "City is required!";
			}	
			else if (empty($userCountry)){
				$errors = "Country is required!";
			}		
			else{
				if (empty($userAddress2)){
					$userAddress = $userAddress1." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";
				}
				else{
					$userAddress = $userAddress1." ".$userAddress2." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";				
				}
				$newShipAdd = "UPDATE user SET USER_ADDRESS = '$userAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newShipAdd);
				$_SESSION['userAddress'] = $userAddress;
				$checkAllTrue = true;
			}	
		}
		
		//check all inputs but address need to be seperated
		if (!$shipAdd && !$billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}
			if ($userBState != preg_match("/^[a-zA-Z-' ]*$/",$userBState)){$errors = "Only letters and white space are allowed!";}
			if ($userBCity != preg_match("/^[a-zA-Z-' ]*$/",$userBCity)){$errors = "Only letters and white space are allowed!";}
			if ($userBCountry != preg_match("/^[a-zA-Z-' ]*$/",$userBCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			else if (empty($userAddress)){
				$errors = "Address is required!";
			}
			else if (empty($userBAddress1) && empty($userBPostcode) && empty($userBState) && empty($userBCity) && empty($userBCountry)){
				$errors = "Please fill in the required details (Billing Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userBAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userBPostcode)){
				$errors = "Postcode is required!";
			}			
			else if (empty($userBState)){
				$errors = "State is required!";
			}	
			else if (empty($userBCity)){
				$errors = "City is required!";
			}	
			else if (empty($userBCountry)){
				$errors = "Country is required!";
			}		
			else{
				if (empty($userBAddress2)){
					$userBAddress = $userBAddress1." ".$userBPostcode.", ".$userBCity.", ".$userBState.", ".$userBCountry.".";
				}
				else{
					$userBAddress = $userBAddress1." ".$userBAddress2." ".$userBPostcode.", ".$userBCity.", ".$userState.", ".$userBCountry.".";				
				}
				$newBillAdd = "UPDATE user SET USER_ADDRESS = '$userBAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newBillAdd);
				$_SESSION['userAddress'] = $userBAddress;
				$checkAllTrue = true;
			}	
		}
		if ($checkAllTrue){
			echo"<script> location.replace('redirect_bank.php'); </script>";
		}
	}
	
	if (isset($_POST['card-btn'])){
		$userName =  mysqli_real_escape_string($conn, $_POST['userName']);
		$userPhone =  mysqli_real_escape_string($conn, $_POST['userPhoneNo']);	
		$userEmail =  mysqli_real_escape_string($conn, $_POST['userEmail']);
		$userAdd1 =  mysqli_real_escape_string($conn, $_POST['useradd1']);
		$userAdd2 =  mysqli_real_escape_string($conn, $_POST['useradd2']);
		$userAddress = mysqli_real_escape_string($conn, $_POST['userAddress']);;
		$userPostcode =  mysqli_real_escape_string($conn, $_POST['userPostcode']);	
		$userCity =  mysqli_real_escape_string($conn, $_POST['userCity']);
		$userState =  mysqli_real_escape_string($conn, $_POST['userState']);
		$userCountry =  mysqli_real_escape_string($conn, $_POST['userCountry']);
		//billing address
		$userBAdd1 =  mysqli_real_escape_string($conn, $_POST['userBillAdd1']);
		$userBAdd2 =  mysqli_real_escape_string($conn, $_POST['userBillAdd2']);
		$userBAddress = "";
		$userBPostcode =  mysqli_real_escape_string($conn, $_POST['userBillPostcode']);	
		$userBCity =  mysqli_real_escape_string($conn, $_POST['userBillCity']);
		$userBState =  mysqli_real_escape_string($conn, $_POST['userBillState']);
		$userBCountry =  mysqli_real_escape_string($conn, $_POST['userBillCountry']);
		$shipAdd = false; $billAdd = false;
		if (isset($_POST['shipAdd'])){$shipAdd = true;}
		if (isset($_POST['billAdd'])){$billAdd = true;}
		$checkAllTrue = false;
		
		//check 4 inputs
		if (!$shipAdd && $billAdd){
			//if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			if (empty($userAddress)){
				$userAddress = $_SESSION['userAddress'];
			}
			
			else{$checkAllTrue = true;}
		}	
		
		//check all but address need to seperate
		if ($shipAdd && !$billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}
			if ($userBState != preg_match("/^[a-zA-Z-' ]*$/",$userBState)){$errors = "Only letters and white space are allowed!";}
			if ($userBCity != preg_match("/^[a-zA-Z-' ]*$/",$userBCity)){$errors = "Only letters and white space are allowed!";}
			if ($userBCountry != preg_match("/^[a-zA-Z-' ]*$/",$userBCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			else if (empty($userAddress1) && empty($userPostcode) && empty($userState) && empty($userCity) && empty($userCountry)){
				$errors = "Please fill in the required details (Shipping Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userState)){
				$errors = "State is required!";
			}	
			else if (empty($userCity)){
				$errors = "City is required!";
			}	
			else if (empty($userCountry)){
				$errors = "Country is required!";
			}
			else if (empty($userBAddress1) && empty($userBPostcode) && empty($userBState) && empty($userBCity) && empty($userBCountry)){
				$errors = "Please fill in the required details (Billing Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userBAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userBPostcode)){
				$errors = "Postcode is required!";
			}
			else if (empty($userBState)){
				$errors = "State is required!";
			}	
			else if (empty($userBCity)){
				$errors = "City is required!";
			}	
			else if (empty($userBCountry)){
				$errors = "Country is required!";
			}				
			else{
				if (empty($userAddress2)){
					$userAddress = $userAddress1." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";
				}
				else{
					$userAddress = $userAddress1." ".$userAddress2." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";				
				}
				if (empty($userBAddress2)){
					$userBAddress = $userBAddress1." ".$userBPostcode.", ".$userBCity.", ".$userBState.", ".$userBCountry.".";
				}
				else{
					$userBAddress = $userBAddress1." ".$userBAddress2." ".$userBPostcode.", ".$userBCity.", ".$userState.", ".$userBCountry.".";				
				}
				$newShipAdd = "UPDATE user SET USER_ADDRESS = '$userAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newShipAdd);
				$_SESSION['userAddress'] = $userAddress;
				$checkAllTrue = true;
			}	
		}
		
		//check all input, shipAdd only
		if ($shipAdd && $billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}
			else if (empty($userAddress1) && empty($userPostcode) && empty($userState) && empty($userCity) && empty($userCountry)){
				$errors = "Please fill in the required details (Shipping Address)! Address Line 1, Postcode, City, State, Country.";
			}
			else if (empty($userAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userPostcode)){
				$errors = "Postcode is required!";
			}
			else if (empty($userState)){
				$errors = "State is required!";
			}	
			else if (empty($userCity)){
				$errors = "City is required!";
			}	
			else if (empty($userCountry)){
				$errors = "Country is required!";
			}		
			else{
				if (empty($userAddress2)){
					$userAddress = $userAddress1." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";
				}
				else{
					$userAddress = $userAddress1." ".$userAddress2." ".$userPostcode.", ".$userCity.", ".$userState.", ".$userCountry.".";				
				}
				$newShipAdd = "UPDATE user SET USER_ADDRESS = '$userAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newShipAdd);
				$_SESSION['userAddress'] = $userAddress;
				$checkAllTrue = true;
			}	
		}
		
		//check all inputs but address need to be seperated
		if (!$shipAdd && !$billAdd){
			if ($userName != preg_match("/^[a-zA-Z-' ]*$/",$userName)){$errors = "Only letters and white space are allowed!";}
			if ($userState != preg_match("/^[a-zA-Z-' ]*$/",$userState)){$errors = "Only letters and white space are allowed!";}
			if ($userCity != preg_match("/^[a-zA-Z-' ]*$/",$userCity)){$errors = "Only letters and white space are allowed!";}
			if ($userCountry != preg_match("/^[a-zA-Z-' ]*$/",$userCountry)){$errors = "Only letters and white space are allowed!";}
			if ($userBState != preg_match("/^[a-zA-Z-' ]*$/",$userBState)){$errors = "Only letters and white space are allowed!";}
			if ($userBCity != preg_match("/^[a-zA-Z-' ]*$/",$userBCity)){$errors = "Only letters and white space are allowed!";}
			if ($userBCountry != preg_match("/^[a-zA-Z-' ]*$/",$userBCountry)){$errors = "Only letters and white space are allowed!";}			
		
			if (empty($userName)){
				$userName = $_SESSION['userName'];
			}				
			else if (empty($userEmail)){
				$userEmail = $_SESSION['userEmail'];
			}
			else if (empty($userPhone)){
				$errors = "Phone number is required!";
			}	
			else if (empty($userAddress)){
				$errors = "Address is required!";
			}
			else if (empty($userBAddress1) && empty($userBPostcode) && empty($userBCity) && empty($userBState) && empty($userBCountry)){
				$errors = "Please fill in the required details (Billing Address)! Address Line 1, Postcode, City, State, Country.";
			}		
			else if (empty($userBAddress1)){
				$errors = "Address is required!";
			}
			else if (empty($userBPostcode)){
				$errors = "Postcode is required!";
			}			
			else if (empty($userBState)){
				$errors = "State is required!";
			}	
			else if (empty($userBCity)){
				$errors = "City is required!";
			}	
			else if (empty($userBCountry)){
				$errors = "Country is required!";
			}
			else{
				if (empty($userBAddress2)){
					$userBAddress = $userBAddress1." ".$userBPostcode.", ".$userBCity.", ".$userBState.", ".$userBCountry.".";
				}
				else{
					$userBAddress = $userBAddress1." ".$userBAddress2." ".$userBPostcode.", ".$userBCity.", ".$userState.", ".$userBCountry.".";				
				}
				$newBillAdd = "UPDATE user SET USER_ADDRESS = '$userBAddress' where USER_ID = '$userID'";
				mysqli_query($conn, $newBillAdd);
				$_SESSION['userAddress'] = $userBAddress;
				$checkAllTrue = true;
			}	
		}
		if ($checkAllTrue){
			echo"<script> location.replace('redirect_card.php'); </script>";
		}
		
	}
 
  ?>
  
<html>
	<head>
		<link rel="stylesheet" href="styles/cartstyle.css" type="text/css"/>
		<link rel="stylesheet" href="styles/Checkout_style.css" type="text/css">
		<!-- jquery for data-mask-->
		<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
		<script src="scripts/jquery.mask.min.js"></script>
		<script type="text/javascript">
			jQuery(function($){
				$(".userPhoneNo").mask("+6000 00000000");
				$(".userPostcode").mask("00000");				
			});
			
			function checkShipAdd(){
				var checkBox = document.getElementById("diffAdd");
				var normAddDiv = document.getElementById("normAddress");
				var diffAddDiv = document.getElementById("diffAddress");
				if (checkBox.checked === true){
					normAddDiv.style.display = "none";
					diffAddDiv.style.display = "block";
				}
				else{
					normAddDiv.style.display = "block";
					diffAddDiv.style.display = "none";
				}
			}
			
			function checkBillAdd(){
				var checkBox = document.getElementById("sameAdd");
				var normAdd = document.getElementById("diffAdd");
				var shipSAddDiv = document.getElementById("billSAddress");
				var shipDAddDiv = document.getElementById("billDAddress");	
				var addressFill = document.getElementById("adrBill");
				var addressNorm = document.getElementById("adrNorm");				
				var add1 = document.getElementById("adrDiff1").value;
				var add2 = document.getElementById("adrDiff2").value;
				var zip = document.getElementById("zipDiff").value;
				var city = document.getElementById("cityDiff").value;	
				var state = document.getElementById("stateDiff").value;	
				var country = document.getElementById("countryDiff").value;						
				if (checkBox.checked === true){
					shipDAddDiv.style.display = "none";
					shipSAddDiv.style.display = "block";
					if (normAdd.checked === true && (add1 != null && add2 != null && zip != null && city != null && state != null && country != null)){
						if (add2 == null){
							addressFill.value = add1 + zip + ", " + city + ", " + state + ", " + country + ".";	
						}
						else if (add2 != null){
							addressFill.value = add1 + add2 + ", " + zip + ", " + city + ", " + state + ", " + country + ".";								
						}
						else{
							addressFill.value = addressNorm.value;
						}
					}
					else if (normAdd.checked === false){
						addressFill.value = addressNorm.value;						
					}
				}
				else{
					shipDAddDiv.style.display = "block";
					shipSAddDiv.style.display = "none";
				}				
			}
		</script>
		<!-- -->
	</head>
	<body>
	<div class="header-container">
		<h1 class="header"> Checkout </h1>
	</div>
	<center>
     <div class="table-container">
       <table class="summary">
         <td class="tabHeader" col span="1">Name of item</td>
         <td class="tabHeader" col span="1">Price</td>
         <td class="tabHeader" col span="1">colour</td>
         <td class="tabHeader" col span="1">Size</td>
         <td class="tabHeader" col span="1">quantity </td>
         <td class="tabHeader" col span="1">total Price Per Unit</td>
         	 
         <?php
         $item_cost =0;
		 $itemonly =0;
		 if ($_SESSION['cartNo'] == 0 && !empty($_SESSION['buyName'])){
			echo "<tr class='item_style'>";
			echo   "<td class='tabData'>".$_SESSION['buyName']."</td>";
			echo   "<td class='tabData' colspan='1'>RM".$_SESSION['buyCost']."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['buyColour']."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['buySize']."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['buyQuantity']."</td>";
			if ($_SESSION['buyQuantity'] > 1){
			 $itemPrice = $_SESSION['buyCost'] * $_SESSION['buyQuantity'];
			}
			else {
			$itemPrice = $_SESSION['buyCost'];
			}
		 
			echo "<td class='tabData' colspan='1'>RM".$itemPrice."</td>";
		 
			echo "</tr>";
			$item_cost = calculate_Total_cost($itemPrice) ;
			$itemonly = $item_cost;
		 }
		else{
          for($i=0;$i < $_SESSION["cartNo"];$i++){ 
			echo "<tr class='item_style'>";
			echo   "<td class='tabData'>".$_SESSION['itemName'][$i]."</td>";
			echo   "<td class='tabData' colspan='1'>RM".$_SESSION['itemCost'][$i]."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['itemColour'][$i]."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['itemSize'][$i]."</td>";
			echo   "<td class='tabData' colspan='1'>".$_SESSION['itemQuantity'][$i]."</td>";
			if ($_SESSION['itemQuantity'][$i] > 1){
				$itemPrice = $_SESSION['itemCost'][$i] * $_SESSION['itemQuantity'][$i];
			}
			else {
			   $itemPrice = $_SESSION['itemCost'][$i];
			}
			 
			echo "<td class='tabData' colspan='1'>RM".$itemPrice."</td>";
			 
			echo "</tr>";
			$item_cost = calculate_Total_cost($itemPrice) ;
			$itemonly = $item_cost;						
			}
		}
			if ( $itemonly < 500.00 ) {
				$item_cost = $itemonly + $deliveryfee ;	
			}
		    else {
				$item_cost = $itemonly;
			}
			$_SESSION['Total_price'] = $item_cost;
          ?>
		  <tr class="deliveyF">
            <td class='tabData'> Delivery Fee : </td>
            <td class='tabData' class="delieveyF" colspan="6" > 
			<?php 
			if ($itemonly < 500.00 && $_SESSION['userOrder'] != 0){
			   echo "RM".$deliveryfee; 
			}
			else if ( $itemonly >= 500.00){
				echo "RM".$nodeliveryfee;
			}
			else{
				echo "RM".$nodeliveryfee;				
			}
			?> 
			<i class="fa fa-question-circle tooltip"><span class="tooltiptext">
			<?php
			$priceLeft = 500.00 - $itemonly;
			if ($priceLeft > 0 && $_SESSION['userOrder'] != 0){echo "Add RM".$priceLeft." more to get eligible for free delivery.";}
			else if ($priceLeft < 0){echo "You are eligible for free delivery!";}	
			else{echo "You are eligible for free delivery on your first order!";}			
			?>			
			</span></i></td>
          </tr>
          <tr class="totalC">
            <td class='tabData'> Total cost  : </td>
            <td class='tabData' class="price" colspan="6" > <?php echo "RM".$item_cost; ?> </td>
          </tr>	  
       </table>
    </center>
    <form class="checkout" method="post">
    <h3>Billing Address & Contact</h3>
	<center>
	<table style="width:63%;">
	<tr><td style="width:50%;">
	<label>
          <input type="checkbox" name="shipAdd" id="diffAdd" onclick="checkShipAdd()" value="shipAdd"> Use Different Shipping Address
    </label><br/>
	</td>
	<td style="width:50%;">
		<label><input type="checkbox" name="billAdd" id="sameAdd" onclick="checkBillAdd()" value="billAdd" checked> Billing address same as shipping Address</label>
	</td></tr>
	<tr><td style="width:50%;">
		<div id="normAddress">
		<label class="userFNameLabel"> Full Name:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-user regIcon"></i>
			<input type="text" class="checkoutBox" id="userName"  name="userName" value="<?PHP echo $_SESSION['userName']; ?>" minlength="2" placeholder="First Name..."  size = "70" />
			
		</div>
		<label class="userPhoneLabel"> Phone:</label><br/>
		<div class="regContainer">
			<i class="fa fa-phone regIcon"></i>
			<input type="text" class="userPhoneNo" id="name" minlength="2" placeholder="+6012 34567890" name="userPhoneNo" value="<?PHP echo $_SESSION['userPhone']; ?>" size = "70" />
		</div>
		<label class="userEmailLabel"> E-mail:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-envelope regIcon"></i>
			<input type="email" class="checkoutBox" id="mail" value="<?PHP echo $_SESSION['userEmail']; ?>" placeholder="E-mail..." name="userEmail" size = "70" />
		</div>	
		<label class="userAdd1Label"> Address line:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" value="<?PHP echo $_SESSION['userAddress']; ?>" class="checkoutBox" id="adrNorm" placeholder="No 1, Jalan..." name="userAddress"  size = "70" />
		</div>	
	</div>
	<div id="diffAddress" style="display: none;">
		<label class="userFNameLabel"> Full Name:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-user regIcon"></i>
			<input type="text" class="checkoutBox" id="userName"  name="userName" value="<?PHP echo $_SESSION['userName']; ?>" minlength="2" placeholder="First Name..."  size = "70" />
		</div>
		<label class="userPhoneLabel"> Phone:</label><br/>
		<div class="regContainer">
			<i class="fa fa-phone regIcon"></i>
			<input type="text" class="userPhoneNo" id="name" minlength="2" placeholder="+6012 34567890" value="<?PHP echo $_SESSION['userPhone']; ?>" name="userPhoneNo" size = "70" />
		</div>
		<label class="userEmailLabel"> E-mail:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-envelope regIcon"></i>
			<input type="email" class="checkoutBox" id="mail" value="<?PHP echo $_SESSION['userEmail']; ?>" placeholder="E-mail..." name="userEmail" size = "70" onblur="checkEmail();" />
		</div>	
		<label class="userAdd1Label"> Address line 1:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" class="checkoutBox" id="adrDiff1" placeholder="No 1, Jalan..." name="useradd1"  size = "70" />
		</div>
		<label class="userAdd2Label"> Address line 2:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" class="checkoutBox" id="adrDiff2" placeholder="Taman..." name="useradd2"  size = "70" />
		</div>		
		<label for="zip">Post Code:</label><br/>
		<div class="regContainer">
			<i class="fa fa-map-marker regIcon"></i>
			<input type="text" class="userPostcode" id="zipDiff" name="userPostcode" placeholder="10000" />
		</div>	
		<label class="userCityLabel"> City:</label><br/>
		<div class="regContainer">
			<i class="fa fa-university regIcon"></i>
			<input type="text" class="checkoutBox" id="cityDiff" placeholder="Alor Setar" name="userCity" size = "20" />
		</div>     
		<label class="userstateLabel"> State:</label><br/>
		<div class="regContainer">
			<i class="fa fa-suitcase regIcon"></i>
			<input type="text" class="checkoutBox" id="stateDiff" name="userState" placeholder="Perlis" />
		</div>		
		<label for="country">Country:</label><br/>
		<div class="regContainer">
			<i class="fa fa-globe regIcon"></i>
			<input type="text" class="checkoutBox" id="countryDiff" name="userCountry" placeholder="Malaysia" />
		</div>
	</div>
	</td>
	<td style="width:50%;">
		<div id="billSAddress">
		<label class="userFNameLabel"> Full Name:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-user regIcon"></i>
			<input type="text" class="checkoutBox" id="userName"  name="userName" value="<?PHP echo $_SESSION['userName']; ?>" minlength="2" placeholder="First Name..."  size = "70" disabled/>
		</div>
		<label class="userPhoneLabel"> Phone:</label><br/>
		<div class="regContainer">
			<i class="fa fa-phone regIcon"></i>
			<input type="text" class="userPhoneNo" id="name" minlength="2" placeholder="+6012 34567890" name="userPhoneNo" value="<?PHP echo $_SESSION['userPhone']; ?>" size = "70" disabled/>
		</div>
		<label class="userEmailLabel"> E-mail:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-envelope regIcon"></i>
			<input type="email" class="checkoutBox" id="mail" value="<?PHP echo $_SESSION['userEmail']; ?>" placeholder="E-mail..." name="userEmail" size = "70" disabled/>
		</div>	
		<label class="userAdd1Label"> Address line:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" value="<?PHP echo $_SESSION['userAddress']; ?>" class="checkoutBox" id="adrBill" placeholder="No 1, Jalan..." name="userBillAddress"  size = "70" disabled/>
		</div>	
	</div>
	<div id="billDAddress" style="display: none;" >
		<label class="userFNameLabel"> Full Name:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-user regIcon"></i>
			<input type="text" class="checkoutBox" id="userName"  name="userName" value="<?PHP echo $_SESSION['userName']; ?>" minlength="2" placeholder="First Name..."  size = "70" />
		</div>
		<label class="userPhoneLabel"> Phone:</label><br/>
		<div class="regContainer">
			<i class="fa fa-phone regIcon"></i>
			<input type="text" class="userPhoneNo" id="name" minlength="2" placeholder="+6012 34567890" name="userPhoneNo" value="<?PHP echo $_SESSION['userPhone']; ?>" size = "70" />
		</div>
		<label class="userEmailLabel"> E-mail:</label><br/>  
		<div class="regContainer">
			<i class="fas fa-envelope regIcon"></i>
			<input type="email" class="checkoutBox" id="mail" value="<?PHP echo $_SESSION['userEmail']; ?>" placeholder="E-mail..." name="userEmail" size = "70" />
		</div>	
		<label class="userAdd1Label"> Address line 1:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" class="checkoutBox" id="adr" placeholder="No 1, Jalan..." name="userBillAdd1"  size = "70" />
		</div>
		<label class="userAdd2Label"> Address line 2:</label><br/>
		<div class="regContainer">
			<i class="fa fa-home regIcon"></i>
			<input type="text" class="checkoutBox" id="adr" placeholder="Taman..." name="userBillAdd2"  size = "70" />
		</div>		
		<label for="zip">Post Code:</label><br/>
		<div class="regContainer">
			<i class="fa fa-map-marker regIcon"></i>
			<input type="text" class="userPostcode" id="zip" name="userBillPostcode" placeholder="10000" />
		</div>	
		<label class="userCityLabel"> City:</label><br/>
		<div class="regContainer">
			<i class="fa fa-university regIcon"></i>
			<input type="text" class="checkoutBox" id="city" placeholder="Alor Setar" name="userBillCity" size = "20" />
		</div>     
		<label class="userstateLabel"> State:</label><br/>
		<div class="regContainer">
			<i class="fa fa-suitcase regIcon"></i>
			<input type="text" class="checkoutBox" id="state" name="userBillState" placeholder="Perlis" />
		</div>		
		<label for="country">Country:</label><br/>
		<div class="regContainer">
			<i class="fa fa-globe regIcon"></i>
			<input type="text" class="checkoutBox" id="country" name="userBillCountry" placeholder="Malaysia" />
		</div>
	</div>
	</td>
	</tr></table>
	 <div class="myform">
	 <img src='images/fpxsmall.png' style='width:11%'/>
	 <img src='images/visa3.png' style='width:14%'/>
	 </div>
	 <?php echo "<a style='color:red;'>".$errors."</a>"; ?>
	  <div class="button-container">
	  <input type="submit" name="bank-btn" value="Pay By NetBanking">
	  </div>
	  <div class="button-container">
	  <input type="submit" name="card-btn" value="Pay By Credit/Debit Card" >
	  </div>
	</form>
	</center>	
	</body>
</html>

<?php
	require "footer.php";
?>
