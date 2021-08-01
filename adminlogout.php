<?php
    session_start();
    if ($GET['logout']==2 && isset($_SESSION['loggedin_admin']));
        unset($_SESSION['loggedin_admin']);
        header("location:index.php");
        die();