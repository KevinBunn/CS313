<?php
  session_start();
  if (isset($_SESSION["count"])
      $_SESSION['count'] += 1;
  else 
      $_SESSION['count'] = 0;
?>
<html>
  <body>
    <?php
      echo "<h1>$_SESSION['count']</h1>";
      //echo "<p>viewcart</p>"
    ?>
  </body>
</html>