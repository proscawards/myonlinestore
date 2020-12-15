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
		if(isset($_POST['bank'])){
			$bank = mysqli_real_escape_string($conn, $_POST['bank']);
			$_SESSION['bank'] = $bank;
			echo"<script> location.replace('fpx_payment.php'); </script>";
		}	
		if(empty($_POST['bank'])){
			$errors = "Select a bank first!";
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
			var timeLabel = document.getElementById("timeout");

			function twoDigits( n )
			{
				return (n <= 9 ? "0" + n : n);
			}

			function updateTimer()
			{
				msLeft = endTime - (+new Date);
				if ( msLeft < 1000 ) {
					timeLabel.innerHTML = "";
					element.innerHTML = "Session Expired! Redirecting to merchant page...";
					location.replace('Checkout.php');
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
</head>
<body onload="countdown('timer', 10, 0 )">
<center>
	<div class="imgHeader">
		<img src="images/ipay88_header.png" width="30%">
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
		<td>Reference ID / Payment ID</td><td>Order #<?php echo $_SESSION['orderID']; ?></td>
		</tr>
		</table>
	</div>
	<div class="paymentHeader">
	<a style="color:#2aa2c3;">FPX payment</a><hr class="line1">
	</div>	
	<form method="post">
	<div class="paymentChoice">
		<a style="color:#2aa2c3;">List of FPX supported banks :</a>
		<hr class="line2">
		<label for="affin" class="bankChoice">
			<input type="radio" name="bank" value="Affin Bank"/>
			<img src ="images/bank_affin.jpg" title="Affin Bank"/>
		</label>
		<label for="alliance" class="bankChoice">
			<input type="radio" name="bank" value="Alliance Bank"/>
			<img src ="images/bank_alliance.jpg" title="Alliance Bank"/>
		</label>
		<label value="am" class="bankChoice">
			<input type="radio" name="bank" value="AmBank"/>
			<img src ="images/bank_am.jpg" title="AmBank"/>
		</label>
		<label value="cimb"class="bankChoice">
			<input type="radio" name="bank" value="Cimb Clicks"/>
			<img src ="images/bank_cimb.jpg" title="Cimb Clicks"/>
		</label>
		<label value="islam" class="bankChoice">
			<input type="radio" name="bank" value="Bank Islam"/>
			<img src ="images/bank_islam.jpg" title="Bank Islam"/>
		</label>
		<label value="rakyat" class="bankChoice">
			<input type="radio" name="bank" value="iRakyat"/>
			<img src ="images/bank_rakyat.jpg" title="iRakyat"/>
		</label>
		<label value="hl" class="bankChoice">
			<input type="radio" name="bank" value="Hong Leong Connect"/>
			<img src ="images/bank_hl.jpg" title="Hong Leong Connect"/>
		</label>		
		<label value="m2u" class="bankChoice">
			<input type="radio" name="bank" value="Maybank2U"/>
			<img src ="images/bank_m2u.jpg" title="Maybank2U"/>
		</label>	
		<label value="pbe" class="bankChoice">
			<input type="radio" name="bank" value="PBe"/>
			<img src ="images/bank_pbe.jpg" title="PBe"/>
		</label>
		<label value="rhb" class="bankChoice">
			<input type="radio" name="bank" value="RHB Now"/>
			<img src ="images/bank_rhb.jpg" title="RHB Now"/>
		</label>
		<label value="uob" class="bankChoice">
			<input type="radio" name="bank" value="UOB"/>
			<img src ="images/bank_uob.jpg" title="UOB"/>
		</label>		
	</div>	
	<div class="timerLabel" style="color:#46764d;">
		<a id="timeout"> Timeout in: <a id="timer"></a></a>
	</div><br/>
	<div class="buttons">
		<a style="color:red;"><?php echo $errors; ?></a><br/>
		<input type="submit" name="proceed-btn" class="proceedBtn" value=">>Proceed"/>
		<input type="submit" name="cancel-btn" class="cancelBtn" value="Cancel"/>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			// add/remove checked class
			$(".bankChoice").each(function(){
				if($(this).find('input[type="radio"]').first().attr("checked")){
					$(this).addClass('bankChoice-checked');
				}else{
					$(this).removeClass('bankChoice-checked');
				}
			});

			// sync the input state
			$(".bankChoice").on("click", function(e){
				$(".bankChoice").removeClass('bankChoice-checked');
				$(this).addClass('bankChoice-checked');
				var $radio = $(this).find('input[type="radio"]');
				$radio.prop("checked",!$radio.prop("checked"));

				e.preventDefault();
			});
		});
	</script>

</html>
