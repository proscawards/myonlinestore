<?php
	require "includes/dbh.inc.php";
	$error = "";
	$sql = "SELECT * FROM item WHERE ITEM_ID = '$itemID'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$itemName = $row['ITEM_NAME'];
			$itemPrice = $row['ITEM_PRICE'];
			$itemDiscount = $row['ITEM_PROMO'];
			$itemQuantity = $row['ITEM_COUNT'];
		}
	}

if (isset($_POST['addToCart'])){
	if(!isset($_SESSION['success']) || $_SESSION['success'] !== true){
		echo"<script> location.replace('login.php'); </script>";
		exit;
	}
	else{
		if(isset($_POST['colour']) && !empty($_POST['colour'])){
			$colour = mysqli_real_escape_string($conn, $_POST['colour']);
		}	
		else{
			echo "<a style='color:red;'>Colour family must be selected first!</a>";
		}		
		if(isset($_POST['size']))
		{
			if ($_POST['size'] == "exSmall"){$_POST['size'] = "XS";}	
			if ($_POST['size'] == "small"){$_POST['size'] = "S";}
			if ($_POST['size'] == "medium"){$_POST['size'] = "M";}
			if ($_POST['size'] == "large"){$_POST['size'] = "L";}
			if ($_POST['size'] == "exLarge"){$_POST['size'] = "XL";}
			else{$size = mysqli_real_escape_string($conn, $_POST['size']);}
		}
		else {
			$_POST['size'] = "no Size";
			$size = mysqli_real_escape_string($conn, $_POST['size']);
		}

		$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

		if (isset($_POST['colour']) && isset($_POST['size'])){
			$valid = false;
			for ($i = 0; $i < $_SESSION['cartNo']; $i++){
				if ($_SESSION['itemName'][$i] == $itemName && $_SESSION['itemSize'][$i] == $size && $_SESSION['itemColour'][$i] == $colour){
					$_SESSION['itemQuantity'][$i] = $_SESSION['itemQuantity'][$i] + $quantity;
					if($itemDiscount == "0.00")
					{
						$_SESSION['itemCost'][$i] = $_SESSION['itemCost'][$i] + $itemPrice;
					}
					else {
						$_SESSION['itemCost'][$i] = $_SESSION['itemCost'][$i] + $itemDiscount;
					}
					$valid = true;
				}
			}
			if (!$valid){
				$_SESSION['itemName'][$cartNo] =  $itemName;
				if($itemDiscount == "0.00")
				{
					$_SESSION['itemCost'][$cartNo] = $itemPrice;
				}
				else {
					$_SESSION['itemCost'][$cartNo] = $itemDiscount;
				}

				$_SESSION['itemColour'][$cartNo] = $colour;
				$_SESSION['itemSize'][$cartNo] = $size;
				$_SESSION['itemQuantity'][$cartNo] = $quantity;
				$_SESSION['itemID'][$cartNo] = $itemID;
				$_SESSION['cartNo'] += 1;
				$cartNo = $_SESSION['cartNo'];
				echo "<meta http-equiv='refresh' content='0'>";
			}
		}
	}

}

if (isset($_POST['buyNow'])) {
	if(!isset($_SESSION['success']) || $_SESSION['success'] !== true){
		echo"<script> location.replace('login.php'); </script>";
		exit;
	}
	else{
		if(isset($_POST['colour']) && !empty($_POST['colour'])){
			$colour = mysqli_real_escape_string($conn, $_POST['colour']);
		}	
		else{
			echo "<a style='color:red;'>Colour family must be selected first!</a>";
		}	
		if(isset($_POST['size']))
		{
			if ($_POST['size'] == "exSmall"){$_POST['size'] = "XS";}	
			if ($_POST['size'] == "small"){$_POST['size'] = "S";}
			if ($_POST['size'] == "medium"){$_POST['size'] = "M";}
			if ($_POST['size'] == "large"){$_POST['size'] = "L";}
			if ($_POST['size'] == "exLarge"){$_POST['size'] = "XL";}
			$size = mysqli_real_escape_string($conn, $_POST['size']);
		}
		else {
			$_POST['size'] = "no Size";
			$size = mysqli_real_escape_string($conn, $_POST['size']);
		}

		$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
		
		if (isset($_POST['colour']) && isset($_POST['size'])){
			$_SESSION['buyName'] =  $itemName;
			if($itemDiscount == "0.00")
			{
				$_SESSION['buyCost'] = $itemPrice;
			}
			else {
				$_SESSION['buyCost'] = $itemDiscount;
			}
			$_SESSION['buyColour'] = $colour;
			$_SESSION['buySize'] = $size;
			$_SESSION['buyQuantity'] = $quantity;
			$_SESSION['itemID'][$cartNo] = $itemID;
			echo"<script> location.replace('cartbuynow.php'); </script>";
		}
	}
}

?>
