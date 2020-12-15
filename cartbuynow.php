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
		$_SESSION['buyName'] = "";
		$_SESSION['buyCost'] = 0.00;
		$_SESSION['buyColour'] = "";
		$_SESSION['buySize'] = "";
		$_SESSION['buyQuantity'] = 0;
		$_SESSION['Total_price'] = 0.00;
		header("Refresh:0");
		header("Location: index.php");
	}
	
	if (isset($_POST['confirm-btn'])){
		if (empty($_SESSION['buyName'])){
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
     <h1 class="header">Shopping Cart</h1>
  </div>
	<center>
     <div class="table-container">
       <table class="summary">
         <td class="tabHeader" col span="1"> Name of item</td>
         <td class="tabHeader" col span="1"> Price</td>
         <td class="tabHeader" col span="1"> colour</td>
         <td class="tabHeader" col span="1">  Size</td>
         <td class="tabHeader" col span="1"> quantity </td>
         <td class="tabHeader" col span="1"> total Price Per Unit</td>
         <td class="tabHeader" col span="1"> Remove item </td>	
		 <form  method="post"> 
         <?php
         $item_cost =0;
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
		 echo "<td class='tabData' colspan='1'><center><input type='submit' class='removeItem' name='removeItem' value='Remove'></center></td>";				 
		 echo "</tr>";
		 $item_cost = calculate_Total_cost($itemPrice);
		 $_SESSION['Total_price'] = $item_cost;
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
	 <a style="color:red;"><?php echo $errors; ?></a><br/></center>
	 <div class="button-container">
       <input type="submit" name="confirm-btn" value="Confirm Order">
     </div>
	</form>
	</center>
	</body>
	<section style="margin-bottom: 240px;"></section>
</html>
<?php
	require "footer.php";
?>
