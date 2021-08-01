<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "", "fashion");

if(isset($_POST["add_to_cart"])){
	if(isset($_SESSION["shopping_cart"])){

        
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

        
        if(!in_array($_GET["id"], $item_array_id)){
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
            
            
            foreach($_SESSION["shopping_cart"] as $keys => $values){
                if($values["item_id"] == $_GET["id"]){
                    
                    $_SESSION["shopping_cart"][$keys]["item_quantity"] = 	$_POST["quantity"];
                    
                }
		    }
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
		
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
	
     
        <link href="style.css" rel="stylesheet">
		
	</head>
	<body style = "background-color:#96ddf3">

			<h1 align="center">Shopping Cart</a></h1><br />
			<br /><br />
            <div class="container ">
            <?php
				$query = "SELECT * FROM product ORDER BY id ASC";
				$result = mysqli_query($connection, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
                ?>
            
                <div class="medew" style = "background-color:#96ddf3">
                    <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                            <img src="images/<?php echo $row["image"]; ?>" class="product-img" /><br />

                            <h4 class="text-name"><?php echo $row["name"]; ?></h4>

                            <h4 class="text-price">Rs. <?php echo $row["price"]; ?></h4>

                            <h4 class="text-description"><?php echo $row["description"]; ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

                        </div>
                    </form>
                </div>
            
			<?php
					}
				}
            ?>
            </div>
			<br>
			<br />
			
			<div class="cart-table2">
            <h2 align="center">Product Order Details</h2>
            <br>
				<table class="cart-table">
                <thead>
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
                    </tr>
                </thead>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
                    ?>
                    <tbody>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?></td>
						<td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    </tbody>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rs. <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
                    ?>
                    
						
				</table>
			</div>
		</div>

	<br />
	</body>
</html>
