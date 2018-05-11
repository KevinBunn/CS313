<?php
  session_start();
  $units = $dt = $stalker = $colossus = $pheonix = $artanis = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dt = $_POST["DarkTemplar"];
    $stalker = $_POST["Stalker"];
    $colossus = $_POST["Colossus"];
    $pheonix = $_POST["Pheonix"];
    $artanis = $_POST["Artanis"];
    $units = array($dt, $stalker, $colossus, $pheonix, $artanis);
    $_SESSION['units'] = $units;
  }

// foreach($array as $key => $value)
  $unit_costs = array(
    "DarkTemplar" => 100,
    "Stalker" => 150,
    "Colossus" => 300,
    "Pheonix" => 100,
    "Artanis" => 500,
  );
  
  $_SESSION['unit_costs'] = $unit_costs;
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header><?php include 'navbar.php'?></header>
  <div id="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
          <div id="mineral-display">
            <span>Current Minerals</span><br>
            <span><img class="mineral-icon" src="resources/minerals.png">2000</span>
          </div>
      </div>
    </div>
  </div>
  <form>
    <div id="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div id="content">
            <div class="unit-display" id="content-dt">
              <img src="resources/dark_templar.png" alt="Dark Templar">
              <input class="unit-input" type="number" name="DarkTemplar" min="0" value="0">Dark Templar
              <br>
            </div>
            <div class="unit-display" id="content-st">
              <img src="resources/stalker.png" alt="Stalker">
              <input class="unit-input" type="number" name="Stalker" min="0" value="0">Stalker<br>
            </div>
            <div class="unit-display" id="content-col">
              <img src="resources/colossus.png" alt="Colossus">
              <input class="unit-input" type="number" name="Colossus" min="0" value="0">Colossus<br>
            </div>
            <div class="unit-display" id="content-ph">
              <img src="resources/pheonix.png" alt="Pheonix">
              <input class="unit-input" type="number" name="Pheonix" min="0" value="0">Pheonix<br>  
            </div>
            <div class="unit-display" id="content-ar">
              <img src="resources/artanis.png" alt="Artanis">
              <input class="unit-input" type="checkbox" name="Artanis" value="1">Artanis
              <br>
            </div>
              <input type="submit" value="Confirm Selection">
          </div>
        </div>
      </div>
    </div>
  </form> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="main.js">
    </script>
  </body>
  
</html>