<?php  include('update1.php'); 

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$record = mysqli_query($db, "SELECT * FROM orders WHERE product_id ='$id'");
		//if (count($record) == 1){
		//$record = mysqli_fetch_array($record);
		if (mysqli_num_rows($record)==1){
	
			$n=mysqli_fetch_array($record);
		$productname = $n['product_name'];
		$price = $n['price'];
		$id = $n['product_id'];
			}
			
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sales Person</title>
	<style>
	body {  background-color: #96ddf3;
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 5px solid  #020f36; 
    border-radius: 8px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px #005ce6;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
body {
  background-image: url('56.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	</div>
<?php endif ?>

<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Price</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr> 
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td>
			<a class=" edit_btn"  href="salesperson.php?edit=<?php echo $row['product_id']; ?>" >Edit</a>
			</td>
			<td>
			<a class="del_btn" href="update1.php?del=<?php echo $row['product_id']; ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

	<form method="post" action="update1.php">
	<input type="hidden" name="product_id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Product name</label>
			<input type="text" name="product_name" value="<?php echo $productname; ?>">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
		</div>
		
		<div class="input-group">
		<?php if ($edit_state == false): ?>
			<button type="submit" name="save" class="btn">Save</button>
			<?php else: ?>
			<button type="submit" name="update1" class="btn">Update</button>
		<?php endif ?>
		</div>
	</form>
</body>
</html>  