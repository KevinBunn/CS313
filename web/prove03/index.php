<?php
   session_start();
   $_SESSION['units'] = '';
   header('Location: browse.php');
?>