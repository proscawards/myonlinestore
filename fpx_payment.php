<?php
    require "includes/dbh.inc.php";
	session_start();
	$errors = "";
	$valid = false;
	
	
	if (isset($_POST['confirm-btn'])){
		$tacJs = $_COOKIE["randNo"];
		echo $tacJs;
		$tacInput = mysqli_real_escape_string($conn, $_POST['tacInput']);
		$orderID = $_SESSION['orderID'];
		if ($tacJs == $tacInput){
			if (empty($_SESSION['buyName'])){
				for ($i = 0; $i < $_SESSION['cartNo']; $i++){
					$orderDate = date('Y-m-d');
					$unitPrice = $_SESSION['itemCost'][$i];
					$quantity = $_SESSION['itemQuantity'][$i];
					$totalPrice = $_SESSION['Total_price'];
					$userID = $_SESSION['userID'];
					$itemID = $_SESSION['itemID'][$i];
					$query = "Insert into orders (ORDER_ID, ORDER_DATE, UNIT_PRICE, QUANTITY, TOTAL_PRICE, USER_ID, ITEM_ID, PAYMENT_ID) VALUES ('$orderID', '$orderDate' ,'$unitPrice','$quantity','$totalPrice','$userID','$itemID',2)";
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
				$query = "Insert into orders (ORDER_ID, ORDER_DATE, UNIT_PRICE, QUANTITY, TOTAL_PRICE, USER_ID, ITEM_ID, PAYMENT_ID) VALUES ('$orderID', '$orderDate' ,'$unitPrice','$quantity','$totalPrice','$userID','$itemID',2)";
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
		else{
			$errors = "TAC is invalid!";
		}
	}
	
	
?>

<html>
<head>
	<title>iPay88 | Online Payment Gateway</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/ipay88.ico">
	<link rel="stylesheet" href="styles/fpx.css" type="text/css"/>
	<script src="https://kit.fontawesome.com/935200c161.js" crossorigin="anonymous"></script>
	<script>
		function countdown( elementName, minutes, seconds )
		{
			var element, endTime, hours, mins, msLeft, time;

			function twoDigits( n )
			{
				return (n <= 9 ? "0" + n : n);
			}

			function updateTimer()
			{
				msLeft = endTime - (+new Date);
				if ( msLeft < 1000 ) {
					element.innerHTML = "Time is up!";
				} else {
					time = new Date( msLeft );
					hours = time.getUTCHours();
					mins = time.getUTCMinutes();
					element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
					setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
				}
			}

			element = document.getElementById( elementName );
			endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
			updateTimer();
		}
	</script>
	<!-- jquery for data-mask-->
	<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
	<script src="scripts/jquery.mask.min.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			$(".tac").mask("000000");
		});
	</script>
	<!-- -->
	<script> 
		function randomTAC(){
			var randNo = Math.floor(100000 + Math.random() * 900000);
			document.cookie="fpx_payment.php?randNo="+randNo;
			alert("TAC is " + randNo);
		}
	</script>
</head>
<body onload="countdown('timer', 10, 0 )">
<center>
	<div class="imgHeader">
		<?php
			if ($_SESSION['bank'] == "Affin Bank"){echo "<img src='images/bank_affin.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "Alliance Bank"){echo "<img src='images/bank_alliance.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "AmBank"){echo "<img src='images/bank_am.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "Cimb Clicks"){echo "<img src='images/bank_cimb.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "Bank Islam"){echo "<img src='images/bank_islam.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "Maybank2U"){echo "<img src='images/bank_m2u.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "PBe"){echo "<img src='images/bank_pbe.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "iRakyat"){echo "<img src='images/bank_rakyat.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "Hong Leong Connect"){echo "<img src='images/bank_hl.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "UOB"){echo "<img src='images/bank_uob.jpg' width='20%'>";}
			if ($_SESSION['bank'] == "RHB Now"){echo "<img src='images/bank_rhb.jpg' width='20%'>";}
		?>
	</div>

	<div class="paymentDetails">
		<i class="fas fa-shopping-cart fa-flip-horizontal" style="color:orange;"></i>
		<a style="color:#2aa2c3;">Summary of Transaction</a>
		<hr class="line">
		<table><tr>
		<td>Net Charges</td><td><a  style="font-style:italic;color:#515ba6;font-weight:bold;"><?php echo "MYR ".$_SESSION['Total_price']; ?></a></td>
		</tr><tr>
		<td>Pay To</td><td>myOnlineStore.com SDN BHD</td>
		</tr><tr>		
		<td>Payment of</td><td>Purchase of 
		<?php
			if (!empty($_SESSION['buyName'])){
				echo $_SESSION['buyName'];
			}
			else{
				if ($_SESSION['itemName'] > 2){echo $_SESSION['itemName'][0]." & etal.";}
				else{echo $_SESSION['itemName'][0];}
			}
		?>	
		</td>
		</tr><tr>
		<td>Reference ID / Payment ID</td><td>Order #<?php echo $_SESSION['orderID'];?></td>
		</tr><tr>
		<td>FPX Payment Bank</td><td><?php echo $_SESSION['bank']; ?></td>
		</tr><tr>
		<td>TAC Code</td><td><input type="text" class="tac" name="tacInput" />&nbsp;&nbsp;<a style="color:blue;cursor:pointer;" onclick="randomTAC()">Send TAC</a>
		<br/><a style="color:red;"><?php echo $errors; ?></a></td>		
		</tr>
		
		</table>
	</div>
	<hr class="line2">
	</div>		
	<div class="timerLabel" style="color:#46764d;">
		<a> Timeout in: <a id="timer"></a></a>
	</div><br/>
	<form method="post">
	<div class="buttons">
		<input type="submit" name="confirm-btn" class="proceedBtn" value="Confirm"/>
		<br/><br/>
		<a style="font-size: 15px;"> I have read & agreed to <a style="text-decoration: none;" href="https://www.ipay88.com/privacy.html">iPay88 Privacy Statement</a>.</a>	
	</div>
	</form>
	<hr class="line4">
	<div class="footer">
		<a>Powered by: </a><br/>
		<img src="images/fpx_footer.png"><br/>
		<a>iPay88.com &copy; 2006 - 2020. All Rights Reserved.</a><br/>
		<a>Customer Careline: +60-3-2261 4668, 8.30am - 6.00pm (Mon - Fri)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <a style="text-decoration: none;" href="mailto:support@ipay88.com.my">support@ipay88.com.my</a>	</a>
	</div>
</center>
</body>
</html>
