<?php
session_start();
require_once('connect.php');


if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "customer";

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connection,$query);
$num = mysqli_num_rows($result);

if($num == 1){ 
	echo '<script> alert ("Email Already taken!") </script>';

}else{
	$reg= "INSERT INTO `users` ( `username`, `email`, `password`,`user_role`) VALUES ('$username', '$email', '$password', '$role')";
	$result = mysqli_query($connection,$reg);


	
 
        if ($result) {
            echo '<script> alert ("Registration Successfull") </script>';
        } else {
            echo '<script> alert ("error") </script>';
        }
    }
}
 
?>







<html> <head><title> signup</title></head>
<style>

    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 5px solid #055575; width:50%;}
     h1,h3,h4{ font-family: "Helvetica Neue";
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
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  background-color: #055575;
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
         color: rgb(23, 22, 31);
      }
}

</style>

    <center>
        <body  background="45.jpg"> 
             <br> 
    <h1> Welcome to smart fashion store </h1> 
    <img src="234.jpg" width=15%, height= 30% style="border-radius: 60%;">
    <br> <br>
    
    <h3> Create your Account</h3>
<form action = "sign.php" method ="POST">
<br>
<b> Your Name </b> <br> 
<input type = "text" placeholder="Enter your Name" name="username"><br> <br>
<b> Email  </b> <br> 
<input type = "text" placeholder="Enter the Email Address" name="email"><br> <br>
<b> Password  <br> </b>
<input type ="password" placeholder="Enter the password" name="password"><br> <br>
<b> Re-enter your Password </b> <br> 
<input type = "password" placeholder="Enter the password again"name="confirm_password"><br> <br>
<button type ="submit" value = "submit" name="register"> Create Account </button>
<br>

 
</form>

<h4>Already have an account?</h4>

<button type ="submit" > <a href="index.php">  sign in  </a>  </button>

</center>
</body>