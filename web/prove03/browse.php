<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['units'] = $_POST["units"];
  }

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
  </head>
  <body>
  <form>
    <div id="content">
      <div id="content-dt">
        <img src="dark_templar.png" alt="Dark Templar">
        <input type="checkbox" name="units[]" value="DarkTemplar">Dark Templar
        <br>
      </div>
      <div id="content-st">
        <img src="stalker.jpeg" alt="Stalker">
        <input type="checkbox" name="units[]" value="Stalker" >Stalker<br>
      </div>
      <div id="content-col">
        <img src="colossus.png" alt="Stalker">
        <input type="checkbox" name="units[]" value="Colossus">Colossus<br>
      </div>
      <div id="content-ph">
        <img src="pheonix.png" alt="pheonix">
        <input type="checkbox" name="units[]" value="Pheonix">Pheonix<br>  
      </div>
      <div id="content-ar">
        <img src="artanis.png" alt="Artanis">
        <input type="checkbox" name="units[]" value="Artanis">Artanis
        <br>
      </div>
    </div>
  </form> 
  </body>
</html>