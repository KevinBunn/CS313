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
      
    <div id="title">   
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div id="content" style="text-align: center">
                    <h1>Where should we warp in?</h1>
            </div>
          </div>
      </div> 
    </div>
      </div>    
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <form action="redirect.php" method="post">
            Address:<br><input type="text" name="Address"><br>
            City:<br><input type="text" name="City"><br>
            State:<br><input style="width: 100px" type="text" name="State"><br>
            Zip:<br><input style="width: 50px" type="text" name="Zip"><br>
            <input style="margin-top: 8px" type="submit" name="submit" value="submit">
        </form>
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