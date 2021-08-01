<?php
    session_start();
    $db=mysqli_connect('localhost','root','','fashion');


    

$name = "";
$password = "";
$email = "";
$user_role ="";
$edit_state = false;




if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_role = $_POST['user_role'];

    $query = "INSERT INTO `users` (`username`, `email`, `password`, `user_role`) VALUES ('$username', '$email', '$password', '$user_role')";
    mysqli_query($db, $query);
    
    $_SESSION['msg'] = "Details saved";
    header('location: admin.php');

}
    if (isset($_POST['edit'])){
        $name = $_POST['username'];
        $password =$_POST['password'];
        $email = $_POST['email'];
        $user_role = $_POST['user_role'];
       

        mysqli_query($db, " UPDATE `users` SET `username` = '$name', `password` = '$password' WHERE `users`.`email` = '$email';");
        $_SESSION['msg'] = "Details updated";
        header('location: admin.php');
    }

    if (isset($_GET['del'])){
        $email = $_GET['del'];
        mysqli_query($db, "DELETE FROM users WHERE  email='$email'");
        $_SESSION['msg'] = "Details deleted";
        header('location: admin.php');
    }








    $results = mysqli_query($db, "SELECT * FROM `users`");





?>