

<?php

include ('connect.php');
session_start();

if (isset($_POST['login'])) {
	
    $email= $_POST['email'];
	$password= $_POST['password'];
	//$role = $_POST['user_role'];

	$query = "SELECT * FROM users WHERE email = '".$email."' and password = '".$password."'";
	$result = $connection->query($query);
	$data = $result->fetch_assoc();

	if ($result->num_rows > 0 && $data['user_role']=="admin") {
		$_SESSION['loggedin_admin'] = 2;
		print_r($data['user_role']);
		header("location:admin.php");
   }
   if ($result->num_rows > 0 && $data['user_role']=="customer") {
	$_SESSION['loggedin'] = 1;
	header("location:homepage.php");
}
if ($result->num_rows > 0 && $data['user_role']=="salesperson") {
	$_SESSION['loggedin'] = 3;
	header("location:salesperson.php");
}
		


			
	else{
		echo '<script> alert ("usernme password not matched") </script>';
	} 
				
	}
 
?>



<html>
<head> 
<title> login </title>
<link rel=“stylesheet”  href=“style.css”>
</head>

<style>
body {font-family:'Times New Roman', Times, serif;}

form {border: 5px solid #065675; width:50%;}

 h1,h3{ font-family: "Helvetica Neue";
     color :rgb(5, 48, 48);
         }
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  button {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  background-color: #065675;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  font-size: large;
}
span.psw {
  float: right;
  padding-top: 16px;
} 
a {
         color: rgb(12, 26, 25);
      }
 }
}

</style>

<center>
<body  background="45.jpg"> 
     <br> <br>

       <h1> Welcome to smart fashion store </h1> 
       
       <img src="234.jpg" width=15%, height= 30% style="border-radius: 60%;">
       
       <br><br> <br>
<form action = "index.php" method ="POST">
<br>

<b> Email : </b> <br> 
<input type = "text" placeholder="Enter the Email Address" name="email"><br> <br>
<b> Password : <br> </b>
 <input type ="password" placeholder="Enter the password" name="password"><br> <br>
<button type ="submit" value = "submit" name="login"> Login </button>
<br>

<label>
<b><a href="">Forgot password</a></b>
</form>

<h3>Are you new to smart fashion store?</h3>
<button type ="submit" > <a href="sign.php"> Create your Account </a> </button>
</center>
</body>
</html>