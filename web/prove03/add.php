<?php
    session_start();
    
    if($_POST["DarkTemplar"] != '') {
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
    
    $computed_cost = (2000 - (100 * $_SESSION["DarkTemplar"]) - (150 * $_SESSION["Stalker"]) - (300 * $_SESSION["Colossus"]) - (100 * $_SESSION["Pheonix"]) - (500 * $_SESSION["Artanis"]));
    $_SESSION["TotalMinerals"] = $computed_cost;
?>