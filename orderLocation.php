<?php
	require "header.php";
	require "includes/dbh.inc.php";
	
	echo "<center><body><hr class='line'>";
	echo 
		"<div class='smallItem' style='border:1px solid white;padding:2px;'>
		<a>Purchased on ".$_SESSION['orderDate']."</a><br/>
		<table><tr>
		<td style='border:none;width:20%;'>
		<img src='images/item".$_SESSION['itemID']."_1.jpg' style='width:100%;'/></td>
		<a>Order ID: ".$_SESSION['orderNo']."</a><br/>
		<td style='border:none;width:100%;'><a style='font-family:Bebas Neue;font-size:20px;'>".$_SESSION['itemName']."</a><br/>
		<a>Unit Price: RM".$_SESSION['itemCost']."</a><br/>
		<a>Quantity: ".$_SESSION['itemQuantity']."</a><br/>
		<a>Total Price: RM".$_SESSION['totalPrice']."</a><br/>
		<a href='item".$_SESSION['itemID'].".php' style='text-decoration:none;color:black;'><button class='userOrder-btn' style='float:right;'>View Item</button></a>
		<br/></td>								
		</tr></table>
		</div><hr class='line'>";
	$today = date('Y-m-d');
	$executed = false;
	$state = "";
	if ($_SESSION['state'] == "Perlis." || "Kedah." || "Pulau Pinang." || "Penang."){$state = "Pulau Pinang.";}
    else if ($_SESSION['state'] == "Perak."){$state = "Kuala Lumpur.";}
	else if ($_SESSION['state'] == "Sabah." || "Sarawak." || "Labuan."){$state = "Sarawak.";}
	else if ($_SESSION['state'] == "Kelantan." || "Terengganu." || "Pahang."){$state = "Pahang.";}
	else if ($_SESSION['state'] == "Sabah." || "Sarawak." || "Labuan."){$state = "Sarawak.";}
	else if ($_SESSION['state'] == "Selangor." || "Malacca." || "Melaka." || "Kuala Lumpur." || "Putrajaya."){$state = "Selangor.";}
	else if ($_SESSION['state'] == "Negeri Sembilan." || "Johor." || "Johor Bahru."){$state = "Negeri Sembilan.";}
	
	if ($_SESSION['orderDate2'] <= $today && !$executed){	
		echo 
		"<div class='locationBox'>
			<a>Date: ".$_SESSION['orderDate']." </a><br/>
			<a>Location: Selangor.</a><br/>
			<a>Order #".$_SESSION['orderNo']." <a class='detail'>has been dispatched by the seller</a>.</a>
		</div>";	
		echo 
			"<div class='locationBox'>
				<a>Date: ".$_SESSION['orderDate1']." </a><br/>
				<a>Location: ".$state."</a><br/>
				<a>Order #".$_SESSION['orderNo']." <a class='detail'>is on its way</a>.</a>
			</div>";
		echo 
		"<div class='locationBox'>
			<a>Date: ".$_SESSION['orderDate2']." </a><br/>
			<a>Location: ".$_SESSION['state']."</a><br/>
			<a>Order #".$_SESSION['orderNo']." <a class='detail'>has been delivered</a>. Received by ".$_SESSION['name'].".</a>
		</div>";
		$executed = true;
	}
	if ($_SESSION['orderDate1'] <= $today && !$executed){	
		echo 
		"<div class='locationBox'>
			<a>Date: ".$_SESSION['orderDate']." </a><br/>
			<a> Location: Selangor.</a><br/>
			<a>Order #".$_SESSION['orderNo']." <a class='detail'>has been dispatched by the seller</a>.</a>
		</div>";
		echo 
			"<div class='locationBox'>
				<a>Date: ".$_SESSION['orderDate1']." </a><br/>
				<a>Location: ".$state."</a><br/>
				<a>Order #".$_SESSION['orderNo']." <a class='detail'>is on its way</a>.</a>
			</div>";
		$executed = true;	
	}	
	if ($_SESSION['orderDate'] <= $today && !$executed){		
		echo 
		"<div class='locationBox'>
			<a>Date: ".$_SESSION['orderDate']." </a><br/>
			<a> Location: Selangor.</a><br/>
			<a>Order #".$_SESSION['orderNo']." <a class='detail'>has been dispatched by the seller</a>.</a>
		</div>";
		$executed = true;
	}	

	echo "</body></center>";
	require "footer.php";
?>

<html>
	<head>
		<meta lang="en">
		<link rel="stylesheet" href="styles/styleNonIndex.css" type="text/css"/>			
		<style>
			body{
				background-color: #E6E6FA;
			}
			.locationBox{
				background-color: #BCC6CC;
				width: 50%;
				height: 50%;
				border: 1px solid white;
				padding: 10px;
				cursor: pointer;
				transition: 0.2s;
			}
			.locationBox:hover{
				width: 53%;
				height: 53%;
				opacity: 0.8;
				font-size: 18px;
			}
			.locationBox:hover .detail{
				color: red;
			} 
			.smallItem{
				width: 50%;
				text-align: left;
				padding: 10px;
			}
			hr.line{
				border: 1px solid #E6E6FA;
			}
		</style>
	</head>
</html>






