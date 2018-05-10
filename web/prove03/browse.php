<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['units'] = $_POST["units"];
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
  <form>
    <div id="content">
      <div id="content-dt">
        <img src="dark_templar.png" alt="Dark Templar">
        <input type="checkbox" name="units[]" value="DarkTemplar">Dark Templar
        <br>
      </div>
      <div id="content-st">
        <img src="stalker.png" alt="Stalker">
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
      <input type="submit">
    </div>
  </form> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
  </body>
  
</html>