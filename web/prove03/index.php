<?php
   session_start();
   $_SESSION["DarkTemplar"] = 0;
   $_SESSION["Stalker"] = 0;
   $_SESSION["Colossus"] = 0;
   $_SESSION["Pheonix"] = 0;
   $_SESSION["Artanis"] = 0;
   $_SESSION["TotalMinerals"] = 2000;
   $_SESSION['units'] = '';

    $_SESSION["Address"] = '';
    $_SESSION["City"] = '';
    $_SESSION["State"] = '';
    $_SESSION["Zip"] = '';

   header('Location: browse.php');
?>