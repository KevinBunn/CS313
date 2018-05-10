<!DOCTPYE HTML>
<?php
  session_start()
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
<html>
  <head>
  </head>
  <body>
  <form>
    <input type="checkbox" name="units[]" value="DarkTemplar">Dark Templar<br>
    <input type="checkbox" name="units[]" value="Stalker">Stalker<br>
    <input type="checkbox" name="units[]" value="Colossus">Colossus<br>
    <input type="checkbox" name="units[]" value="Pheonix">Pheonix<br>
    <input type="checkbox" name="units[]" value="Artanis">Artanis<br>
  </form>
    
  </body>
</html>