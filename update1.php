<?php 
	session_start();

	// initialize variables
	$productname = "";
	$price = "";
	$id = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost', 'root', '', 'fashion');

	if (isset($_POST['save'])) {
		$productname = $_POST['product_name'];
		$price = $_POST['price'];

		$query = "INSERT INTO `orders` (`product_id`, `product_name`, `price`) VALUES ('$id', '$productname', '$price')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Product saved"; 
		header('location: salesperson.php');
	}

	//update records
	if (isset($_POST['update1'])) {
		$productname = $_POST['product_name'];
		$price = $_POST['price'];
		$id=$_POST['product_id'];

		mysqli_query($db, "UPDATE `orders` SET `product_name` = '$productname', `price` = '$price' WHERE `orders`.`product_id` = $id;" );
		$_SESSION['msg'] = "Product Updated";
		header('location: salesperson.php');
	}

	//delete records
	if (isset($_GET['del'])) {
		$id = $_GET['del'];

		mysqli_query($db, "DELETE FROM orders WHERE product_id='$id'" );
		$_SESSION['msg'] = " Product Deleted";
		header('location: salesperson.php');
	}
	//retreive records
	$results = mysqli_query($db, "SELECT * FROM orders");
	
?>