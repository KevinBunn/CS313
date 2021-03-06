<?php
  session_start();
  $my_army_total = (($_SESSION["DarkTemplar"] * 8) + ($_SESSION["Stalker"] * 12) + ($_SESSION["Colossus"] * 20) + ($_SESSION["Pheonix"] * 5) + ($_SESSION["Artanis"] * 40));
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="confirmation">
    <header><?php include 'navbar.php'?></header>
    <div id="title">   
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div id="content" style="text-align: center">
                    <h2><?php 
                    if ($my_army_total >= 125) {
                        echo "Victory!";
                    }
                    else {
                        echo "Defeat!";
                    }
                        ?></h2>
                    <p>at <?php echo $_SESSION["Address"] . " " . $_SESSION["City"] . ", " . $_SESSION["State"] . ". " . $_SESSION["Zip"] . "."; ?></p>
            </div>
          </div>
      </div> 
    </div>
      </div>  
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4">
              <div><p style="padding-left: 10px">Army Power: <?php 
                    echo $my_army_total
                    ?>
                    </p>
                </div>    
              <div class="unit-display" id="content-dt">    
                <img src="resources/dark_templar.png" alt="Dark Templar">
                <?php echo "<h1>" . $_SESSION["DarkTemplar"] . "</h1>"?>
            </div>  
          </div>
          <div class="col-lg-4">
            <div>
                <p style="text-align: right; padding-right: 10px;">Army Power: 125</p>
            </div>  
            <div style="text-align: right" class="unit-display" id="content-dt">
                <h1>25</h1>
                <img src="resources/zergling.png" alt="Dark Templar">
            </div>  
          </div>
        </div>
          <div class="row">
              <div class="col-lg-4">
                <div class="unit-display" id="content-st">    
                  <img src="resources/stalker.png" alt="Stalker">
                  <?php echo "<h1>" . $_SESSION["Stalker"] . "</h1>"?>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                <div class="unit-display" id="content-col">
                  <img src="resources/colossus.png" alt="Colossus">
                  <?php echo "<h1>" . $_SESSION["Colossus"] . "</h1>"?>
                </div>
              </div>
              <div class="col-lg-4">
                <h1 id="versus">VS.</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                <div class="unit-display" id="content-ph">  
                  <img src="resources/pheonix.png" alt="Pheonix">
                  <?php echo "<h1>" . $_SESSION["Pheonix"] . "</h1>"?>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
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
            
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
  </body>
</html>