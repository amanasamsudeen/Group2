<?php include('server.php'); 



if (isset($_GET['edit']))
{ 
	
$email = $_GET['edit'];
	$edit_state = true;
	$record = mysqli_query($db, "SELECT * FROM users WHERE email='$email' ");
	 
	
	if (mysqli_num_rows($record)==1){
	
		$n=mysqli_fetch_array($record);
		$name = $n['username'];
	
	    
		$email = $n['email'];
		$password = $n['password'];
	    $user_role = $n['user_role'];
	}
	
	
	
}


?>
<!DOCTYPE html>
<html>



<head>
	
	<title>Admin Page</title>
	
	<link rel="stylesheet"  href="stylenew.css">


	<style>
body {
  background-image: url('56.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
} </style>

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
	<?php $results = mysqli_query($db,"SELECT * FROM users"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			
			<th>User_role</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>

	

     

		<?php   while ($row = mysqli_fetch_array($results)){?>
		<tr>
			<td><?php echo $row['username']; ?></td>

			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['password']; ?></td>
			
			<td><?php echo $row['user_role']; ?></td>
			<td>
				<a class="edit_btn"  href="admin.php?edit=<?php echo $row['email']; ?>" > Edit</a>
			</td>
			<td>
				<a class="del_btn" href="server.php?del=<?php echo $row['email']; ?>"> Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>  
	</table>


<form method="post" action="server.php">

<br><br>
<div class="input-group">
	<label>Name</label>
	<input type="text" name="username" value="<?php echo $name; ?>">
</div>
<br><br>

<div class="input-group">
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $email; ?>">
</div>
<br><br>
<div class="input-group">
	<label>Password</label>
	<input type="password" name="password" value="<?php echo $password; ?>">
</div>


<br><br>
<div class="input-group">
	<label>User_role</label>
	<input type="text" name="user_role" value="<?php echo $user_role; ?>">
</div>
<br><br>
<div class="input-group">
<?php if ($edit_state == false): ?>
	<button type="submit" name="save" class="btn">Save</button>
<?php else: ?>
	<button type="submit" name="edit" class="btn">Edit</button>
<?php endif; ?>
</div>

</form>


</body>
</html>