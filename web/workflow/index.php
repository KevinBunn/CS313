<?php
   session_start();
    $_SESSION['user'] = '';

    if (isset($_SESSION['user']))
        header('Location: dashboard.php');
    else
        header('Location: login.php');
?>
