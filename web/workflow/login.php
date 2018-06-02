<?php 
    session_start();
    require("dbConnect.php");
    $db = get_db();
    if (!isset($db)) {
	   die("DB Connection was not set");
    }
?>

<html>
    <head>
        
    </head>
<body>
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Username: <input type="text" name="username" value="KyleRocks"><br>
        Password: <input type="password" name="password" value="P@ssw0rd1">
        <input type="submit">
    </form>
    <?php  
    echo now();
  
    $stmt = $db->prepare('SELECT username, password FROM "user";');
    $stmt->execute();
    $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      $successful_login = FALSE;
      var_dump($rows);
      foreach ($rows as $row) {
        if ($row["username"] == $_POST["username"] && $row["password"] == $_POST["password"])
          $successful_login = TRUE;
      }
      if($successful_login){
        $_SESSION["user"] = $_POST["username"];
        header('Location: dashboard.php');
      }
      else
        echo "<p style=\"color: red\">Username or Password is incorrect</p>";
    }
  ?>
    <div><a href="signup.php">or signup</a></div>
</body>
</html>