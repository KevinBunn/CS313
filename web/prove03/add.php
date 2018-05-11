<?php
    session_start();
    
    if($_POST["DarkTemplar"] != '') {
      $_SESSION["TotalMinerals"] -= 150;
      $_SESSION["DarkTemplar"] = $_POST["DarkTemplar"];
    }
    if($_POST["Stalker"] != '') {
      $_SESSION["Stalker"] = $_POST["Stalker"];
    }
    if($_POST["Colossus"] != '') {
      $_SESSION["Colossus"] = $_POST["Colossus"];
    }
    if($_POST["Pheonix"] != '') {
      $_SESSION["Pheonix"] = $_POST["Pheonix"];
    }
    //$_SESSION["Artanis"] = $_POST["Artanis"];
    
?>