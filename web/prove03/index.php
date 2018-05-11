<?php
   session_start();
   $_SESSION["DarkTemplar"] = '0';
   $_SESSION["Stalker"] = '0';
   $_SESSION["Colossus"] = '0';
   $_SESSION["Pheonix"] = '0';
   $_SESSION["Artanis"] = '0';
   $_SESSION['units'] = '0';
   header('Location: browse.php');
?>