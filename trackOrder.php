<?php
	require "header.php";
	require "includes/dbh.inc.php";
	$errors = "";
	$orderExist = true;
	$orderLatest = 90000;
	
	
	if (isset($_POST['track-submit'])){
		$orderNo = mysqli_real_escape_string($conn, $_POST['orderNo']);
		$checkOrder = "SELECT * FROM orders WHERE ORDER_ID = '$orderNo'";
		$verifyOrder= mysqli_query($conn, $checkOrder);	
		while($orderRow = mysqli_fetch_assoc($verifyOrder)){
			$orderLatest = intval($orderRow['ORDER_ID']);
		}
		

		if (empty($orderNo)){
			$errors = "Order number is required!";
			$orderExist = false;
		}
		
		if ($orderNo < 90000){
			$errors = "Order number is invalid!";
			$orderExist = false;
		}
		
		if ($orderNo > $orderLatest){
			$errors = "Order number does not exist!";
			$orderExist = false;
		}		
		
		
		if (!empty($orderNo) && $orderNo >= 90000 && $orderExist){
			$query = "SELECT * FROM orders WHERE ORDER_ID = '$orderNo'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_assoc($result)){
				$getDate = $row['ORDER_DATE'];
				$getID = $row['ORDER_ID'];
				$unitPrice = $row['UNIT_PRICE'];
				$quantity = $row['QUANTITY'];
				$totalPrice = $row['TOTAL_PRICE'];	
				$itemID = $row['ITEM_ID'];
				$userID = $row['USER_ID'];
				
				$iquery = "SELECT ITEM_NAME FROM item WHERE ITEM_ID = '$itemID'";
				$iresults = mysqli_query($conn, $iquery);	
				while($irow = mysqli_fetch_assoc($iresults)){
					$itemName = $irow['ITEM_NAME'];
				}
				
				$uquery = "SELECT * FROM user WHERE USER_ID = '$userID'";
				$uresults = mysqli_query($conn, $uquery);	
				while($urow = mysqli_fetch_assoc($uresults)){
					$userName = $urow['USER_FNAME']." ".$urow['USER_LNAME'];
					$userAddress = explode(", ",$urow['USER_ADDRESS']);
					for ($i = 0; $i < sizeof($userAddress); $i++){
					if ($userAddress[$i] == "Perlis." || "Kedah." || "Pulau Pinang." || "Penang." || "Kelantan." || "Pahang." || "Perak." || "Terengganu." || "Melaka." || "Malacca." ||
						"Johor." || "Johor Bahru." || "Selangor." || "Negeri Sembilan." || "Sabah." || "Sarawak." || "Labuan." || "Kuala Lumpur." || "Putrajaya."){
							$state = $userAddress[$i];
						}
					}
				}
			}
			$date = strtotime($getDate);			
			$date1 = strtotime($getDate.'+2 days');	
			$date2 = strtotime($getDate.'+6 days');
			$_SESSION['orderNo'] = $getID;
			$_SESSION['orderDate'] = date('Y-m-d',$date);
			$_SESSION['orderDate1'] = date('Y-m-d',$date1);
			$_SESSION['orderDate2'] = date('Y-m-d',$date2);
			$_SESSION['itemName'] = $itemName;
			$_SESSION['itemCost'] = $unitPrice;
			$_SESSION['itemQuantity'] = $quantity;
			$_SESSION['totalPrice'] = $totalPrice;	
			$_SESSION['itemID'] = $itemID;	
			$_SESSION['state'] = $state;
			$_SESSION['name'] = $userName;				
			echo"<script> location.replace('orderLocation.php'); </script>";			
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>
		<!-- jquery for data-mask-->
		<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
		<script src="scripts/jquery.mask.min.js"></script>
		<script type="text/javascript">
			jQuery(function($){
				$(".loginBox").mask("00000");		
			});
		</script>
		<!-- -->
	</head>
	<body>
	<center>
		<section class="track">
		<fieldset class="trackMenu">
			<legend style="font-size:20px" id="trackLabel">Track Your Order</legend>
			<form method="post">
				<label class="userOrderNo">Order No.:</label><br/>
				<div class="loginContainer">
					<i class="fas fa-box loginIcon"></i>
					<input type="text" class="loginBox" id="searchBar" placeholder="90000" name="orderNo" size = "70"/>
				</div>
				<a style="color:red;"><?php echo $errors; ?></a><br/>				
				<input type="submit" class="login-btn" name="track-submit" value="Track Order"><br/><br/>
				<div class="orderLocation" style="display: none;">
				</div>
			</form>
		</fieldset>	
		</section>
	</center>
	</body>
</html>
<?php 
	require "footer.php";
?>