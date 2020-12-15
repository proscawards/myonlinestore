<?php
    require "includes/dbh.inc.php";
	session_start();
	$errors = "";
	
	$orderLoadID = "SELECT * FROM orders";
	$getID = mysqli_query($conn,  $orderLoadID);		
	while($row = mysqli_fetch_assoc($getID)){
		$orderID = intval($row['ORDER_ID']);	
	}
	$newID = strval($orderID + 1);
	$_SESSION['orderID'] = $newID;
	
	if (isset($_POST['cancel-btn'])){
		echo"<script> location.replace('Checkout.php'); </script>";
	}
	
	if (isset($_POST['proceed-btn'])){
		$userFName = mysqli_real_escape_string($conn, $_POST['userFName']);
		$userLName = mysqli_real_escape_string($conn, $_POST['userLName']);
		$userCard = mysqli_real_escape_string($conn, $_POST['cardNo']);	
		$userCVV = mysqli_real_escape_string($conn, $_POST['cvv']);			
		$userExp = mysqli_real_escape_string($conn, $_POST['expiry']);	
		$orderID = $_SESSION['orderID'];

		if ($userFName != preg_match("/^[a-zA-Z-' ]*$/",$userFName) && !empty($userFName)){ $errors= "Only letters and white space are allowed!";}
		if ($userLName != preg_match("/^[a-zA-Z-' ]*$/",$userLName) && !empty($userLName)){ $errors = "Only letters and white space are allowed!";}	
		
		if (empty($userFName)){
			$userFName = $_SESSION['userFname'];
		}		
		if (empty($userLName)){
			$userLName = $_SESSION['userLname'];
		}
		
		if (empty($userCard)){
			$errors = "Credit/Debit Card Number is required!";
		}
		if (empty($userCVV)){
			$errors = "CVV Number is required!";
		}
		if (empty($userExp)){
			$errors = "Expiry Date is required!";
		}
		if (empty($userCard) && empty($userCVV) && empty($userExp)){
			$errors = "Please fill in the required details! Credit/Debit Card, CVV Number, Expiry Date";
			echo "<style>
				.payContainer .cardNo, .cvvContainer .cvv, .cvvContainer .expiry, .payIcon1, ::placeholder{
					background: red;
					opacity: 0.5;
					color: white;
					transition: 0.3;
				}
			</style>";
		}	
		else{
			if (empty($_SESSION['buyName'])){
				for ($i = 0; $i < $_SESSION['cartNo']; $i++){
					$orderDate = date('Y-m-d');
					$unitPrice = $_SESSION['itemCost'][$i];
					$quantity = $_SESSION['itemQuantity'][$i];
					$totalPrice = $_SESSION['Total_price'];
					$userID = $_SESSION['userID'];
					$itemID = $_SESSION['itemID'][$i];
					$query = "Insert into orders (ORDER_ID, ORDER_DATE, UNIT_PRICE, QUANTITY, TOTAL_PRICE, USER_ID, ITEM_ID, PAYMENT_ID) VALUES ('$orderID', '$orderDate' ,'$unitPrice','$quantity','$totalPrice','$userID','$itemID',1)";
					mysqli_query($conn, $query);
					$orderaddID = intval($orderID + 1);
					$orderID = strval($orderaddID);
					
					$update = "SELECT ITEM_COUNT FROM item WHERE ITEM_ID = '$itemID'";
					$getQuantity = mysqli_query($conn, $update);	
					while($row = mysqli_fetch_assoc($getQuantity)){
						$dbQuantity = intval($row['ITEM_COUNT']);					
					}
					$dbQuantity = strval($dbQuantity - intval($quantity));
					$updateCount = "UPDATE item SET ITEM_COUNT = '$dbQuantity' where ITEM_ID = '$itemID'";
					mysqli_query($conn, $updateCount);
					
					$totalOrderNo = "SELECT ORDERS_MADE FROM user WHERE USER_ID = '$userID'";
					$getOrder = mysqli_query($conn, $totalOrderNo);	
					while($row = mysqli_fetch_assoc($getOrder)){
						$orderMade = intval($row['ORDERS_MADE']);					
					}
					$orderMade = strval($orderMade + 1);
					$updateOrderMade = "UPDATE user SET ORDERS_MADE = '$orderMade' where USER_ID = '$userID'";
					mysqli_query($conn, $updateOrderMade);
				}
				echo"<script> location.replace('ProcessPayment.php'); </script>";
				$_SESSION['itemName'] = array();
				$_SESSION['itemCost'] = array();
				$_SESSION['itemColour'] = array();
				$_SESSION['itemSize'] = array();
				$_SESSION['itemQuantity'] = array();
				$_SESSION["cartNo"] = 0;
				$_SESSION['Total_price'] = 0.00;
				$_SESSION['userOrder'] = $orderMade;
			}
			else{
				$orderDate = date('Y-m-d');
				$unitPrice = $_SESSION['buyCost'];
				$quantity = $_SESSION['buyQuantity'];
				$totalPrice = $_SESSION['Total_price'];
				$userID = $_SESSION['userID'];
				$itemID = $_SESSION['itemID'][0];
				$query = "Insert into orders (ORDER_ID, ORDER_DATE, UNIT_PRICE, QUANTITY, TOTAL_PRICE, USER_ID, ITEM_ID, PAYMENT_ID) VALUES ('$orderID', '$orderDate' ,'$unitPrice','$quantity','$totalPrice','$userID','$itemID',1)";
				mysqli_query($conn, $query);
				$orderaddID = intval($orderID + 1);
				$orderID = strval($orderaddID);
				
				$update = "SELECT ITEM_COUNT FROM item WHERE ITEM_ID = '$itemID'";
				$getQuantity = mysqli_query($conn, $update);	
				while($row = mysqli_fetch_assoc($getQuantity)){
					$dbQuantity = intval($row['ITEM_COUNT']);					
				}
				$dbQuantity = strval($dbQuantity - intval($quantity));
				$updateCount = "UPDATE item SET ITEM_COUNT = '$dbQuantity' where ITEM_ID = '$itemID'";
				mysqli_query($conn, $updateCount);
				
				$totalOrderNo = "SELECT ORDERS_MADE FROM user WHERE USER_ID = '$userID'";
				$getOrder = mysqli_query($conn, $totalOrderNo);	
				while($row = mysqli_fetch_assoc($getOrder)){
					$orderMade = intval($row['ORDERS_MADE']);					
				}
				$orderMade = strval($orderMade + 1);
				$updateOrderMade = "UPDATE user SET ORDERS_MADE = '$orderMade' where USER_ID = '$userID'";
				mysqli_query($conn, $updateOrderMade);
				
				echo"<script> location.replace('ProcessPayment.php'); </script>";
				$_SESSION['buyName'] = "";
				$_SESSION['buyCost'] = 0.00;
				$_SESSION['buyColour'] = "";
				$_SESSION['buySize'] = "";
				$_SESSION['buyQuantity'] = 0;
				$_SESSION['Total_price'] = 0.00;
				$_SESSION['userOrder'] = $orderMade;
			}
		}	
	}
?>

<html>
<head>
	<title>PayPal | Pay Online with Credit/Debit Card</title>
	<link rel="icon" href="images/paypal.ico">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/paypal.css" type="text/css"/>
	<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
	<!-- jquery for data-mask-->
	<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
	<script src="scripts/jquery.mask.min.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			$(".cvv").mask("000");
			$(".cardNo").mask("0000 0000 0000 0000");
			$(".expiry").mask("00/00");			
		});
	</script>
	<!-- -->
</head>
<body>
<center>
	<div class="imgHeader">
		<img src="images/paypal_header.png" width="14%" ><br/>
		<a> Pay with Debit or Credit Card by Paypal</a>
	</div>
	<form method="post">
	<div class="paymentDetails">
		<a style="color:#2aa2c3;float:left;">Total</a><a style="color:#515ba6;font-weight:bold;float:right;"><?php echo $_SESSION['Total_price']."MYR"; ?></a>
		<br/>
		<hr class="line">
		<table><tr>
		<td><div class="payContainer"><i class="fas fa-user payIcon"></i><input type="text" value="<?php echo $_SESSION['userFname']; ?>" class="payBox" name="userFName"/></div></td>
		<td><div class="payContainer"><i class="fas fa-user payIcon"></i><input type="text" value="<?php echo $_SESSION['userLname']; ?>" class="payBox" name="userLName"/></div></td>
		</tr>
		<tr>
			<td><div class="payContainer"><i class="far fa-credit-card payIcon1"></i><input type="text" placeholder="Card Number" class="cardNo" name="cardNo" /></div></td>
			<td><div class="cvvContainer"><i class="fas fa-credit-card payIcon1"></i><input type="text" placeholder="CVV" class="cvv" name="cvv" /></div></td>
		</tr>
		<tr>		
		<td><img src="images/creditcard.png" width="50%"></td>
		<td><div class="cvvContainer"><i class="far fa-calendar-alt payIcon1"></i><input type="text" placeholder="MM/YY" class="expiry" name="expiry" /></div></td>
		</tr>
		</table>
	</div>
	
	<div class="paymentInput">
	</div>	
	<div class="buttons">
		<a style="color:red;"><?php echo $errors; ?></a><br/>
		<input type="submit" name="proceed-btn" class="proceedBtn" value="Submit Payment"/><br/><br/>
		<input type="submit" name="cancel-btn" class="cancelBtn" value="Cancel"/>
		<br/><br/>
	</div>
	</form>
	<hr class="line4">
	<div class="footer">
		<div class="firstFooter">
			<a href="https://www.paypal.com/my/smarthelp/home" class="link">Help</a>&nbsp;&nbsp;&nbsp;
			<a href="https://www.paypal.com/smarthelp/contact-us" class="link">Contact Us</a>&nbsp;&nbsp;&nbsp;
			<a href="https://www.paypal.com/webapps/mpp/paypal-safety-and-security" class="link">Security</a>
		</div>
		<hr class="dotLine">
		<div class="secondFooter">
		<a class="copyright"><span dir="ltr">©1999-2020</span> PayPal, Inc & Multimedia University. &nbsp; All rights reserved.</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="https://www.paypal.com/webapps/mpp/ua/privacy-full" class="link">Privacy</a>&nbsp;&nbsp;&nbsp;
		<a href="https://www.paypal.com/webapps/mpp/ua/legalhub-full" class="link">Legal</a>
		</div>
	</div>
</center>
</body>
</html>
