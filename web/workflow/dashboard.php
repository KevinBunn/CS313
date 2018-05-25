<?php 
    session_start();
    if(isset($_SESSION['user']) === FALSE) {
       header('Location: login.php');
    }
?>

<html>
<body>
    <h1>dashboard for
        <?php echo $_SESSION['user']; ?>
    </h1>
  <?php 
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $current_username = $_SESSION['user'];
  
    $stmt = $db->prepare("SELECT name FROM project INNER JOIN user_to_project ua ON ua.project_id = project.project_id INNER JOIN \"user\" u ON u.user_id = ua.user_id WHERE u.username = '$current_username';");
    $stmt->execute();
    $projects = $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    var_dump($projects);
    
    foreach ($projects as $project) {
      echo "<div>$project[0]</div>";
    }
  ?>
</body>
</html>