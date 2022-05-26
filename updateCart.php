	<?php
include_once("opendb.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	session_destroy();
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$idSP 	= filter_var($_POST["idSP"], FILTER_SANITIZE_STRING); //product id
	$soLuong 	= filter_var($_POST["soLuong"], FILTER_SANITIZE_NUMBER_INT); //product id
	$return_url 	= base64_decode($_POST["return_url"]); //return url

	//MySqli query - get details of item from db using product id
	$results = $mysqli->query("SELECT tenSP,gia FROM giohang WHERE idSP='$idSP' LIMIT 1");
	$obj = $results->fetch_object();
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_product = array(array('name'=>$obj->tenSP, 'id'=>$idSP, 'qty'=>$soLuong, 'gia'=>$obj->gia));
		
		if(isset($_SESSION["giohang"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["giohang"] as $cart_itm) //loop through session array
			{
				if($cart_itm["id"] == $idSP){ //the item exist in array

					$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$soLuong, 'gia'=>$cart_itm["gia"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$cart_itm["qty"], 'gia'=>$cart_itm["gia"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["giohang"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["giohang"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["giohang"] = $new_product;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["giohang"]))
{
	$idSP 	= $_GET["removep"]; //get the product id to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["giohang"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["id"]!=$idSP){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$cart_itm["qty"], 'gia'=>$cart_itm["gia"]);
		}
		
		//create a new product list for cart
		$_SESSION["giohang"] = $product;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}
?>