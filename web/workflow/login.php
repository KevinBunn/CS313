<?php
   session_start();
    $_SESSION['user'] = 'kyle';

    if (isset($_SESSION['user']))
        header('Location: dashboard.php');
    else
        header('Location: login.php');
?>