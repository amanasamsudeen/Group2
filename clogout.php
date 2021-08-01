<?php
    session_start();
    if ($GET['logout']==1 && isset($_SESSION['loggedin_admin']));
        unset($_SESSION['loggedin']);
        header("location:index.php");
        die();