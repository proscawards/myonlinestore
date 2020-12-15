<?php
function form_data($color,$image,$size=null, $itemID=null)
{	
	if($color != null && ($itemID != 5001 && $itemID != 5002 && $itemID != 5003)){	
		echo "<table class='userSelection'>";
		echo "<tr><td colspan='2'><div class='itemChoice'>";
		echo "<label>Colour Family: </label><br/>";
		for($i =0;$i<count($color);$i++){
			echo "<label for= '".$color[$i]."' class='colorOption'/>";
			echo "<input type='radio' id= '/ ".$color[$i]."'/ name='colour' value= '".$color[$i]."'/>";
			echo "<img src =' ".$image[$i]."' title='".$color[$i]."'/>";
			echo "</label>";
		}
		echo "</div></td></tr>";
	}
	if($size != null && ($itemID != 5001 && $itemID != 5002 && $itemID != 5003)){
		echo "<tr><td><div class='itemSize'>";
		echo "<label>Size:</label><br/>";
		$checkOneSize = false;
		for ($i=0; $i < count($size); $i++) { 
			if ($size[$i] == "One Size Only"){
				echo "<input type='text' style='padding: 10px 10px 10px 10px; outline: none;' value= 'One Size Only'  readonly/>";
				$checkOneSize = true;
			}

		if (!$checkOneSize){
			echo '<select name="size" class="itemSizeInput">';
			for ($i=0; $i < count($size); $i++) {
				if ($size[$i] == "exSmall"){echo "<option class= '".$size[$i]." '/ value= 'XS'/ >XS</option>";}
				if ($size[$i] == "small"){echo "<option class= '".$size[$i]." '/ value= 'S'/ >S</option>";}
				if ($size[$i] == "medium"){echo "<option class= '".$size[$i]." '/ value= 'M'/ >M</option>";}
				if ($size[$i] == "large"){echo "<option class= '".$size[$i]." '/ value= 'L'/ >L</option>";}
				if ($size[$i] == "exLarge"){echo "<option class= '".$size[$i]." '/ value= 'XL'/ >XL</option>";}
				if ($size[$i] == 28){echo "<option class= '".$size[$i]." '/ value= '28'/ >28</option>";}
				if ($size[$i] == 29){echo "<option class= '".$size[$i]." '/ value= '29'/ >29</option>";}
				if ($size[$i] == 30){echo "<option class= '".$size[$i]." '/ value= '30'/ >30</option>";}
				if ($size[$i] == 31){echo "<option class= '".$size[$i]." '/ value= '31'/ >31</option>";}
				if ($size[$i] == 32){echo "<option class= '".$size[$i]." '/ value= '32'/ >32</option>";}
				if ($size[$i] == 33){echo "<option class= '".$size[$i]." '/ value= '33'/ >33</option>";}
				if ($size[$i] == 34){echo "<option class= '".$size[$i]." '/ value= '34'/ >34</option>";}
				if ($size[$i] == 35){echo "<option class= '".$size[$i]." '/ value= '35'/ >35</option>";}
				if ($size[$i] == 36){echo "<option class= '".$size[$i]." '/ value= '36'/ >36</option>";}
				if ($size[$i] == 37){echo "<option class= '".$size[$i]." '/ value= '37'/ >37</option>";}
				if ($size[$i] == 38){echo "<option class= '".$size[$i]." '/ value= '38'/ >38</option>";}
				if ($size[$i] == 39){echo "<option class= '".$size[$i]." '/ value= '39'/ >39</option>";}
				if ($size[$i] == 40){echo "<option class= '".$size[$i]." '/ value= '40'/ >40</option>";}
				if ($size[$i] == 40){echo "<option class= '".$size[$i]." '/ value= '40'/ >40</option>";}	
			}
			echo "</select><br/>";
		}
		}
		echo "</div></td>";
	}
	if (($itemID != 5001 && $itemID != 5002 && $itemID != 5003)){
		echo "<td><label>Quantity: </label><br/>";
		echo "<div class='quantity buttons_added''>";
		echo "<input type='button' value='-' class='minus'><input type='number' step='1' min='1' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode=''><input type='button' value='+' class='plus'>";
		echo "</div>";
		echo "</div></td></tr>";
		echo "<tr><td colspan='2'>";
		switch($itemID){
				case 1000: echo "<a href='https://www2.hm.com/en_gb/customer-service/sizeguide/men.html'>Size Guide</a>"; break;
				case 1001: echo "<a href='https://www2.hm.com/en_gb/customer-service/sizeguide/men.html'>Size Guide</a>"; break;			
				case 1003: echo "<a href='https://www.sandersmenswear.com/buy-online/peter-england-shirt-sizes.html'>Size Guide</a>"; break;
				case 1004: echo "<a href='https://www.levis.com.au/Men-sizecharts-bottoms.html'>Size Guide</a>"; break;
				case 1005: echo "<a href='https://www.adidas.com.my/en/help-topics-size_charts.html'>Size Guide</a>"; break;
				case 1006: echo "<a href='http://www.sizecharter.com/brands/zar/mens'>Size Guide</a>"; break;
				case 1007: echo "<a href='https://www.uniqlo.com/my/store/online/has/size-chart.html'>Size Guide</a>"; break;		
				case 2000: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2001: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2002: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;	
				case 2003: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2004: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2005: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2006: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;
				case 2007: echo "<a href='https://support.zalora.com.my/hc/en-us/sections/201942001-Women-s-Sizing-Guide'>Size Guide</a>"; break;			
			}
		echo "</td></tr>";
		echo "<tr><div class='itemPurchase'>";
		echo "<td colspan='1'><button class='addToCart-btn' type='submit' name='addToCart' value='submit'>Add To Cart</button></td>";
		echo "<td colspan='1'><button class='buyNow-btn' type='submit' name='buyNow' value='submit'>Buy Now</button></td>";
		echo "</div></td></tr></table>";
	}
	if (($itemID == 5001 || $itemID == 5002 || $itemID == 5003)){
		echo "<table class='userSelection'>";
		echo "<tr>";
		echo "<td><label>Quantity: </label><br/>";
		echo "<div class='quantity buttons_added''>";
		echo "<input type='button' value='-' class='minus'><input type='number' step='1' min='1' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode=''><input type='button' value='+' class='plus'>";
		echo "</div>";
		echo "</div></td></tr>";
		echo "<tr><div class='itemPurchase'>";
		echo "<td colspan='1'><button class='addToCart1-btn' type='submit' name='addToCart' value='submit'>Add To Cart</button></td>";
		echo "<td colspan='1'><button class='buyNow1-btn' type='submit' name='buyNow' value='submit'>Buy Now</button></td>";
		echo "</div></td></tr></table>";
	}
	echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
	?><script>
		$(document).ready(function(){
			// add/remove checked class
			$(".colorOption").each(function(){
				if($(this).find('input[type="radio"]').first().attr("checked")){
					$(this).addClass('colorOption-checked');
				}else{
					$(this).removeClass('colorOption-checked');
				}
			});

			// sync the input state
			$(".colorOption").on("click", function(e){
				$(".colorOption").removeClass('colorOption-checked');
				$(this).addClass('colorOption-checked');
				var $radio = $(this).find('input[type="radio"]');
				$radio.prop("checked",!$radio.prop("checked"));

				e.preventDefault();
			});
		});
		</script>
	<?php
}

?>
