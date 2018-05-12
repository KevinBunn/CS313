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
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["Address"] = test_input($_POST["Address"]);
        $_SESSION["City"] = test_input($_POST["City"]);
        $_SESSION["State"] = test_input($_POST["State"]);
        $_SESSION["Zip"] = test_input($_POST["Zip"]);
      } 

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
      ?>
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
        <form action="<?php echo    htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Address: <input type="text" name="Address"><br>
            City: <input type="text" name="City"><br>
            State: <input type="text" name="State">
            Zip: <input type="text" name="Zip"><br>
            <input type="submit">
        </form>
        </div>    
      </div>      
    </div>    
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
  </body>
</html>