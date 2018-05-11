<?php
   session_start();
   $_SESSION["DarkTemplar"] = '';
   $_SESSION["Stalker"] = '';
   $_SESSION["Colossus"] = '';
   $_SESSION["Pheonix"] = '';
   $_SESSION["Artanis"] = '';
   $_SESSION['units'] = '';
   header('Location: browse.php');
?>