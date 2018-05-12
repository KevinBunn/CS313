<?php
  session_start()
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header><?php include 'navbar.php'?></header>

      <div id="main">    
      <div id="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
              <div id="mineral-display">
                <span>Budgeted Minerals Left</span><br>
                <span><img class="mineral-icon" src="resources/minerals.png"><?php echo $_SESSION["TotalMinerals"]; ?></span>
              </div>
          </div>
        </div>
      </div>
        <div id="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div id="content">
                <div class="unit-display" id="content-dt">    
                  <img src="resources/dark_templar.png" alt="Dark Templar">
                  <?php echo "<h1>" . $_SESSION["DarkTemplar"] . "</h1>"?>
                  <br>
                </div>
                <div class="unit-display" id="content-st">    
                  <img src="resources/stalker.png" alt="Stalker">
                  <?php echo "<h1>" . $_SESSION["Stalker"] . "</h1>"?>
                </div>
                <div class="unit-display" id="content-col">
                  <img src="resources/colossus.png" alt="Colossus">
                  <?php echo "<h1>" . $_SESSION["Colossus"] . "</h1>"?>
                </div>
                <div class="unit-display" id="content-ph">  
                  <img src="resources/pheonix.png" alt="Pheonix">
                  <?php echo "<h1>" . $_SESSION["Pheonix"] . "</h1>"?>
                </div>
                  <?php
                    if ($_SESSION["Artanis"] == 1) {
                     echo "<div class=\"unit-display\" id=\"content-ar\">
                      <img src=\"resources/artanis.png\" alt=\"Artanis\">
                    </div>";
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
  </div>   
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
  </body>
</html>