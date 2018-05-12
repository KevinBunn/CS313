<?php
  session_start();

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
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header id="header"><?php include 'navbar.php'?></header>
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div id="title">
                <h1>Choose Carefully Excecutor,</h1><br> <p> Adun needs your help, send an army in with what resources we have left.</p>
            </div>
        </div>
      </div>
  </div>   
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
              <div id="mineral-display">
                <span>Budgeted Minerals</span><br>
                <span><img class="mineral-icon" src="resources/minerals.png"><?php echo $_SESSION["TotalMinerals"]; ?></span>
              </div>
          </div>
        </div>
      </div>
      <form>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div id="content">
                 <form>   
                <div class="unit-display" id="content-dt">
                  <img class="mineral-icon" src="resources/minerals.png">100<br>    
                  <img src="resources/dark_templar.png" alt="Dark Templar">
                  <input class="unit-input" type="number" name="DarkTemplar" min="0" 
                  <?php echo "value=\"" . $_SESSION["DarkTemplar"] . "\""?>>Dark Templar
                  <br>
                </div>
                <div class="unit-display" id="content-st">
                  <img class="mineral-icon" src="resources/minerals.png">150<br>    
                  <img src="resources/stalker.png" alt="Stalker">
                  <input class="unit-input" type="number" name="Stalker" min="0" <?php echo "value=\"" . $_SESSION["Stalker"] . "\""?>>Stalker<br>
                </div>
                <div class="unit-display" id="content-col">
                  <img class="mineral-icon" src="resources/minerals.png">300<br>
                  <img src="resources/colossus.png" alt="Colossus">
                  <input class="unit-input" type="number" name="Colossus" min="0" <?php echo "value=\"" . $_SESSION["Colossus"] . "\""?>>Colossus<br>
                </div>
                <div class="unit-display" id="content-ph">
                  <img class="mineral-icon" src="resources/minerals.png">100<br>    
                  <img src="resources/pheonix.png" alt="Pheonix">
                  <input class="unit-input" type="number" name="Pheonix" min="0" <?php echo "value=\"" . $_SESSION["Pheonix"] . "\""?>>Pheonix<br>  
                </div>
                <div class="unit-display" id="content-ar">
                  <img class="mineral-icon" src="resources/minerals.png">500<br>    
                  <img src="resources/artanis.png" alt="Artanis">
                  <input class="unit-input" type="checkbox" name="Artanis">Artanis
                  <br>
                </div>
                </form>      
              </div>
            </div>
          </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="main.js">
    </script>
  </body>
  
</html>