<?php
    require "header.php";
    require "includes/dbh.inc.php";
    $errors = "";
    if((!$_SESSION['success'] === true))
    {
      header("location:login.php");
    }
     $total = 0;
    function calculate_Total_cost($quantity)
    {

      global  $total;
      $total = $total + $quantity;
      return $total;
    }
	
	if (isset($_POST['removeItem'])){
		$itemSelected =  mysqli_real_escape_string($conn, $_POST['itemIndex']);
		unset($_SESSION['itemName'][$itemSelected]);
		unset($_SESSION['itemCost'][$itemSelected]);
		unset($_SESSION['itemColour'][$itemSelected]);
		unset($_SESSION['itemSize'][$itemSelected]);
		unset($_SESSION['itemQuantity'][$itemSelected]);
		$_SESSION["cartNo"] -= 1;
		$_SESSION['Total_price'] = $_SESSION['Total_price'] - $_SESSION['itemCost'][$itemSelected];
		echo "<meta http-equiv='refresh' content='0'>";		
	}
	
	if (isset($_POST['removeAll'])){
		$itemAllSelected =  mysqli_real_escape_string($conn, $_POST['itemAllIndex']);
		for ($i = 0; $i < $itemAllSelected; $i++){
			unset($_SESSION['itemName'][$i]);
			unset($_SESSION['itemCost'][$i]);
			unset($_SESSION['itemColour'][$i]);
			unset($_SESSION['itemSize'][$i]);
			unset($_SESSION['itemQuantity'][$i]);
		}
		$_SESSION['itemName'] = array();
		$_SESSION['itemCost'] = array();
		$_SESSION['itemColour'] = array();
		$_SESSION['itemSize'] = array();
		$_SESSION['itemQuantity'] = array();
		$_SESSION["cartNo"] = 0;
		$_SESSION['Total_price'] = 0.00;
		echo "<meta http-equiv='refresh' content='0'>";		
	}

	if (isset($_POST['confirm-btn'])){
		if ($_SESSION['cartNo'] == 0){
			$errors = "Cart is empty! Please add an item to the cart first before proceeding to payment.";
		}
		else{
			echo"<script> location.replace('Checkout.php'); </script>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles/cartstyle.css" type="text/css"/>
	</head>
	<body>
  <div class="header-container">
     <h1 class="header"> Shopping cart </h1>
  </div>
     <div class="table-container">
	<center>
       <table class="summary">
         <td class="tabHeader" col span="1"> Name of item</td>
         <td class="tabHeader" col span="1"> Price</td>
         <td class="tabHeader" col span="1"> colour</td>
         <td class="tabHeader" col span="1">  Size</td>
         <td class="tabHeader" col span="1"> quantity </td>
         <td class="tabHeader" col span="1"> total Price Per Unit</td>
		 <form  method="post">
		 <?php 
			if ($_SESSION["cartNo"] < 2){
				echo "<td class='tabHeader' col span='1'>Remove item</td>";
			}
			else{
				echo "<td class='tabHeader' col span='1'><input style='display:none;' name='itemAllIndex' value='".$_SESSION["cartNo"]."'><input type='submit' class='removeAll' name='removeAll' value='Remove All?'></td>";
			}
         $item_cost =0;
          for($i=0;$i < $_SESSION["cartNo"];$i++)
               {
                 echo "<tr class='item_style'>";
                 echo   "<td class='tabData' colspan='1'>".$_SESSION['itemName'][$i]."</td>";				 
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
                 echo "<td class='tabData' colspan='1'><center><input style='display:none;' name='itemIndex' value='".$i."'><input type='submit' class='removeItem' name='removeItem' value='Remove'></center></td>";				 
                 echo "</tr>";
                 $item_cost = calculate_Total_cost($itemPrice);
                 $_SESSION['Total_price'] = $item_cost;
               }
          ?>
          <tr class="totalC">
            <td class='tabData'> Total cost : </td>
            <td class="price" colspan="6" > <?php 
			if ($item_cost == 0){
				echo "-";
			}
			else{
				echo "RM".$item_cost; 
			}
			?>
			</td>
          </tr>	  
       </table>
     </div>
	 <center><a style="color:red;"><?php echo $errors; ?></a><br/></center>
	 <div class="button-container">
       <input type="submit" name="confirm-btn" value="Confirm Order">
     </div>
	</form>
	</body>
	<section style="margin-bottom: 240px;"></section>
</html>
<?php
	require "footer.php";
?>
