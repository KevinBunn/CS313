<?php
  session_start()
?>
<html>
  <body>
    <header><?php include 'navbar.php'?></header>
    <?php
      echo "<h1>" . $_SESSION["DarkTemplar"] . "</h1>";
      //echo "<p>viewcart</p>"
    ?>
  </body>
</html>